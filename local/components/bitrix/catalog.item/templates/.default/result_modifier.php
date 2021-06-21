<?

$arResult["PRODUCERS"] = array();
if (isset($arResult["PROPERTIES"]["PRODUCERS"]["VALUE"]) && is_array($arResult["PROPERTIES"]["PRODUCERS"]["VALUE"])) {
    foreach ($arResult["PROPERTIES"]["PRODUCERS"]["VALUE"] as $FILE) {
        $FILE = CFile::GetFileArray($FILE);
        if (is_array($FILE))
            $arResult["PRODUCERS"][] = $FILE;
    }
}
?>