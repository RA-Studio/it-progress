<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult= [
    "TITLE"=>$arParams['UF_PROPERTIES']['UF_SERVICES_TITLE']['VALUE'],
    "SUBTITLE"=>$arParams['UF_PROPERTIES']['UF_SERVICES_SUBTITLE']['VALUE'],
];
$res = CIBlock::GetList(
    Array('SORT'=>'ASC'),
    Array(
        'SITE_ID'=>SITE_ID,
        'ACTIVE'=>'Y',
        "ID"=>$arParams['UF_PROPERTIES']['UF_BLOCK_DIRECTIONS']['VALUE']
    ), true
);
$IBLOCKS = [];
while($ar_res = $res->Fetch())
{   $ar_res['LINK']='/'.$ar_res['CODE'].'/';
    $arResult['IBLOCKS'][$ar_res['ID']] = $ar_res;
    array_push($IBLOCKS,$ar_res['ID']);
}
foreach ($IBLOCKS as $id){
    $arFilter = array('IBLOCK_ID' => $id, "ACTIVE"=>'Y');
    $rsSect = CIBlockSection::GetList(array(),$arFilter,false,['UF_*']);
    while ($arSect = $rsSect->GetNext()) {
        $arResult['IBLOCKS'][$id]['SECTIONS'][$arSect['ID']]=$arSect;
    }
    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "IBLOCK_SECTION_ID","DETAIL_PAGE_URL","UF_*");
    $rsElement = CIBlockElement::GetList(Array(), $arFilter, false, array(),$arSelect);
    while($arElement = $rsElement->GetNextElement()) {
        $arFields = $arElement->GetFields();
        //$arFields['PROPERTIES'] = $arElement->GetProperties();
        $arResult['IBLOCKS'][$id]['SECTIONS'][$arFields['IBLOCK_SECTION_ID']]['ITEMS'][$arFields['ID']]=$arFields;
    }
}

?>