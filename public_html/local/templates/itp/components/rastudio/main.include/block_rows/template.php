<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="delivery-main-col-shadow">
    <?if (!empty($arParams['PROPERTIES']['UF_ROWS_TITLE']['VALUE'])){?>
        <div class="delivery-main-col-shadow__title"><?=$arParams['PROPERTIES']['UF_ROWS_TITLE']['VALUE']?></div>
    <?}?>
    <?if (!empty($arParams['PROPERTIES']['UF_BLOCK_ROWS']['VALUE'])){?>
        <?foreach ($arParams['PROPERTIES']['UF_BLOCK_ROWS']['VALUE'] as $key=>$value){?>
            <div class="delivery-main-col-shadow-row">
                <span><?=$value?>:</span>
                <span><?=$arParams['PROPERTIES']['UF_BLOCK_ROWS']['DESCRIPTION'][$key]?></span>
            </div>
            <?}?>
    <?}?>
</div>