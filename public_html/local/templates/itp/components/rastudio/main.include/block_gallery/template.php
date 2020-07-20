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
<div class="gallery container">
    <div class="block__title">Галерея</div>
    <div class="gallery-items slider"><a class="gallery-items-item" href="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" data-fancybox="gallery0">
            <div class="gallery-items-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" alt=""></div></a><a class="gallery-items-item" href="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" data-fancybox="gallery1">
            <div class="gallery-items-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" alt=""></div></a><a class="gallery-items-item" href="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" data-fancybox="gallery2">
            <div class="gallery-items-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" alt=""></div></a><a class="gallery-items-item" href="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" data-fancybox="gallery3">
            <div class="gallery-items-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" alt=""></div></a><a class="gallery-items-item" href="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" data-fancybox="gallery4">
            <div class="gallery-items-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" alt=""></div></a><a class="gallery-items-item" href="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" data-fancybox="gallery5">
            <div class="gallery-items-item__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/gallery.png" alt=""></div></a>
    </div>
</div>