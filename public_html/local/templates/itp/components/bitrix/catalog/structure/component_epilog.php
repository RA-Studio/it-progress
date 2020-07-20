<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

/**
 * @var array $templateData
 * @var array $arParams
 * @var string $templateFolder
 * @global CMain $APPLICATION
 */
function ShowProductTitle(){
    global $APPLICATION;
    if (!$APPLICATION->GetPageProperty('product'))
        return '<h1 class="title">'.$APPLICATION->GetTitle(false).'</h1>';
    else
        return false;
}