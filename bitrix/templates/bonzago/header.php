<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
    return;
}

\Bitrix\Landing\Connector\Mobile::prologMobileHit();
?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID;?>" lang="<?= LANGUAGE_ID;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
    <?$APPLICATION->ShowProperty('AfterHeadOpen');?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;600;700;900&display=swap" rel="stylesheet">
    <?php
        use \Bitrix\Main\Page\Asset;
    ?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?
    $APPLICATION->ShowHead();
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");

    ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=002aea30-4c19-446a-8a25-9d7ff12d5a8a&lang=ru_RU" type="text/javascript" defer></script>
</head>
<body class="<?$APPLICATION->ShowProperty('BodyClass');?>" <?$APPLICATION->ShowProperty('BodyTag');?>>
<?
$APPLICATION->ShowPanel();
?>
<header class="header">
    <div class="top-nav ">
        <div class="top-nav__wrapper container">
            <nav class="page-nav">
                <ul class="left-menu">
                    <li>
                        <a href="/about/#about-us">О нас</a>
                    </li>
                    <li>
                        <a href="/about/#pay">Оплата</a>
                    </li>
                    <li>
                        <a href="/about/#dost">Доставка</a>
                    </li>
                    <li>
                        <a href="/about/#varanty">Гарантия</a>
                    </li>
                    <li>
                        <a href="/about/#contacts">Контакты</a>
                    </li>
                    <li>
                        <a href="/producers/">Производители</a>
                    </li>
                    <li>
                        <a href="/interview/">Опрос</a>
                    </li>
                </ul>
            </nav>
            <div class="account">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket.line",
                    "bootstrap_v4",
                    array(
                        "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                        "SHOW_PERSONAL_LINK" => "N",
                        "SHOW_NUM_PRODUCTS" => "N",
                        "SHOW_TOTAL_PRICE" => "N",
                        "SHOW_PRODUCTS" => "N",
                        "POSITION_FIXED" =>"N",
                        "SHOW_AUTHOR" => "Y",
                        "SHOW_BASKET" => "N",
                        "PATH_TO_REGISTER" => SITE_DIR."login/",
                        "PATH_TO_PROFILE" => SITE_DIR."personal/private/"
                    ),
                    false,
                    array()
                );?>
            </div>
        </div>
    </div>
    <div class="middle-nav container">
        <a href="<?=SITE_DIR?>" class="middle-nav__logo">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/images/logo.svg" alt="Логотип">
        </a>
        <div class="middle-nav__search">
            <form class="form" action="/search/index.php">
                <div class="form__img">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/images/search-icon.svg" alt="Искать">
                </div>
                <input name="q" type="text" required placeholder="Начните вводить то, что Вы ищете ...">
                <input type="submit" value="найти" name="s">
            </form>
        </div>
        <div class="middle-nav__order">
            <a href="/personal/orders/" class="status">
                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/status-icon.svg" alt="Статус заказа">
                <span class="js-status">Статус заказа</span>
            </a>
            <?

            use Bitrix\Main\Application;
            use Bitrix\Main\Web\Cookie;
            $application = Application::getInstance();
            $context = $application->getContext();
            /* Вывод количества избранного */
            if(!$USER->IsAuthorized()) // Для неавторизованного
            {
                $arElements = unserialize($APPLICATION->get_cookie('favorites'));
                if($arElements == '')
                    unset($arElements);

                foreach($arElements as $k=>$fav) // Checking empty IDs
                {
                    if($fav == '0')
                        unset($arElements[$k]);
                    unset($fav);
                }
                $wishCount = count($arElements);
            }
            else {
                $idUser = $USER->GetID();
                $rsUser = CUser::GetByID($idUser);
                $arUser = $rsUser->Fetch();
                foreach($arUser['UF_FAVORITES'] as $k=>$fav) // Checking empty IDs
                {
                    if($fav == '0')
                    {
                        unset($arUser['UF_FAVORITES'][$k]);
                        unset($fav);
                    }
                }
                $wishCount = count($arUser['UF_FAVORITES']);


            }

            /* Вывод количества избранного */
            ?>
            <a id="want" class="favorite block" href="/personal/wishlist/">
                <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9374 2.25085C22.5915 0.799395 20.7447 0 18.7369 0C17.2361 0 15.8616 0.471787 14.6516 1.40215C14.041 1.87176 13.4878 2.44631 13 3.11691C12.5124 2.44651 11.959 1.87176 11.3482 1.40215C10.1384 0.471787 8.76393 0 7.26311 0C5.25526 0 3.40829 0.799395 2.06239 2.25085C0.732559 3.68534 0 5.64507 0 7.7693C0 9.95565 0.819443 11.957 2.57874 14.0678C4.15256 15.9559 6.41451 17.8727 9.03391 20.0922C9.92833 20.8501 10.9422 21.7093 11.9949 22.6245C12.273 22.8667 12.6299 23 13 23C13.3699 23 13.727 22.8667 14.0047 22.6249C15.0574 21.7095 16.0719 20.8499 16.9667 20.0916C19.5857 17.8725 21.8476 15.9559 23.4215 14.0676C25.1808 11.957 26 9.95565 26 7.7691C26 5.64507 25.2674 3.68534 23.9374 2.25085Z" fill="#222222"/>
                </svg>
                <div class="icon"></div>
                <span class="item__count col"><?php echo $wishCount;?></span>
            </a>
            <a href="/personal/cart/" class="byu">
                <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.1404 28H0.859733C0.615998 28 0.383943 27.8998 0.220865 27.7242C0.0577869 27.5488 -0.0206668 27.3145 0.00467636 27.0797L2.20006 6.81394C2.24612 6.38968 2.61502 6.06754 3.05511 6.06754H21.945C22.3849 6.06754 22.754 6.38968 22.7999 6.81394L24.9953 27.0797C25.0208 27.3145 24.9422 27.5488 24.7793 27.7242C24.616 27.8998 24.3839 28 24.1404 28Z" fill="#6E1F8A"/>
                    <path d="M22.7999 6.81394C22.754 6.38968 22.3849 6.06754 21.945 6.06754H12.4998V28H24.1404C24.3839 28 24.616 27.8998 24.7793 27.7242C24.9422 27.5488 25.0208 27.3145 24.9953 27.0797L22.7999 6.81394Z" fill="#6E1F8A"/>
                    <path d="M16.9591 10.4039C16.4841 10.4039 16.0994 10.0309 16.0994 9.57053V5.15558C16.0994 3.2319 14.4847 1.66669 12.5 1.66669C10.5153 1.66669 8.90081 3.2319 8.90081 5.15558V9.57074C8.90081 10.0309 8.51581 10.4041 8.04112 10.4041C7.56621 10.4041 7.18144 10.0309 7.18144 9.57074V5.15558C7.18144 2.3129 9.56722 0 12.5 0C15.4327 0 17.8187 2.3129 17.8187 5.15558V9.57074C17.8187 10.0309 17.4337 10.4039 16.9591 10.4039Z" fill="#6E1F8A"/>
                    <path d="M12.5 0V1.66669C14.4847 1.66669 16.0994 3.2319 16.0994 5.15558V9.57053C16.0994 10.0309 16.4841 10.4039 16.9591 10.4039C17.4337 10.4039 17.8187 10.0309 17.8187 9.57074V5.15558C17.8187 2.3129 15.4327 0 12.5 0Z" fill="#6E1F8A"/>
                </svg>
                <span class="item__count"><?
                    $cntBasketItems = CSaleBasket::GetList(false, ["FUSER_ID" => CSaleBasket::GetBasketUserID(), "LID" => SITE_ID, "ORDER_ID" => "NULL"], [], false, ['ID']);
                    echo $cntBasketItems;
                    ?></span>
            </a>
        </div>
    </div>
    <div class="category-nav">
        <nav class="container">
            <div class="category-nav__popular">

            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "",
                Array(
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "COUNT_ELEMENTS" => "N",
                    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                    "FILTER_NAME" => "sectionsFilter",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "catalog",
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array("", ""),
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    "SECTION_URL" => "",
                    "SECTION_USER_FIELDS" => array("", ""),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "2",
                    "VIEW_MODE" => "LIST"
                )
            );?>
        </nav>
    </div>
</header>
<main class="w-100 <?$APPLICATION->ShowProperty('MainClass');?>" <?$APPLICATION->ShowProperty('MainTag');?>>