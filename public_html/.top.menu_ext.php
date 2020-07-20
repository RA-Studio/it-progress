<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION, $arTheme;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "rastudio:menu.sections", "",
    Array(
        "IBLOCK_TYPE" => "",
        "IBLOCK_ID" => "4",
        "DEPTH_LEVEL" => "3",
        "MENU_CACHE_TIME" => "3600000",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "N",
        "CACHE_SELECTED_ITEMS" => "N",
        "ALLOW_MULTI_SELECT" => "Y",
    )
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>