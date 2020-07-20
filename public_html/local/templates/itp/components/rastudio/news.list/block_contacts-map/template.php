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
<div class="contacts tabs">
    <div class="contacts-info">
        <div class="contacts-info-row">
            <?if (!empty($arResult['TIME'])){?>
                <div class="contacts-info-row__title"><?=$arResult['TIME']?></div>
            <?}
            if (!empty($arResult['PHONE'])){?>
                <a class="contacts-info-row__link" href="tel:<?=$arResult['PHONE']?>"><?=$arResult['PHONE']?></a>
            <?}
            if (!empty($arResult['MAIL'])){?>
                <a class="contacts-info-row__link" href="mailto:<?=$arResult['MAIL']?>"><?=$arResult['MAIL']?></a>
            <?}?>
        </div>
        <?if(!empty($arResult['ITEMS'])){?>
            <?foreach($arResult["ITEMS"] as $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?><div class="contacts-info-row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="contacts-info-row__title"><?=$arItem['NAME']?></div>
                <a class="contacts-info-row__address tabs-navigation-item" href="#map_<?=$arItem['ID']?>"><?=$arItem['PROPERTIES']['UF_ADDRESS']['VALUE']?></a>
                <a class="contacts-info-row__link" href="tel:<?=$arItem['PROPERTIES']['UF_PHONE']['VALUE']?>"><?=$arItem['PROPERTIES']['UF_PHONE']['VALUE']?></a>
            </div>
            <?}?>
        <?}?>
    </div>
    <?if(!empty($arResult['ITEMS'])){?>
        <div class="contacts-map">
            <img src="assets/images/preloader.svg" alt="">
            <div class="contacts-map__overlay">Кликните для просмотра карты</div>
            <?foreach($arResult["ITEMS"] as $key=>$arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?><div class="contacts-map-tab tabs-tab" id="map_<?=$arItem['ID']?>" <?=$key==0?'style="display:block"':''?>>
                    <script type="text/javascript" charset="utf-8" async src="<?=$arItem['PROPERTIES']['UF_MAP']['VALUE']?>"></script>
                </div>
            <?}?>
        </div>
    <?}?>
</div>

