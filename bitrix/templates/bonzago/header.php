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
</head>
<body class="<?$APPLICATION->ShowProperty('BodyClass');?>" <?$APPLICATION->ShowProperty('BodyTag');?>>
<?
$APPLICATION->ShowPanel();
?>
<header class="header">
    <div class="top-nav ">
        <div class="top-nav__wrapper container">
            <nav class="page-nav">
                <ul>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Оплата</a></li>
                    <li><a href="">Доставка</a></li>
                    <li><a href="">Гарантия</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </nav>
            <div class="account">
                <a class="account__lnk" href="#">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M7.00005 7.88562C2.79357 7.88562 0.476929 9.87559 0.476929 13.489C0.476929 13.7713 0.705659 14 0.987874 14H13.0122C13.2944 14 13.5232 13.7713 13.5232 13.489C13.5232 9.87578 11.2065 7.88562 7.00005 7.88562ZM1.51741 12.9781C1.71839 10.2764 3.56035 8.90754 7.00005 8.90754C10.4398 8.90754 12.2817 10.2764 12.4829 12.9781H1.51741Z" fill="#6E1F8A"/>
                            <path d="M7 0C5.06776 0 3.61072 1.48635 3.61072 3.45726C3.61072 5.48589 5.13114 7.13609 7 7.13609C8.86887 7.13609 10.3893 5.48589 10.3893 3.45743C10.3893 1.48635 8.93225 0 7 0ZM7 6.11436C5.69453 6.11436 4.63261 4.92248 4.63261 3.45743C4.63261 2.04619 5.62828 1.02189 7 1.02189C8.34977 1.02189 9.3674 2.06883 9.3674 3.45743C9.3674 4.92248 8.30548 6.11436 7 6.11436Z" fill="#6E1F8A"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="14" height="14" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Вход / Регистрация</span>
                </a>
            </div>
        </div>
    </div>
    <div class="middle-nav container">
        <div class="middle-nav__logo">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/images/logo.svg" alt="Логотип">
        </div>
        <div class="middle-nav__search">
            <form class="form" action="" method="get">
                <div class="form__img">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/images/search-icon.svg" alt="Искать">
                </div>
                <input type="text" required placeholder="Начните вводить то, что Вы ищете ...">
                <input type="submit" value="найти">
            </form>
        </div>
        <div class="middle-nav__order">
            <div class="status">
                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/status-icon.svg" alt="Статус заказа">
                <span class="js-status">Статус заказа</span>
            </div>
            <a href="#" class="favorite">
                <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9374 2.25085C22.5915 0.799395 20.7447 0 18.7369 0C17.2361 0 15.8616 0.471787 14.6516 1.40215C14.041 1.87176 13.4878 2.44631 13 3.11691C12.5124 2.44651 11.959 1.87176 11.3482 1.40215C10.1384 0.471787 8.76393 0 7.26311 0C5.25526 0 3.40829 0.799395 2.06239 2.25085C0.732559 3.68534 0 5.64507 0 7.7693C0 9.95565 0.819443 11.957 2.57874 14.0678C4.15256 15.9559 6.41451 17.8727 9.03391 20.0922C9.92833 20.8501 10.9422 21.7093 11.9949 22.6245C12.273 22.8667 12.6299 23 13 23C13.3699 23 13.727 22.8667 14.0047 22.6249C15.0574 21.7095 16.0719 20.8499 16.9667 20.0916C19.5857 17.8725 21.8476 15.9559 23.4215 14.0676C25.1808 11.957 26 9.95565 26 7.7691C26 5.64507 25.2674 3.68534 23.9374 2.25085Z" fill="#222222"/>
                </svg>
                <span class="item__count">0</span>
            </a>
            <a href="#" class="byu">
                <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.1404 28H0.859733C0.615998 28 0.383943 27.8998 0.220865 27.7242C0.0577869 27.5488 -0.0206668 27.3145 0.00467636 27.0797L2.20006 6.81394C2.24612 6.38968 2.61502 6.06754 3.05511 6.06754H21.945C22.3849 6.06754 22.754 6.38968 22.7999 6.81394L24.9953 27.0797C25.0208 27.3145 24.9422 27.5488 24.7793 27.7242C24.616 27.8998 24.3839 28 24.1404 28Z" fill="#6E1F8A"/>
                    <path d="M22.7999 6.81394C22.754 6.38968 22.3849 6.06754 21.945 6.06754H12.4998V28H24.1404C24.3839 28 24.616 27.8998 24.7793 27.7242C24.9422 27.5488 25.0208 27.3145 24.9953 27.0797L22.7999 6.81394Z" fill="#6E1F8A"/>
                    <path d="M16.9591 10.4039C16.4841 10.4039 16.0994 10.0309 16.0994 9.57053V5.15558C16.0994 3.2319 14.4847 1.66669 12.5 1.66669C10.5153 1.66669 8.90081 3.2319 8.90081 5.15558V9.57074C8.90081 10.0309 8.51581 10.4041 8.04112 10.4041C7.56621 10.4041 7.18144 10.0309 7.18144 9.57074V5.15558C7.18144 2.3129 9.56722 0 12.5 0C15.4327 0 17.8187 2.3129 17.8187 5.15558V9.57074C17.8187 10.0309 17.4337 10.4039 16.9591 10.4039Z" fill="#6E1F8A"/>
                    <path d="M12.5 0V1.66669C14.4847 1.66669 16.0994 3.2319 16.0994 5.15558V9.57053C16.0994 10.0309 16.4841 10.4039 16.9591 10.4039C17.4337 10.4039 17.8187 10.0309 17.8187 9.57074V5.15558C17.8187 2.3129 15.4327 0 12.5 0Z" fill="#6E1F8A"/>
                </svg>
                <span class="item__count">0</span>
            </a>
        </div>
    </div>
    <div class="category-nav">
        <nav class="container">
            <ul>
                <li>
                    <a>Популярное</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
                <li>
                    <a>Костюмные ткани</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
                <li>
                    <a>Ткани с мембраной</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
                <li>
                    <a>Трикотаж спортивный</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
                <li>
                    <a>Курточные ткани</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
                <li>
                    <a>Трикотаж</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
                <li>
                    <a>Сорочечные ткани</a>
                    <ul>
                        <li><a href="#">Костюмные ткани</a></li>
                        <li><a href="#">Ткани с мембраной</a></li>
                        <li><a href="#">Трикотаж спортивный</a></li>
                        <li><a href="#">Курточные ткани</a></li>
                        <li><a href="#">Трикотаж</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main class="w-100 <?$APPLICATION->ShowProperty('MainClass');?>" <?$APPLICATION->ShowProperty('MainTag');?>>