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

if ($APPLICATION->GetCurPage(false) == '/catalog/*/*') {
    $FL_CATALOG = true;
};

?>
<header class="header">
    <div class="header__mobile container">
        <a href="<?=SITE_DIR?>" class="middle-nav__logo">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/images/logo.svg" alt="Логотип">
        </a>
        <div class="header__mobile-pers">
            <a href="/personal/orders/">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M15.5976 13.5309L12.3907 11.1258V6.22649C12.3907 5.73388 11.9925 5.33569 11.4999 5.33569C11.0073 5.33569 10.6091 5.73388 10.6091 6.22649V11.5712C10.6091 11.8518 10.741 12.1164 10.9655 12.2838L14.5286 14.9562C14.6889 15.0765 14.876 15.1344 15.0622 15.1344C15.3338 15.1344 15.6011 15.0123 15.7757 14.7771C16.0715 14.3843 15.9913 13.8257 15.5976 13.5309Z" fill="#222222"/>
                        <path d="M11.5 0C5.15851 0 0 5.15851 0 11.5C0 17.8415 5.15851 23 11.5 23C17.8415 23 23 17.8415 23 11.5C23 5.15851 17.8415 0 11.5 0ZM11.5 21.2184C6.14194 21.2184 1.78156 16.8581 1.78156 11.5C1.78156 6.14194 6.14194 1.78156 11.5 1.78156C16.859 1.78156 21.2184 6.14194 21.2184 11.5C21.2184 16.8581 16.8581 21.2184 11.5 21.2184Z" fill="#222222" stroke="white" stroke-width="0.2"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="23" height="23" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <a href="/personal/private/">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M11.5 12.9551C4.58936 12.9551 0.783447 16.2243 0.783447 22.1607C0.783447 22.6243 1.15922 23.0001 1.62286 23.0001H21.3771C21.8408 23.0001 22.2165 22.6243 22.2165 22.1607C22.2166 16.2246 18.4107 12.9551 11.5 12.9551ZM2.49281 21.3213C2.82299 16.8827 5.84906 14.6339 11.5 14.6339C17.151 14.6339 20.1771 16.8827 20.5075 21.3213H2.49281Z" fill="#222222"/>
                        <path d="M11.5 0C8.32559 0 5.93188 2.44186 5.93188 5.67979C5.93188 9.01254 8.42972 11.7236 11.5 11.7236C14.5703 11.7236 17.0681 9.01254 17.0681 5.68006C17.0681 2.44186 14.6744 0 11.5 0ZM11.5 10.045C9.35529 10.045 7.61071 8.08693 7.61071 5.68006C7.61071 3.36159 9.24645 1.67882 11.5 1.67882C13.7175 1.67882 15.3893 3.39879 15.3893 5.68006C15.3893 8.08693 13.6447 10.045 11.5 10.045Z" fill="#222222"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="23" height="23" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <a href="/personal/cart/" class="byu">
                <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.2092 26H0.790955C0.566718 26 0.353227 25.907 0.203196 25.7439C0.0531639 25.5811 -0.0190135 25.3634 0.00430225 25.1454L2.02405 6.32723C2.06643 5.93328 2.40582 5.63414 2.81071 5.63414H20.1894C20.5941 5.63414 20.9337 5.93328 20.9759 6.32723L22.9956 25.1454C23.0192 25.3634 22.9468 25.5811 22.797 25.7439C22.6467 25.907 22.4332 26 22.2092 26Z" fill="#222222"/>
                    <path d="M20.9759 6.32723C20.9337 5.93328 20.5941 5.63414 20.1894 5.63414H11.4998V26H22.2092C22.4332 26 22.6467 25.907 22.797 25.7439C22.9468 25.5811 23.0192 25.3634 22.9956 25.1454L20.9759 6.32723Z" fill="#222222"/>
                    <path d="M15.6023 9.66074C15.1654 9.66074 14.8114 9.31439 14.8114 8.88692V4.78732C14.8114 3.00105 13.3259 1.54764 11.5 1.54764C9.67406 1.54764 8.18874 3.00105 8.18874 4.78732V8.88712C8.18874 9.31439 7.83455 9.66093 7.39783 9.66093C6.96092 9.66093 6.60692 9.31439 6.60692 8.88712V4.78732C6.60692 2.14769 8.80185 0 11.5 0C14.1981 0 16.3932 2.14769 16.3932 4.78732V8.88712C16.3932 9.31439 16.039 9.66074 15.6023 9.66074Z" fill="#222222"/>
                    <path d="M11.5 0V1.54764C13.3259 1.54764 14.8114 3.00105 14.8114 4.78732V8.88692C14.8114 9.31439 15.1654 9.66074 15.6023 9.66074C16.039 9.66074 16.3932 9.31439 16.3932 8.88712V4.78732C16.3932 2.14769 14.1981 0 11.5 0Z" fill="#222222"/>
                </svg>
                <span class="item__count-mob">
                    <?php

                    ?>
            </span>
            </a>
        </div>
    </div>
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
                <div class="category-nav__keeper">
                    <div class="category-nav__burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="name-pc">
                        КАТАЛОГ
                    </div>
                    <div class="name-mob">
                        каталог продукции
                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 1L6 6L1 1" stroke="white" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "favorite-nav", Array(
                            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
                            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                            "IBLOCK_ID" => "3",	// Инфоблок
                            "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                            "SECTION_CODE" => "",	// Код раздела
                            "SECTION_FIELDS" => array(	// Поля разделов
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
                            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                                0 => "",
                                1 => "",
                            ),
                            "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                            "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
                            "VIEW_MODE" => "LIST",	// Вид списка подразделов
                        ),
                            false
                        );?>

                </div>

            </div>
            <div class="category-nav__mob-wrap">
                <div class="category-nav__mob-serch">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.7615 21.6449L18.0964 16.9686C19.5807 15.215 20.4024 13.0363 20.4024 10.6981C20.4024 5.3575 16.0554 1 10.7012 1C5.34706 1 1 5.3575 1 10.6981C1 16.0386 5.34701 20.3961 10.7012 20.3961C13.0337 20.3961 15.2072 19.5725 16.9566 18.0845L21.6482 22.7609C21.8072 22.9203 22.0192 23 22.2048 23C22.4168 23 22.6024 22.9203 22.7614 22.7609C23.0795 22.4421 23.0795 21.9372 22.7615 21.6449ZM16.4265 16.4372C14.8891 17.9517 12.8747 18.8019 10.7012 18.8019C6.22167 18.8019 2.59037 15.1618 2.59037 10.6981C2.59037 6.23432 6.22167 2.59421 10.7012 2.59421C15.1807 2.59421 18.812 6.23432 18.812 10.6981C18.8121 12.8768 17.9638 14.9227 16.4265 16.4372Z" fill="white" stroke="white" stroke-width="0.2"/>
                    </svg>
                </div>
                <div class="category-nav__mob-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
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