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
<div class="video container">
    <div class="block__title">Видеовставка</div>
    <video preload="metadata" poster="<?=SITE_TEMPLATE_PATH?>/assets/images/video.jpg" controls="controls" width="100%" height="auto">
        <source src="https://kvsspb.ru/images/resale-video/resale-video1.mp4" type="video/mp4;">
    </video>
</div>