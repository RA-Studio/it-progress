<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $properties,$sections;
$properties = [];
$sections = [];
foreach(CIBlockSectionPropertyLink::GetArray($arParams['IBLOCK_ID'], $arParams['PARENT_SECTION']) as $PID => $arLink){
    if ($arLink['SMART_FILTER']=='Y'){
        $property = CIBlockProperty::GetByID($PID, $arParams['IBLOCK_ID'], false)->GetNext();
        $properties[$PID] = $property;
    }
}

function fieldValueMultiSort($array,$field) {
    $sortArr = array();
    foreach($array as $key=>$val){
        $sortArr[$key] = $val['ITEM']['PROPERTIES'][$field]['VALUE_SORT'];
    }
    array_multisort($sortArr,$array);
    return $array;
}

$arFilter = array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'ACTIVE' => 'Y', 'SECTION_ID' => $arParams['PARENT_SECTION']);
$rsSections = CIBlockSection::GetList(['SORT' => 'ASC'], $arFilter, false, array('ID', 'NAME', 'UF_MAIN', 'UF_PAGE'));
while ($arSection = $rsSections->Fetch()) {
    $res = CIBlockSection::GetByID($arSection['ID']);
    $ar_res = $res->GetNext();
    $arSection['SECTION_PAGE_URL'] = $ar_res['SECTION_PAGE_URL'];
    $arSelect = array("ID", "IBLOCK_ID", "NAME", "UF_*");
    $arFilter = array("IBLOCK_ID" => 4, "ACTIVE" => "Y", "ID" => $arSection['UF_PAGE']);
    $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arFields['PROPERTIES'] = $ob->GetProperties();
        $arSection['ITEM'] = $arFields;
    }
    $sections[$arSection['ID']] = $arSection;

    $subFilter = array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'ACTIVE' => 'Y', 'SECTION_ID' => $arSection['ID']);
    $subSections = CIBlockSection::GetList(array(), $subFilter, false, array('ID', 'NAME', 'UF_MAIN', 'UF_PAGE'));
    while ($arSubSection = $subSections->Fetch()) {
        $sub = CIBlockSection::GetByID($arSubSection['ID']);
        $sub_sub = $sub->GetNext();
        $arSubSection['SECTION_PAGE_URL'] = $sub_sub['SECTION_PAGE_URL'];
        $sections[$arSection['ID']]['SUBSECTION'][$arSubSection['ID']] = $arSubSection;
    }
}
if (!empty($_POST['sort'])) {
    $sections = fieldValueMultiSort($sections, $_POST['sort']);
}

$arResult['PROPERTIES']=$properties;
$arResult['SECTIONS']=$sections;
