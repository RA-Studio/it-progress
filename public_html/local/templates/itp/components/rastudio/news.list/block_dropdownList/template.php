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
<div class="dropDownlists container">
    <div class="block__title">Разворачивающиеся списки</div>
    <div class="dropDownlists-items">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="dropDownlists-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="dropDownlists-items-item-wrap">
                    <div class="dropDownlists-items-item__title">1С-Отчетность</div>
                    <div class="dropDownlists-items-item__text">Мы любим свое дело, с радостью каждое утро идем в офис, работаем сообща, и это действительно видно по нашей работе.</div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>


