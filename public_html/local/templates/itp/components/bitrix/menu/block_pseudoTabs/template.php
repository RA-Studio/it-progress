<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)){?>
    <div class="about-menu" id="horizontalMenu">
        <?foreach($arResult as $arItem){?>
            <?if ($arItem["PERMISSION"] > "D"){?>
                <a href="<?=$arItem["LINK"]?>" class="about-menu__item <?=$arItem["SELECTED"]?'active':''?>"><?=$arItem["TEXT"]?></a>
            <?}?>
        <?}?>
    </div>
<?}?>