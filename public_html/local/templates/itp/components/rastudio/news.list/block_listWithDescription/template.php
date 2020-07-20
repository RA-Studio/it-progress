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
<!--el list-->
<div class="listWithDescription container">
    <div class="block__title">Cписок с описанием элементов</div>
    <div class="listWithDescription-item">
        <div class="listWithDescription-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/main-way2.svg" alt=""></div>
        <div class="listWithDescription-item-info">
            <div class="listWithDescription-item-info__title">Заголовок</div>
            <div class="listWithDescription-item-info__text">«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</div>
        </div>
    </div>
    <div class="listWithDescription-item">
        <div class="listWithDescription-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/main-way1.svg" alt=""></div>
        <div class="listWithDescription-item-info">
            <div class="listWithDescription-item-info__title">Заголовок</div>
            <div class="listWithDescription-item-info__text">«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С». «1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С». «1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</div>
        </div>
    </div>
</div>
<div class="numeratedList container">
    <div class="block__title">Пронумерованный список</div>
    <div class="numeratedList-items">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="numeratedList-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">Мы любим свое дело, с радостью каждое утро идем в офис, работаем сообща, и это действительно видно по нашей работе.</div>
        <?endforeach;?>
    </div>
</div>
