<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)){?>
    <div class="header-menu">
    <?
    $previousLevel = 0;
    foreach($arResult as $arItem){?>
        <?if ($previousLevel && ($arItem["DEPTH_LEVEL"] < $previousLevel) && ($arItem["DEPTH_LEVEL"]==1 && $previousLevel==3)){?>
                </div>
            <?=str_repeat("</div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?}elseif($previousLevel && ($arItem["DEPTH_LEVEL"] < $previousLevel) && ($arItem["DEPTH_LEVEL"]==1 && $previousLevel==2)){?>
                </div>
            </div>
            <?=str_repeat("</div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?}elseif($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel){?>
            <?=str_repeat("</div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?}?>
        <?if ($arItem["DEPTH_LEVEL"] == 1){?>
            <?if ($arItem["IS_PARENT"]){?>
                <div class="header-menu-item list-item">
                    <a class="header-menu-item__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                        <div class="header-menu-item-list">
            <?}else{?>
                <div class="header-menu-item">
                    <a class="header-menu-item__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </div>
            <?}?>
        <?}elseif ($arItem["DEPTH_LEVEL"] == 2){?>
            <?if ($arItem["IS_PARENT"]){?>
                <?if($previousLevel ==$arItem["DEPTH_LEVEL"]){?>
                    </div>
                <?}?>
                <div class="header-menu-item-list-col">
                    <div class="header-menu-item-list-col__title"><?=$arItem["TEXT"]?></div>
            <?}else{?>
                <?if($previousLevel != $arItem["DEPTH_LEVEL"]){?>
                    <div class="header-menu-item-list-col">
                <?}?>
                    <a class="header-menu-item-list-col__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <?}?>
        <?}else{?>
            <a class="header-menu-item-list-col__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <?}?>
        <?$previousLevel = $arItem["DEPTH_LEVEL"];?>
    <?}?>

    </div>
<?}?>