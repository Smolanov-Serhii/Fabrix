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
                </div>
                <div class="swiper-button-next">
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
    <section class="sample-order container">
        <h2 class="sample-order__title block-title">
            Удобный заказ образцов </h2>
        <p class="sample-order__subtitle block-subtitle">
            Всего 3 шага отделают Вас от идеи до получения образцов ткани прямо до Вашей двери.
        </p>
        <div class="sample-order__list">
            <div class="sample-order__item">
                <div class="sample-order__arrow">
                    <img alt="Удобный заказ образцов" src="/bitrix/templates/bonzago/images/sample-order-arrow.svg">
                </div>
                <div class="sample-order__digit">
                    1
                </div>
                <div class="sample-order__icon">
                    <img alt="Выберите материал для своей идеи и вдохновения"
                         src="/bitrix/templates/bonzago/images/sample-order-1.svg">
                </div>
                <div class="sample-order__content">
                    Выберите материал для своей идеи и вдохновения
                </div>
            </div>
            <div class="sample-order__item">
                <div class="sample-order__arrow">
                    <img alt="Удобный заказ образцов" src="/bitrix/templates/bonzago/images/sample-order-arrow.svg">
                </div>
                <div class="sample-order__digit">
                    2
                </div>
                <div class="sample-order__icon">
                    <img alt="Добавьте в корзину и укажите адрес"
                         src="/bitrix/templates/bonzago/images/sample-order-2.svg">
                </div>
                <div class="sample-order__content">
                    Добавьте в корзину и укажите адрес
                </div>
            </div>
            <div class="sample-order__item">
                <div class="sample-order__arrow">
                    <img alt="Удобный заказ образцов" src="/bitrix/templates/bonzago/images/sample-order-arrow.svg">
                </div>
                <div class="sample-order__digit">
                    3
                </div>
                <div class="sample-order__icon">
                    <img alt="Устройтесь поудобнее и расслабтесь. Доставим образцы до вашей двери"
                         src="/bitrix/templates/bonzago/images/sample-order-3.svg">
                </div>
                <div class="sample-order__content">
                    Устройтесь поудобнее и расслабтесь. Доставим образцы до вашей двери
                </div>
            </div>
        </div>
    </section>
    <section class="suppliers">
        <div class="suppliers__container">
            <div class="suppliers__img">
                <img alt="Только проверенные поставщики" src="/bitrix/templates/bonzago/images/supliers-bg.jpg">
            </div>
            <div class="suppliers__wrapper container-right">
                <h2 class="suppliers__title block-title">
                    Только проверенные поставщики </h2>
                <div class="suppliers__subtitle block-subtitle">
                    Каждый производитель прошел аудит на соответствие мировым стандартам параметров качества
                    произовдства
                </div>
                <a class="suppliers__lnk button" href="/producers/">смотреть поставщиков</a>
            </div>
        </div>
    </section>
    <section class="control container">
        <h2 class="control__title block-title">
            Полный контроль заказов </h2>
        <p class="control__subtitle block-subtitle">
            Вы видите в online режиме на каком этапе сейчас находится Ваш заказ
        </p>
        <div class="control__list">
            <div class="control__item">
                <div class="control__top">
                    <div class="control__image">
                        <img alt="Выставлен счет, ожидается оплата"
                             src="/bitrix/templates/bonzago/images/control-1.svg">
                    </div>
                    <div class="control__arrow">
                        <img src="/bitrix/templates/bonzago/images/control-next.svg" alt="Далее">
                    </div>
                </div>
                <div class="control__content">
                    Выставлен счет, ожидается оплата
                </div>
            </div>
            <div class="control__item">
                <div class="control__top">
                    <div class="control__image">
                        <img alt="Счет оплачен, товар в производстве, деньги зарезервированы"
                             src="/bitrix/templates/bonzago/images/control-2.svg">
                    </div>
                    <div class="control__arrow">
                        <img src="/bitrix/templates/bonzago/images/control-next.svg" alt="Далее">
                    </div>
                </div>
                <div class="control__content">
                    Счет оплачен, товар в производстве, деньги зарезервированы
                </div>
            </div>
            <div class="control__item">
                <div class="control__top">
                    <div class="control__image">
                        <img alt="Товар произведен, идет проверка качества"
                             src="/bitrix/templates/bonzago/images/control-3.svg">
                    </div>
                    <div class="control__arrow">
                        <img src="/bitrix/templates/bonzago/images/control-next.svg" alt="Далее">
                    </div>
                </div>
                <div class="control__content">
                    Товар произведен, идет проверка качества
                </div>
            </div>
            <div class="control__item">
                <div class="control__top">
                    <div class="control__image">
                        <img alt="Товар поступил на склад в Москве, ожидается отгрузка клиенту"
                             src="/bitrix/templates/bonzago/images/control-4.svg">
                    </div>
                    <div class="control__arrow">
                        <img src="/bitrix/templates/bonzago/images/control-next.svg" alt="Далее">
                    </div>
                </div>
                <div class="control__content">
                    Товар поступил на склад в Москве, ожидается отгрузка клиенту
                </div>
            </div>
            <div class="control__item">
                <div class="control__top">
                    <div class="control__image">
                        <img alt="Товар отгружен клиенту" src="/bitrix/templates/bonzago/images/control-5.svg">
                    </div>
                    <div class="control__arrow">
                        <img src="/bitrix/templates/bonzago/images/control-next.svg" alt="Далее">
                    </div>
                </div>
                <div class="control__content">
                    Товар отгружен клиенту
                </div>
            </div>
            <div class="control__item">
                <div class="control__top">
                    <div class="control__image">
                        <img alt="Товар получен, резервированные деньги списаны"
                             src="/bitrix/templates/bonzago/images/control-6.svg">
                    </div>
                    <div class="control__arrow">
                        <img src="/bitrix/templates/bonzago/images/control-done.svg" alt="Готово">
                    </div>
                </div>
                <div class="control__content">
                    Товар получен, резервированные деньги списаны
                </div>
            </div>
        </div>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>