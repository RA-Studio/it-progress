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
<div class="listWithContent container">
    <div class="block__title">Cписок с подзаголовками и контентом</div>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="listWithContent-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="listWithContent-item-top">
                <div class="listWithContent-item-top__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/main-way1.svg" alt=""></div>
                <div class="listWithContent-item-top-info">
                    <div class="listWithContent-item-top-info__title">Заголовок длиной до пяти слов</div>
                    <div class="listWithContent-item-top-info__text">«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</div>
                </div>
            </div>
            <div class="listWithContent-item-content">
                <div class="listWithContent-item-content__subtitle">Заголовок достаточной длины</div>
                <p>«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</p>
                <ul>
                    <li>«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</li>
                    <li>«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</li>
                </ul>
            </div>
        </div>
    <?endforeach;?>
</div>



