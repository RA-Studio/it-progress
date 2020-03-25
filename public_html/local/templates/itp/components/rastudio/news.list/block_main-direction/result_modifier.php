<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult= [
    "TITLE"=>$arParams['UF_PROPERTIES']['UF_DIRECTIONS_TITLE'],
    "SUBTITLE"=>$arParams['UF_PROPERTIES']['UF_DIRECTIONS_SUBTITLE'],
    "DESCRIPTION"=>$arParams['UF_PROPERTIES']['UF_DIRECTIONS_TEXT'],
    "LINK"=>$arParams['UF_PROPERTIES']['UF_DIRECTIONS_LINK'],
];
$res = CIBlock::GetList(
    Array(),
    Array(
        'SITE_ID'=>SITE_ID,
        'ACTIVE'=>'Y',
        "ID"=>$arParams['UF_PROPERTIES']['UF_BLOCK_DIRECTIONS']['VALUE']
    ), true
);
while($ar_res = $res->Fetch())
{   $ar_res['LINK']='/'.$ar_res['CODE'].'/';
    $arResult['IBLOCKS'][$ar_res['ID']] = $ar_res;
}

?>