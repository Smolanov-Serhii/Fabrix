<?
$arResult["SERTIFICATE"] = array();
if(isset($arResult["PROPERTIES"]["SERTIFICATE"]["VALUE"]) && is_array($arResult["PROPERTIES"]["SERTIFICATE"]["VALUE"]))
{
    foreach($arResult["PROPERTIES"]["SERTIFICATE"]["VALUE"] as $FILE)
    {
        $FILE = CFile::GetFileArray($FILE);
        if(is_array($FILE))
            $arResult["SERTIFICATE"][]=$FILE;
    }
}

$arResult["VIDEOPRESENTATION"] = array();
if(isset($arResult["PROPERTIES"]["VIDEOPRESENTATION"]["VALUE"]) && is_array($arResult["PROPERTIES"]["VIDEOPRESENTATION"]["VALUE"]))
{
    foreach($arResult["PROPERTIES"]["VIDEOPRESENTATION"]["VALUE"] as $FILE)
    {
        $FILE = CFile::GetFileArray($FILE);
        if(is_array($FILE))
            $arResult["VIDEOPRESENTATION"][]=$FILE;
    }
}

$arResult["VIDEO_COVER"] = array();
if(isset($arResult["PROPERTIES"]["VIDEO_COVER"]["VALUE"]) && is_array($arResult["PROPERTIES"]["VIDEO_COVER"]["VALUE"]))
{
    foreach($arResult["PROPERTIES"]["VIDEO_COVER"]["VALUE"] as $FILE)
    {
        $FILE = CFile::GetFileArray($FILE);
        if(is_array($FILE))
            $arResult["VIDEO_COVER"][]=$FILE;
    }
}


$arResult["PHOTOGALERY"] = array();
if (isset($arResult["PROPERTIES"]["PHOTOGALERY"]["VALUE"]) && is_array($arResult["PROPERTIES"]["PHOTOGALERY"]["VALUE"])) {
    foreach ($arResult["PROPERTIES"]["PHOTOGALERY"]["VALUE"] as $FILE) {
        $FILE = CFile::GetFileArray($FILE);
        if (is_array($FILE))
            $arResult["PHOTOGALERY"][] = $FILE;
    }
}

$arResult["AWARDS_SERTIFICATE"] = array();
if (isset($arResult["PROPERTIES"]["AWARDS_SERTIFICATE"]["VALUE"]) && is_array($arResult["PROPERTIES"]["AWARDS_SERTIFICATE"]["VALUE"])) {
    foreach ($arResult["PROPERTIES"]["AWARDS_SERTIFICATE"]["VALUE"] as $FILE) {
        $FILE = CFile::GetFileArray($FILE);
        if (is_array($FILE))
            $arResult["AWARDS_SERTIFICATE"][] = $FILE;
    }
}
?>