<?
define("HIDE_SIDEBAR", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
    <div class="breadcrumbs">
        <div class="breadcrumbs__container container">
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "",
                Array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            );?>
        </div>
    </div>
    <section class="cart-page make-order container">
        <h1 class="make-order__header">
            Оформление заказа
        </h1>
        <div class="make-order__list">
            <div class="make-order__type">
                <div class="make-order__type-header">
                    заказ №123
                </div>
                <div class="make-order__type-list">
                    <div class="make-order__type-item">
                        <a href="#" class="make-order__type-thumb">
                            <img src="http://www.bonzago.ru/upload/resize_cache/iblock/d98/160_160_1/gey3t0w8i8wbv1fm1221f82hf9plpvhi.jpg" alt="">
                        </a>
                        <div class="make-order__type-desc">
                            <a href="#" class="make-order__type-lnk">
                                <h2 class="make-order__type-title">Пестроткань YA201103</h2>
                            </a>
                            <span>Товар</span>
                        </div>
                        <div class="make-order__type-quant">
                            <div class="make-order__name">
                                Количество
                            </div>
                            <span class="make-order__value">1 мп</span>
                        </div>
                        <div class="make-order__type-sum">
                            <div class="make-order__name">
                                Сумма
                            </div>
                            <span class="make-order__value">0 ₽</span>
                        </div>
                    </div>
                    <div class="make-order__type-item">
                        <a href="#" class="make-order__type-thumb">
                            <img src="http://www.bonzago.ru/upload/resize_cache/iblock/d98/160_160_1/gey3t0w8i8wbv1fm1221f82hf9plpvhi.jpg" alt="">
                        </a>
                        <div class="make-order__type-desc">
                            <a href="#" class="make-order__type-lnk">
                                <h2 class="make-order__type-title">Пестроткань YA201103</h2>
                            </a>
                            <span>Товар</span>
                        </div>
                        <div class="make-order__type-quant">
                            <div class="make-order__name">
                                Количество
                            </div>
                            <span class="make-order__value">1 мп</span>
                        </div>
                        <div class="make-order__type-sum">
                            <div class="make-order__name">
                                Сумма
                            </div>
                            <span class="make-order__value">0 ₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="current-delivery">
            <div class="current-delivery__header">
                <h2 class="current-delivery__title">
                    Выберите способ доставки
                </h2>
                <div class="current-delivery__total">
                    Итого к оплате без учета доставки: <bdi>240 250₽</bdi><span class="total-items">420 мп</span>
                </div>
            </div>
            <div class="current-delivery__list">
                <div class="current-delivery__tabs">
                    <div class="current-delivery__tab active" data-cont="tab1"> <!-- Вешаем клас "active" на первую табу -->
                        Транспортная компания
                    </div>
                    <div class="current-delivery__tab" data-cont="tab2">
                        Самовывоз
                    </div>
                    <div class="current-delivery__tab" data-cont="tab3">
                        Почта России бесплатно
                    </div>
                    <div class="current-delivery__tab" data-cont="tab4">
                        Экспресс почта
                    </div>
                </div>
                <div class="current-delivery__selected">
                    <div class="current-delivery__selected-tab active-tab" data-contid="tab1"> <!-- Вешаем клас "active-tab" на первое описание для активной табы -->
                        <div class="delivery-type-item">
                            <label>
                                <input type="radio" name="direction">
                                <span></span>
                                Доставка до терминала
                            </label>
                            <input type="text" placeholder="Укажите город">
                            <input type="text" placeholder="Укажите адресс">
                        </div>
                        <div class="delivery-type-item">
                            <label>
                                <input type="radio" name="direction">
                                <span></span>
                                Доставка до двери
                            </label>
                            <input type="text" placeholder="Город">
                            <input type="text" placeholder="Улица">
                            <input type="text" placeholder="Дом, квартира">
                        </div>
                        <div class="company-list">
                            <div class="company-list__header">
                                <div class="company-list__item">
                                    <div class="company-list__name">
                                        компания
                                    </div>
                                    <div class="company-list__time">
                                        срок доставки
                                    </div>
                                    <div class="company-list__price">
                                        стоимость
                                    </div>
                                    <div class="company-list__select">

                                    </div>
                                </div>
                            </div>
                            <div class="company-list__content">
                                <div class="company-list__item">
                                    <div class="company-list__name">
                                        Название транспортной компании
                                    </div>
                                    <div class="company-list__time">
                                        7 дней
                                    </div>
                                    <div class="company-list__price">
                                        10 000 ₽
                                    </div>
                                    <div class="company-list__select">
                                        <label>
                                            <input type="radio" name="company-name" value="company-1">
                                            <span>
                                                выбрать
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="company-list__item">
                                    <div class="company-list__name">
                                        Название транспортной компании
                                    </div>
                                    <div class="company-list__time">
                                        7 дней
                                    </div>
                                    <div class="company-list__price">
                                        10 000 ₽
                                    </div>
                                    <div class="company-list__select">
                                        <label>
                                            <input type="radio" name="company-name" value="company-2">
                                            <span>
                                                выбрать
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="company-list__item">
                                    <div class="company-list__name">
                                        Название транспортной компании
                                    </div>
                                    <div class="company-list__time">
                                        7 дней
                                    </div>
                                    <div class="company-list__price">
                                        10 000 ₽
                                    </div>
                                    <div class="company-list__select">
                                        <label>
                                            <input type="radio" name="company-name" value="company-3">
                                            <span>
                                                выбрать
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="current-delivery__selected-tab" data-contid="tab2">
                        Самовывоз
                    </div>
                    <div class="current-delivery__selected-tab" data-contid="tab3">
                        <div class="delivery-type-item">
                            <input type="text" placeholder="Укажите Индекс">
                            <input type="text" placeholder="Укажите Город">
                            <input type="text" placeholder="Укажите Улицу">
                            <input type="text" placeholder="Укажите дом/квартиру">
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Фамилия">
                            <input type="text" placeholder="Телефон">
                            <input type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="current-delivery__selected-tab" data-contid="tab4">
                        <div class="delivery-type-item">
                            <input type="text" placeholder="Укажите Индекс">
                            <input type="text" placeholder="Укажите Город">
                            <input type="text" placeholder="Укажите Улицу">
                            <input type="text" placeholder="Укажите дом/квартиру">
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Фамилия">
                            <input type="text" placeholder="Телефон">
                            <input type="text" placeholder="Email">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

            $(document ).ready(function() {
                if ($('.current-delivery__list').length){
                    $('.current-delivery__tab').on('click', function(){
                        let ClickedNav = $(this).data('cont');
                        let NeedElem = $( ".current-delivery__selected-tab[data-contid='"+ClickedNav+"']" );
                        $('.current-delivery__tab').removeClass('active');
                        $(this).addClass('active');
                        $('.current-delivery__selected-tab').removeClass('active-tab');
                        NeedElem.addClass('active-tab');
                    });
                }
            });

        </script>

<?php $APPLICATION->SetTitle("Заказы");
?><?$APPLICATION->IncludeComponent("bitrix:sale.order.ajax", "bootstrap_v4", array(
	"PAY_FROM_ACCOUNT" => "Y",
	"COUNT_DELIVERY_TAX" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
	"ALLOW_AUTO_REGISTER" => "Y",
	"SEND_NEW_USER_NOTIFY" => "Y",
	"DELIVERY_NO_AJAX" => "N",
	"TEMPLATE_LOCATION" => "popup",
	"PROP_1" => array(
	),
	"PATH_TO_BASKET" => "/personal/cart/",
	"PATH_TO_PERSONAL" => "/personal/order/",
	"PATH_TO_PAYMENT" => "/personal/order/payment/",
	"PATH_TO_ORDER" => "/personal/order/make/",
	"SET_TITLE" => "Y" ,
	"SHOW_ACCOUNT_NUMBER" => "Y",
	"DELIVERY_NO_SESSION" => "Y",
	"COMPATIBLE_MODE" => "N",
	"BASKET_POSITION" => "before",
	"BASKET_IMAGES_SCALING" => "adaptive",
	"SERVICES_IMAGES_SCALING" => "adaptive",
	"USER_CONSENT" => "Y",
	"USER_CONSENT_ID" => "1",
	"USER_CONSENT_IS_CHECKED" => "Y",
	"USER_CONSENT_IS_LOADED" => "Y"
	),
	false
);?>


    </section>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>