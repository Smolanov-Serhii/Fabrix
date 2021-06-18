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
        <?php
        $videofile = CFile::GetPath($arResult["PROPERTIES"]["VIDEO_FILE"]["VALUE"]);
        if ($videofile) {
            ?>
            <div class="single-producer__media">
                <video width="480" controls poster="https://archive.org/download/WebmVp8Vorbis/webmvp8.gif">
                    <source src="<?php echo $videofile; ?>" type="video/mp4">
                </video>
            </div>
            <?php
        }
        ?>

        <?php
        $photogalery = CFile::GetPath($arResult["PROPERTIES"]["PHOTOGALERY"]["VALUE"]);
        if ($photogalery) {

            ?>
            <div class="single-producer__photogaley">
                <h3 class="single-producer__photogaley-title">
                    Медиагалерея
                </h3>
                <div class="single-producer__media">
                    <video width="480" controls poster="https://archive.org/download/WebmVp8Vorbis/webmvp8.gif">
                        <source src="<?php echo $photogalery; ?>" type="video/mp4">
                    </video>
                </div>
            </div>
            <?php
        }
        ?>
        <?
        // additional photos
        $LINE_ELEMENT_COUNT = 2; // number of elements in a row
        if(count($arResult["PHOTOGALERY"])>0):?>
            <a name="more_photo"></a>
            <?foreach($arResult["PHOTOGALERY"] as $PHOTO):?>
            <?php
                var_dump($PHOTO["SRC"]);
                ?>
                <img border="0" src="<?=$PHOTO["SRC"]?>" width="<?=$PHOTO["WIDTH"]?>" height="<?=$PHOTO["HEIGHT"]?>"
                     alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" /><br />
            <?endforeach?>
        <?endif?>
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