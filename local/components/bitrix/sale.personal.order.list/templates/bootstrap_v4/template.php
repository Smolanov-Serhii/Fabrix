<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main,
    Bitrix\Main\Localization\Loc,
    Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs("/bitrix/components/bitrix/sale.order.payment.change/templates/bootstrap_v4/script.js");
Asset::getInstance()->addCss("/bitrix/components/bitrix/sale.order.payment.change/templates/bootstrap_v4/style.css");
CJSCore::Init(array('clipboard', 'fx'));

Loc::loadMessages(__FILE__);

if (!empty($arResult['ERRORS']['FATAL'])) {
    foreach ($arResult['ERRORS']['FATAL'] as $code => $error) {
        if ($code !== $component::E_NOT_AUTHORIZED)
            ShowError($error);
    }
    $component = $this->__component;
    if ($arParams['AUTH_FORM_IN_TEMPLATE'] && isset($arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED])) {
        ?>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="alert alert-danger"><?= $arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED] ?></div>
            </div>
            <? $authListGetParams = array(); ?>
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <? $APPLICATION->AuthForm('', false, false, 'N', false); ?>
            </div>
        </div>
        <?
    }

} else {
    if (!empty($arResult['ERRORS']['NONFATAL'])) {
        foreach ($arResult['ERRORS']['NONFATAL'] as $error) {
            ShowError($error);
        }
    }
    if (!count($arResult['ORDERS'])) {
        if ($_REQUEST["filter_history"] == 'Y') {
            if ($_REQUEST["show_canceled"] == 'Y') {
                ?>
                <h3><?= Loc::getMessage('SPOL_TPL_EMPTY_CANCELED_ORDER') ?></h3>
                <?
            } else {
                ?>
                <h3><?= Loc::getMessage('SPOL_TPL_EMPTY_HISTORY_ORDER_LIST') ?></h3>
                <?
            }
        } else {
            ?>
            <h3 class="emtpy"><?= Loc::getMessage('SPOL_TPL_EMPTY_ORDER_LIST') ?></h3>
            <?
        }

    }

    if ($_REQUEST["filter_history"] !== 'N') {
        $paymentChangeData = array();
        $orderHeaderStatus = null;

        foreach ($arResult['ORDERS'] as $key => $order) {
            if ($orderHeaderStatus !== $order['ORDER']['STATUS_ID'] && $arResult['SORT_TYPE'] == 'STATUS') {
                $orderHeaderStatus = $order['ORDER']['STATUS_ID'];

            }
            ?>
            <div class="content-line__item">
                <div class="content-line__item-type">
                    Товар
                </div>
                <div class="content-line__item-order">
                    <?php echo Loc::getMessage('SPOL_TPL_ORDER') . Loc::getMessage('SPOL_TPL_NUMBER_SIGN') . $order['ORDER']['ACCOUNT_NUMBER']; ?>
                </div>
                <div class="content-line__item-date">
                    <?= $order['ORDER']['DATE_INSERT_FORMATED']; ?>
                </div>
                <div class="content-line__item-status">
                    <?php
                    if ($payment['PAID'] === 'Y') {
                        ?>
                        <span class="sale-order-list-status-success"><?= Loc::getMessage('SPOL_TPL_PAID') ?></span>

                        <?
                    } elseif ($order['ORDER']['IS_ALLOW_PAY'] == 'N') {
                        ?>
                        <span class="sale-order-list-status-restricted">

                            <?= Loc::getMessage('SPOL_TPL_RESTRICTED_PAID') ?>
                        </span>
                        <?
                    } else {
                        ?>
                        <span class="sale-order-list-status-alert">
                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9615 4.33655H15V2.46155C15 1.26861 14.0295 0.298096 12.8365 0.298096H2.16346C0.970518 0.298096 0 1.26861 0 2.46155V10.5385C0 11.7314 0.970518 12.7019 2.16346 12.7019H12.8365C14.0295 12.7019 15 11.7314 15 10.5385V8.66347H10.9615C9.7686 8.66347 8.79809 7.69295 8.79809 6.50001C8.79809 5.30707 9.7686 4.33655 10.9615 4.33655Z"
                                      fill="#FF9900"/>
                                <path d="M10.9612 5.2019C10.2454 5.2019 9.66309 5.78421 9.66309 6.49999C9.66309 7.21577 10.2454 7.79808 10.9612 7.79808H14.9996V5.20193H10.9612V5.2019ZM11.5381 6.93268H10.9612C10.7222 6.93268 10.5285 6.73894 10.5285 6.49999C10.5285 6.26104 10.7222 6.0673 10.9612 6.0673H11.5381C11.7771 6.0673 11.9708 6.26104 11.9708 6.49999C11.9708 6.73894 11.7771 6.93268 11.5381 6.93268Z"
                                      fill="#FF9900"/>
                            </svg>
                            Не оплачено
                            <!--                             --><?//=Loc::getMessage('SPOL_TPL_NOTPAID')
                            ?>
                        </span>

                        <a class="invoice" href="" download>скачать счет</a>
                        <?
                    }
                    ?>
                </div>
            </div>
            <?
        }
    } else {
        $orderHeaderStatus = null;

        if ($_REQUEST["show_canceled"] === 'Y' && count($arResult['ORDERS'])) {
            ?>
            <div class="row mb-3">
                <div class="col">
                    <h2><?= Loc::getMessage('SPOL_TPL_ORDERS_CANCELED_HEADER') ?></h2>
                </div>
            </div>
            <?
        }

        foreach ($arResult['ORDERS'] as $key => $order) {
            if ($orderHeaderStatus !== $order['ORDER']['STATUS_ID'] && $_REQUEST["show_canceled"] !== 'Y') {
                $orderHeaderStatus = $order['ORDER']['STATUS_ID'];
                ?>
                <h1 class="sale-order-title">
                    <?= Loc::getMessage('SPOL_TPL_ORDER_IN_STATUSES') ?>
                    &laquo;<?= htmlspecialcharsbx($arResult['INFO']['STATUS'][$orderHeaderStatus]['NAME']) ?>&raquo;
                </h1>
                <?
            }
            ?>
            <div class="row sale-order-list-accomplished-title-container">
                <h3 class="g-font-size-20 mb-1 mt-1 col-sm">
                    <?= Loc::getMessage('SPOL_TPL_ORDER') ?>
                    <?= Loc::getMessage('SPOL_TPL_NUMBER_SIGN') ?>
                    <?= htmlspecialcharsbx($order['ORDER']['ACCOUNT_NUMBER']) ?>
                    <?= Loc::getMessage('SPOL_TPL_FROM_DATE') ?>
                    <span class="text-nowrap"><?= $order['ORDER']['DATE_INSERT'] ?>,</span>
                    <?= count($order['BASKET_ITEMS']); ?>
                    <?
                    $count = mb_substr(count($order['BASKET_ITEMS']), -1);
                    if ($count == '1') {
                        echo Loc::getMessage('SPOL_TPL_GOOD');
                    } elseif ($count >= '2' || $count <= '4') {
                        echo Loc::getMessage('SPOL_TPL_TWO_GOODS');
                    } else {
                        echo Loc::getMessage('SPOL_TPL_GOODS');
                    }
                    ?>
                    <?= Loc::getMessage('SPOL_TPL_SUMOF') ?>
                    <span class="text-nowrap"><?= $order['ORDER']['FORMATED_PRICE'] ?></span>
                </h3>
                <div class="col-sm-auto">
                    <?
                    if ($_REQUEST["show_canceled"] !== 'Y') {
                        ?>
                        <span class="sale-order-list-accomplished-date">
									<?= Loc::getMessage('SPOL_TPL_ORDER_FINISHED') ?>
								</span>
                        <?
                    } else {
                        ?>
                        <span class="sale-order-list-accomplished-date canceled-order">
									<?= Loc::getMessage('SPOL_TPL_ORDER_CANCELED') ?>
								</span>
                        <?
                    }
                    ?>
                    <span class="sale-order-list-accomplished-date"><?= $order['ORDER']['DATE_STATUS_FORMATED'] ?></span>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col pt-3 sale-order-list-inner-container">
                    <div class="row pb-3 sale-order-list-inner-row">
                        <div class="col-auto col-auto sale-order-list-about-container">
                            <a class="g-font-size-15 sale-order-list-about-link"
                               href="<?= htmlspecialcharsbx($order["ORDER"]["URL_TO_DETAIL"]) ?>"><?= Loc::getMessage('SPOL_TPL_MORE_ON_ORDER') ?></a>
                        </div>
                        <div class="col"></div>
                        <div class="col-auto sale-order-list-repeat-container">
                            <a class="g-font-size-15 sale-order-list-cancel-link"
                               href="<?= htmlspecialcharsbx($order["ORDER"]["URL_TO_COPY"]) ?>"><?= Loc::getMessage('SPOL_TPL_REPEAT_ORDER') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?
        }
    }

    echo $arResult["NAV_STRING"];

    if ($_REQUEST["filter_history"] !== 'Y') {
        $javascriptParams = array(
            "url" => CUtil::JSEscape($this->__component->GetPath() . '/ajax.php'),
            "templateFolder" => CUtil::JSEscape($templateFolder),
            "templateName" => $this->__component->GetTemplateName(),
            "paymentList" => $paymentChangeData,
            "returnUrl" => CUtil::JSEscape($arResult["RETURN_URL"]),
        );
        $javascriptParams = CUtil::PhpToJSObject($javascriptParams);
        ?>
        <script>
            BX.Sale.PersonalOrderComponent.PersonalOrderList.init(<?=$javascriptParams?>);
        </script>
        <?
    }
}
?>
