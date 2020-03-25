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
<div class="main-about">
    <div class="main-about-wrap">
        <?if(!empty($arResult['PHOTO'])){?>
            <div class="main-about-wrap-col">
                <img src="<?=CFile::GetPath($arResult['PHOTO'])?>" alt="<?=$arResult['TITLE']?>">
            </div>
        <?}?>
        <div class="main-about-wrap-col">
            <?if(!empty($arResult['SUBTITLE'])){?>
                <div class="main-about-wrap-col__subtitle"><?=$arResult['SUBTITLE']?></div>
            <?}?>
            <?if(!empty($arResult['TITLE'])){?>
                <div class="main-about-wrap-col__title"><?=$arResult['TITLE']?></div>
            <?}?>
            <?if(!empty($arResult['~DESCRIPTION'])){?>
                <div class="main-about-wrap-col__text"><?=$arResult['~DESCRIPTION']?></div>
            <?}?>
            <?if(!empty($arResult['ITEMS'])){?>
                <?foreach($arResult["ITEMS"] as $arItem){
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?><div class="main-about-wrap-col-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="main-about-wrap-col-item__title"><?=$arItem['NAME']?></div>
                        <div class="main-about-wrap-col-item__text"><?=$arItem['PREVIEW_TEXT']?></div>
                    </div>
                <?}?>
            <?}?>
        </div>
    </div>
</div>

