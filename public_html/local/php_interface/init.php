<?
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/BlocksSortFieldType.php");
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/FormSettingsFieldType.php");
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/IBlockBindingFieldType.php");

use Bitrix\Main\EventManager;
$eventManager = EventManager::getInstance();


$eventManager->addEventHandler(
    "iblock",
    "OnIBlockPropertyBuildList",
    array(
        "BlocksSort",
        "GetUserTypeDescription"
    )
);
$eventManager->addEventHandler(
    "iblock",
    "OnIBlockPropertyBuildList",
    array(
        "IBlockBinding",
        "GetUserTypeDescription"
    )
);
$eventManager->addEventHandler(
    "iblock",
    "OnIBlockPropertyBuildList",
    array(
        "FormSettings",
        "GetUserTypeDescription"
    )
);


AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);
function _Check404Error(){
    if(defined('ERROR_404') && ERROR_404=='Y' || CHTTP::GetLastStatus() == "404 Not Found"){
        GLOBAL $APPLICATION;
        $APPLICATION->RestartBuffer();
        require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/header.php';
        require $_SERVER['DOCUMENT_ROOT'].'/404.php';
        require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/footer.php';
    }
}
function OnBeforeUserUpdateHandler(&$arFields)
{
    $arFields["LOGIN"] = $arFields["EMAIL"];
    return $arFields;
}