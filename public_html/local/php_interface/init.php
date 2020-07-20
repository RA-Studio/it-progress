<?
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/BlocksSortFieldType.php");
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/FormSettingsFieldType.php");
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/IBlockBindingFieldType.php");
include($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/handlers/MenuBindingFieldType.php");

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
        "MenuBinding",
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

function setSettings($name, $iblock, $elementID){
    if (CModule::IncludeModule("iblock")){
        $UF_SETTING_SITE = [];
        $db_props = CIBlockElement::GetProperty($iblock, $elementID, array("sort" => "asc"));
        while($ar_props = $db_props->Fetch()){
            if($ar_props['PROPERTY_TYPE'] == 'F' || $ar_props['MULTIPLE'] == 'Y'){
                if ($ar_props['PROPERTY_TYPE'] == 'F') {
                    $ar_props['VALUE'] = CFile::GetPath($ar_props['VALUE']);
                }
                $add = array( //добавление только нужных полей, можно поменять
                    'PROPERTY_VALUE_ID' => $ar_props['PROPERTY_VALUE_ID'],
                    'VALUE'=> $ar_props['VALUE'],
                    'DESCRIPTION' =>$ar_props['DESCRIPTION']
                );
                if (!empty($UF_SETTING_SITE[$ar_props['CODE']])){
                    array_push($UF_SETTING_SITE[$ar_props['CODE']]['VALUES'],$add);
                }else{
                    $UF_SETTING_SITE[$ar_props['CODE']] = $ar_props;
                    $UF_SETTING_SITE[$ar_props['CODE']]['VALUES'] = array($add);
                }
            }else{

                $UF_SETTING_SITE[$ar_props['CODE']] = $ar_props;
            }
        }
        $GLOBALS['UF_CONTENT_'.$name] =  $UF_SETTING_SITE;
    };
}