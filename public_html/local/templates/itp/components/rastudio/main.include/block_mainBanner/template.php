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

?><div class="main-banner">
    <div class="main-banner-wrap">
        <div class="main-banner-col">
            <?if(!empty($arParams['PROPERTIES']['UF_BLOCK_BANNER_IMG']['VALUE'])){?>
                <img src="<?=CFile::GetPath($arParams['PROPERTIES']['UF_BLOCK_BANNER_IMG']['VALUE'])?>" alt="<?=$arParams['FIELDS']['NAME']?>">
            <?}?>
        </div>
        <?if (!empty($arParams['PROPERTIES']['UF_BANNER_TITLE']['VALUE']) || !empty($arParams['PROPERTIES']['UF_BANNER_TEXT']['VALUE']['TEXT']) || !empty($arParams['PROPERTIES']['UF_BANNER_LINK']['VALUE'])){?>
            <div class="main-banner-col">
                <?if (!empty($arParams['PROPERTIES']['UF_BANNER_TITLE']['VALUE'])){?>
                    <h1 class="main-banner-col__title"><?=$arParams['PROPERTIES']['UF_BANNER_TITLE']['VALUE']?></h1>
                <?}?>
                <?if (!empty($arParams['PROPERTIES']['UF_BANNER_TEXT']['VALUE']['TEXT'])){?>
                    <div class="main-banner-col__text"><?=$arParams['PROPERTIES']['UF_BANNER_TEXT']['VALUE']['TEXT']?></div>
                <?}?>
                <?if (!empty($arParams['PROPERTIES']['UF_BANNER_LINK']['VALUE'])){?>
                    <a class="main-banner-col__btn" href="<?=$arParams['PROPERTIES']['UF_BANNER_LINK']['VALUE']?>"><?=$arParams['PROPERTIES']['UF_BANNER_LINK']['DESCRIPTION']?$arParams['PROPERTIES']['UF_BANNER_LINK']['DESCRIPTION']:'Подробнее'?></a>
                <?}?>
            </div>
        <?}?>
    </div>
</div>