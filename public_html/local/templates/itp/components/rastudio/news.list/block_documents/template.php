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
<?if (!empty($arResult["ITEMS"])){?>
    <div class="documents"><?
        foreach($arResult["ITEMS"] as $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?><div class="documents-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="documents-item-wrap">
                    <div class="documents-item-img">
                        <img src="<?=CFile::GetPath($arItem['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="<?=$arItem['NAME']?>">
                    </div>
                    <div class="documents-item__title"><?=$arItem['NAME']?></div>
                    <?foreach ($arItem['PROPERTIES']['UF_DOCUMENTS']['VALUE'] as $key=>$document){?>
                        <a class="documents-item__link" href="<?=CFile::GetPath($document)?>" download><?=$arItem['PROPERTIES']['UF_DOCUMENTS']['DESCRIPTION'][$key]?></a>
                    <?}?>
                </div>
            </div>
        <?}?>
    </div>
<?}?>