<?
define("HIDE_SIDEBAR", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
    <section class="interview">
        <div class="interview__container">
            <h1 class="interview__title">
                Оценка нашего веб-сайта
            </h1>
            <p class="interview__desc">
                Здравствуйте, потратьте, пожалуйста, несколько минут своего времени на заполнение следующей анкеты.
            </p>
            <?$APPLICATION->IncludeComponent(
                "bitrix:voting.current",
                "",
                Array(
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "CHANNEL_SID" => "ESTIMATE",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "VOTE_ALL_RESULTS" => "N",
                    "VOTE_ID" => "1"
                )
            );?>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>