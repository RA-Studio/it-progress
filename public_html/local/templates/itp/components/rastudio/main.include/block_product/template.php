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

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM",'SORT','PREVIEW_PICTURE','PREVIEW_TEXT','DETAIL_PICTURE','DETAIL_TEXT',"PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>$arParams['LINK_IBLOCK_ID'], "ACTIVE"=>"Y", "ID"=>$arParams['VALUE']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(),$arSelect);
if($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $arFields['PROPERTIES'] = $ob->GetProperties();
    $arResult = $arFields;
}
?>

<div class="product-top">
    <div class="product-top-img">
        <img src="assets/images/product.png" alt="">
    </div>
    <div class="product-top-info">
        <h1 class="product-top-info__title"><?=$arResult['NAME']?></h1>
        <?if(!empty($arResult['PREVIEW_TEXT'])){?>
            <div class="product-top-info__text"><?=$arResult['PREVIEW_TEXT']?></div>
        <?}?>
        <div class="product-top-info-btns">
            <div class="product-top-info-btns-col"> <a class="product-top-info-btns-col__buy" href="#">Купить</a>
                <div class="product-top-info-btns-col__price">36 000 ₽</div>
            </div>
            <div class="product-top-info-btns-col"> <a class="product-top-info-btns-col__rent" href="#">Арендовать</a>
                <div class="product-top-info-btns-col__rentprice"><span>от 1000 ₽/мес</span><span>за 1 пользователя</span></div>
            </div>
            <div class="product-top-info-btns-col"><a class="product-top-info-btns-col__demo" href="#">Заказать демо-доступ</a>
                <div class="product-top-info-btns-col__demoprice">Бесплатно</div>
            </div>
        </div>
    </div>
</div>