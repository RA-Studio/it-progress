<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

/**
 * @global CMain $APPLICATION
 * @var CBitrixComponent $component
 * @var array $arParams
 * @var array $arResult
 * @var array $arCurSection
 */

if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] === 'Y')
{
	$basketAction = isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '';
}
else
{
	$basketAction = isset($arParams['SECTION_ADD_TO_BASKET_ACTION']) ? $arParams['SECTION_ADD_TO_BASKET_ACTION'] : '';
}
?>
<?
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "empty",
    array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
        "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
        "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
        "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
        "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
        "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
    ),
    $component,
    array("HIDE_ICONS" => "Y")
);

?>
<?$arFilter = array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'ACTIVE'=>'Y', 'UF_MAIN'=>0, 'ID'  => $arResult['VARIABLES']['SECTION_ID']);
$rsSections = CIBlockSection::GetList(array(), $arFilter,false,array('NAME','UF_MAIN','UF_PAGE'));
if ($mainSection = $rsSections->Fetch())
{?>
<div class="content">
	<h1 class="title"><?$APPLICATION->ShowTitle(false)?></h1>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "structure",
        array(
            "COMPONENT_TEMPLATE" => "structure",
            "IBLOCK_TYPE" => "structure",
            "IBLOCK_ID" => "4",
            "ELEMENT_ID" => $mainSection["UF_PAGE"],
            "ELEMENT_CODE" => "",
            "CHECK_DATES" => "Y",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "UF_BANNER_TITLE",
                1 => "UF_CLIENTS_TITLE",
                2 => "UF_SERVICES_TITLE",
                3 => "UF_DIRCTIONS_TITLE",
                4 => "UF_ABOUT_FEATURE_TITLE",
                5 => "UF_DIRCTIONS_TEXT",
                6 => "UF_ABOUT_FEATURE_TEXT",
                7 => "UF_CLIENTS_SUBTITLE",
                8 => "UF_SERVICES_SUBTITLE",
                9 => "UF_DIRCTIONS_SUBTITLE",
                10 => "UF_ABOUT_FEATURE_SUBTITLE",
                11 => "UF_BANNER_LINK",
                12 => "UF_DIRCTIONS_LINK",
                13 => "UF_BANNER_TEXT",
                14 => "",
            ),
            "IBLOCK_URL" => "",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "Y",
            "SET_TITLE" => "Y",
            "SET_CANONICAL_URL" => "N",
            "SET_BROWSER_TITLE" => "Y",
            "BROWSER_TITLE" => "-",
            "SET_META_KEYWORDS" => "Y",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "Y",
            "META_DESCRIPTION" => "-",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ADD_ELEMENT_CHAIN" => "Y",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "USE_PERMISSIONS" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "USE_SHARE" => "N",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Страница",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "FILE_404" => ""
        ),
        false
    ); ?>
</div>
<?}?>

