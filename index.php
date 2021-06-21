<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>
    <section class="main-banner">
        <div class="main-banner__img">
            <img alt="Главный баннер" src="/bitrix/templates/bonzago/images/banner-main.jpg">
        </div>
        <div class="container">
            <div class="main-banner__wrapper">
                <h1 class="main-banner__title">Текстильная online площадка</h1>
                <p class="main-banner__content">
                    Прямой доступ к десяткам проверенных поставщиков тканей и трикотажа
                </p>
                <a class="main-banner__lnk" href="/about/">подробнее</a>
            </div>
        </div>
    </section>
    <div class="test">
    </div>
    <section class="categories container">
        <div class="categories__container">
            <div class="categories__navigates">
                <div class="swiper-pagination">
                </div>
                <div class="swiper-button-prev">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.0606 8L9.53027 1.53033L8.46961 0.469666L0.939283 8L8.46961 15.5303L9.53027 14.4697L3.0606 8Z" fill="#222222"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.9394 8.00006L0.469727 1.53039L1.53039 0.469727L9.06072 8.00006L1.53039 15.5304L0.469727 14.4697L6.9394 8.00006Z" fill="#222222"/>
                    </svg>
                </div>
            </div>
            <h2 class="categories__title block-title">Выбирайте по категориям</h2>
            <p class="categories__sub block-subtitle">
                Краткий текст о том, что у нас широкий ассортимент на любой вкус и можно выбрать по интересующим
                категориям.
            </p>
            <? $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "",
                array(
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
                    "SECTION_CODE" => $_REQUEST["#SECTION_CODE#"],
                    "SECTION_FIELDS" => array("", ""),
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    "SECTION_URL" => "/catalog/#SECTION_CODE#",
                    "SECTION_USER_FIELDS" => array("", ""),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "2",
                    "VIEW_MODE" => "LINE"
                )
            ); ?>
        </div>
    </section>
    <section class="samples container">
        <h2 class="samples__title block-title">
            Выбирай и заказывай образцы бесплатно </h2>
        <div class="samples__list">
            <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample1.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample2.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample3.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample4.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample1.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample2.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample3.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a> <a href="#" class="samples__item">
                <div class="samples__img">
                    <img alt="Ткань для мужских костюмов" src="/bitrix/templates/bonzago/images/sample4.svg"
                         class="svg">
                </div>
                <div class="samples__desc">
                    Ткань для мужских костюмов
                </div>
            </a>
        </div>
    </section>
    <section class="range">
        <div class="range__container container">
            <div class="range__title block-title">
                Широкий ассортимент
            </div>
            <div class="range__list">
                <div class="range__item">
                    <div class="range__img">
                        <img alt="4576 образцов тканей и трикотажа в наличии в Москве"
                             src="/bitrix/templates/bonzago/images/range1.jpg">
                    </div>
                    <h3 class="range__desc">
                        4576 образцов тканей и трикотажа в наличии в Москве </h3>
                </div>
                <div class="range__item">
                    <div class="range__img">
                        <img alt="Всегда актуальный ассортимент с детальным описанием материала"
                             src="/bitrix/templates/bonzago/images/range2.jpg">
                    </div>
                    <h3 class="range__desc">
                        Всегда актуальный ассортимент с детальным описанием материала </h3>
                </div>
                <div class="range__item">
                    <div class="range__img">
                        <img alt="2 новых проверенных поставщика за последнюю неделю"
                             src="/bitrix/templates/bonzago/images/range3.jpg">
                    </div>
                    <h3 class="range__desc">
                        2 новых проверенных поставщика за последнюю неделю </h3>
                </div>
                <div class="range__item">
                    <div class="range__img">
                        <img alt="5 профессиональных продакт-менеджеров ежедневно обновляют информацию о наличии"
                             src="/bitrix/templates/bonzago/images/range4.jpg">
                    </div>
                    <h3 class="range__desc">
                        5 профессиональных продакт-менеджеров ежедневно обновляют информацию о наличии </h3>
                </div>
                <div class="range__item">
                    <div class="range__img">
                        <img alt="547 новинок за последний месяц" src="/bitrix/templates/bonzago/images/range5.jpg">
                    </div>
                    <h3 class="range__desc">
                        547 новинок за последний месяц </h3>
                </div>
            </div>
        </div>
    </section>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/main-orders.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/producers.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/control.php"
    )
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>