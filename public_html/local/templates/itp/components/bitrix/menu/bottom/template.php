<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
    <div class="footer-main-wrap-col">
        <div class="footer-main-wrap-col__title"><?=$arParams['TITLE']?></div>
        <div class="footer-main-wrap-col-items">
<?
foreach($arResult as $arItem){
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]){?>
		<a class="footer-main-wrap-col__link" href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
	<?}else{?>
		<a class="footer-main-wrap-col__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	<?}?>
<?}?>
        </div>
    </div>
<?}?>