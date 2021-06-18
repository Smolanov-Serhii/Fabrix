<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="single-producer">
    <div class="single-producer__title">
        <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
            <h1>Производитель <?= $arResult["NAME"] ?></h1>
        <? endif; ?>
    </div>
    <div class="single-producer__about">
        <? echo $arResult["DETAIL_TEXT"];; ?>
    </div>
    <?php $sertimage = CFile::GetPath($arResult["PROPERTIES"]["SERTIFICATE"]["VALUE"]); ?>
    <?php
    if ($sertimage) {
        ?>
        <div class="single-producer__sertificate">
            <img class="single-producer__sertificate-img" src="<?php echo $sertimage; ?>"
                 alt="Производитель <?= $arResult["NAME"] ?>">
        </div>
        <?php
    }
    ?>

    <div class="clearfix" style="clear:both"></div>
    <div class="single-producer__galery">

        <? foreach ($arResult["VIDEOPRESENTATION"] as $PHOTO): ?>
            <img border="0" src="<?= $PHOTO["SRC"] ?>" width="<?= $PHOTO["WIDTH"] ?>" height="<?= $PHOTO["HEIGHT"] ?>"
                 alt="<?= $arResult["NAME"] ?>" title="<?= $arResult["NAME"] ?>"/><br/>

        <? endforeach ?>

        <?php
        $videofile = $arResult['DISPLAY_PROPERTIES']['VIDEOPRESENTATION']['~VALUE'];
        $cover = CFile::GetPath($arResult["PROPERTIES"]["VIDEO_COVER"]["VALUE"]);
        if ($videofile) {
            ?>
            <div class="single-producer__media lets-play" data-video="<?php echo $videofile; ?>">
                <img src="<?echo $cover;?>" alt="Обложка видео">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="39.25" stroke="white" stroke-width="1.5"/>
                    <path d="M51.6062 37.9816L34.6355 28.3848C32.8353 27.3637 31 28.4805 31 30.4886V50.5229C31 52.2242 32.1148 53 33.1508 53C33.6388 53 34.1359 52.847 34.6296 52.5485L51.6765 42.1809C52.5335 41.6578 53.0147 40.8837 52.9997 40.0563C52.9854 39.2281 52.4783 38.4714 51.6062 37.9816ZM50.5341 40.329L33.4881 50.6941C33.3735 50.764 33.2831 50.7989 33.2211 50.8164C33.2044 50.7548 33.1877 50.6601 33.1877 50.5229V30.4895C33.1877 30.2832 33.2253 30.1793 33.2253 30.1535C33.2923 30.1577 33.4094 30.1918 33.5567 30.2749L50.5249 39.8717C50.7342 39.9906 50.7961 40.0937 50.8162 40.0713C50.8053 40.0995 50.7342 40.2051 50.5341 40.329Z" fill="white" stroke="white"/>
                </svg>
            </div>
            <div id="video-wrap"></div>
            <?php
        }
        ?>

        <?
        $LINE_ELEMENT_COUNT = 2;
        if (count($arResult["PHOTOGALERY"]) > 0):?>
            <div class="single-producer__photogaley">
                <h2 class="single-producer__photogaley-title">
                    Медиагалерея
                </h2>
                <div class="categories__navigates">
                    <div class="swiper-pagination single-producer-pag">
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
                <div class="single-producer__slider swiper-container">
                    <div class="swiper-wrapper">
                        <? foreach ($arResult["PHOTOGALERY"] as $PHOTO):?>
                            <div class="swiper-slide single-producer__slider-item">
                                <img border="0" src="<?= $PHOTO["SRC"] ?>" width="<?= $PHOTO["WIDTH"] ?>"
                                     height="<?= $PHOTO["HEIGHT"] ?>"
                                     alt="<?= $arResult["NAME"] ?>" title="<?= $arResult["NAME"] ?>"/><br/>
                            </div>
                        <? endforeach ?>
                    </div>
                </div>
            </div>
        <? endif ?>
    </div>
    <?php

    $LINE_ELEMENT_COUNT = 2;
    if (count($arResult["AWARDS_SERTIFICATE"]) > 0):?>
        <div class="single-producer__awards">
            <h2 class="single-producer__awards-title">
                Награды и сертификаты
            </h2>
            <div class="single-producer__awards-list">
                <? foreach ($arResult["AWARDS_SERTIFICATE"] as $PHOTO):?>
                <div class="single-producer__awards-item">
                    <img border="0" src="<?= $PHOTO["SRC"] ?>" width="<?= $PHOTO["WIDTH"] ?>"
                         height="<?= $PHOTO["HEIGHT"] ?>"
                         alt="<?= $arResult["NAME"] ?>" title="<?= $arResult["NAME"] ?>"/>
                </div>
                <? endforeach ?>
            </div>
        </div>
    <? endif ?>
    <div class="single-producer__new">
        <h2 class="single-producer__new-title">
            Новинки производителя
        </h2>
        <div class="single-producer__new-container">


        </div>
    </div>
    <?php
    if (array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
        ?>
        <div class="news-detail-share">
            <noindex>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
                    "HANDLERS" => $arParams["SHARE_HANDLERS"],
                    "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                    "PAGE_TITLE" => $arResult["~NAME"],
                    "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                    "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                    "HIDE" => $arParams["SHARE_HIDE"],
                ),
                    $component,
                    array("HIDE_ICONS" => "Y")
                );
                ?>
            </noindex>
        </div>
        <?
    }
    ?>


    <script>
        $(document).ready(function () {
            $('.single-producer__title').prependTo('.single-producer__about');
            $('.single-producer__sertificate').appendTo('.single-producer__about');
            $('.single-producer__about').columnize({
                columns: 2,
                lastNeverTallest: true
            });
        });

    </script>

</div>