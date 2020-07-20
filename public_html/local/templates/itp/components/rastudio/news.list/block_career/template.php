<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
$sections = [];
$arFilter = array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'ACTIVE'=>'Y', 'SECTION_ID'=>$arParams['PARENT_SECTION']);
$rsSections = CIBlockSection::GetList(array(), $arFilter,false,array('ID','NAME','UF_MAIN','UF_PAGE'));
while ($arSection = $rsSections->Fetch())
{
    $res = CIBlockSection::GetByID($arSection['ID']);
    $ar_res = $res->GetNext();
    $arSection['SECTION_PAGE_URL'] = $ar_res['SECTION_PAGE_URL'];
    $arSelect = Array("ID", "IBLOCK_ID", "NAME","UF_*");
    $arFilter = Array("IBLOCK_ID"=>4, "ACTIVE"=>"Y", "ID"=>$arSection['UF_PAGE']);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        $arFields['PROPERTIES'] = $ob->GetProperties();
        $arSection['ITEM'] = $arFields;
    }
    $sections[$arSection['ID']] = $arSection;
}
?>
<?if (!empty($sections)){?>
    <?foreach($sections as $section){?>
        <a class="career-item" href="<?=$section['SECTION_PAGE_URL']?>">
            <div class="career-item__title"><?=$section['ITEM']['NAME']?></div>
            <div class="career-item__text"><?=$section['ITEM']['PROPERTIES']['UF_VACANCY_POSITION']['VALUE']?></div>
        </a>
    <?}?>
<?}?>
