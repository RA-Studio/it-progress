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
    <div class="product-main-col sidebar-col">
        <div class="product-main-col-moreinfo">
            <?foreach($arResult["ITEMS"] as $arItem){
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="product-main-col-moreinfo__title" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?=$arItem['NAME']?>
                </div>
                <?=$arItem['DETAIL_TEXT']?>
                <?/*
                <svg style="" width="1201" height="2" viewBox="0 0 1201 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.986206" y1="1.43503" x2="1200.99" y2="1.43503" stroke="black" stroke-opacity="0.15"></line>
                </svg>
*/?>
            <?}?>
            <?if (!empty($arParams['UF_SIDEBAR_DESCRIPTION']['TEXT'])){?>
                <div class="product-main-col-moreinfo__bot"><?=$arParams['UF_SIDEBAR_DESCRIPTION']['TEXT']?></div>
            <?}?>
        </div>
    </div>
