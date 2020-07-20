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
<div class="illustratedAdvantages container">
    <div class="block__title">Здесь перечень со слайдером</div>
    <div class="illustratedAdvantages-items slider">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="illustratedAdvantages-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="illustratedAdvantages-items-item__img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/main-way1.svg" alt="">
                </div>
                <div class="illustratedAdvantages-items-item__title">Первый пункт</div>
                <div class="illustratedAdvantages-items-item__text">Подпись к пункту</div>
            </div>
        <?endforeach;?>
    </div>
</div>

