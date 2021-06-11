<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}
$count = 1;
$strReturn .= '<div class="bx-breadcrumb" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
        if ($count == 1){
            $homeicon = '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M13.7649 6.25852L7.48353 0.534997C7.20783 0.283735 6.79207 0.283763 6.51647 0.534969L0.235102 6.25855C0.0142473 6.4598 -0.0587057 6.76988 0.0491925 7.04848C0.157118 7.32709 0.419891 7.50709 0.718676 7.50709H1.72192V13.2416C1.72192 13.469 1.90627 13.6534 2.13363 13.6534H5.57658C5.80395 13.6534 5.9883 13.469 5.9883 13.2416V9.7598H8.01179V13.2417C8.01179 13.469 8.19614 13.6534 8.4235 13.6534H11.8663C12.0937 13.6534 12.278 13.4691 12.278 13.2417V7.50709H13.2814C13.5802 7.50709 13.843 7.32706 13.9509 7.04848C14.0587 6.76985 13.9857 6.4598 13.7649 6.25852Z" fill="#222222"/>
                            <path d="M12.1705 1.16833H9.40552L12.5822 4.05681V1.58002C12.5822 1.35266 12.3979 1.16833 12.1705 1.16833Z" fill="#222222"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="14" height="14" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
';
        } else {
            $homeicon = "";
        }
		$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
				    ' . $homeicon . '
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</div>';
        $count ++;
	}
	else
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item">
				'.$arrow.'
				<span>'.$title.'</span>
			</div>';
        $count ++;
	}
}

$strReturn .= '</div>';

return $strReturn;
