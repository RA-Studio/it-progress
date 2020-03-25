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
<div class="main-ways">
    <div class="main-ways__subtitle">Услуги</div>
    <div class="main-ways__title">Направление работы нашей компании</div>
    <div class="main-ways-tabs tabs">
        <div class="main-ways-tabs-navigation-wrap">
            <div class="main-ways-tabs-navigation"><a class="main-ways-tabs-navigation__item tabs-navigation-item active" href="#tab1">Сопровождение 1С</a><a class="main-ways-tabs-navigation__item tabs-navigation-item" href="#tab2">Сервисы 1С</a><a class="main-ways-tabs-navigation__item tabs-navigation-item" href="#tab3">Лицензии</a></div>
        </div>
        <div class="main-ways-tabs-tab tabs-tab" id="tab1">
            <div class="main-ways-tabs-tab-wrap">
                <div class="main-ways-tabs-tab-item">
                    <div class="main-ways-tabs-tab-item-wrap"><img src="assets/images/main-way1.svg" alt="">
                        <div class="main-ways-tabs-tab-item__title">Регламентированный учет</div><a class="main-ways-tabs-tab-item__link" href="#">1С:Бухгалтерия 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Зарплата и управление персоналом 8</a>
                    </div>
                </div>
                <div class="main-ways-tabs-tab-item">
                    <div class="main-ways-tabs-tab-item-wrap"><img src="assets/images/main-way2.svg" alt="">
                        <div class="main-ways-tabs-tab-item__title">Торговый и складской учет </div><a class="main-ways-tabs-tab-item__link" href="#">1С:Управление торговлей 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Предприятие 8. CRM</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Розница 8</a>
                    </div>
                </div>
                <div class="main-ways-tabs-tab-item">
                    <div class="main-ways-tabs-tab-item-wrap"><img src="assets/images/main-way3.svg" alt="">
                        <div class="main-ways-tabs-tab-item__title">Управленческий учет</div><a class="main-ways-tabs-tab-item__link" href="#">1С:Управление нашей фирмой 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Документооборот 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Предприятие 8. Управляющий</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Договорчики 8</a>
                    </div>
                </div>
                <div class="main-ways-tabs-tab-item"><a class="main-ways-tabs-tab-item-more" href="#">
                        <div class="main-ways-tabs-tab-item-more__circle"></div>
                        <div class="main-ways-tabs-tab-item-more__text">Все направления</div></a></div>
            </div>
        </div>
        <div class="main-ways-tabs-tab tabs-tab" id="tab2">
            <div class="main-ways-tabs-tab-wrap">
                <div class="main-ways-tabs-tab-item">
                    <div class="main-ways-tabs-tab-item-wrap"><img src="assets/images/main-way2.svg" alt="">
                        <div class="main-ways-tabs-tab-item__title">Торговый и складской учет </div><a class="main-ways-tabs-tab-item__link" href="#">1С:Управление торговлей 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Предприятие 8. CRM</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Розница 8</a>
                    </div>
                </div>
                <div class="main-ways-tabs-tab-item">
                    <div class="main-ways-tabs-tab-item-wrap"><img src="assets/images/main-way3.svg" alt="">
                        <div class="main-ways-tabs-tab-item__title">Управленческий учет</div><a class="main-ways-tabs-tab-item__link" href="#">1С:Управление нашей фирмой 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Документооборот 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Предприятие 8. Управляющий</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Договорчики 8</a>
                    </div>
                </div>
                <div class="main-ways-tabs-tab-item"><a class="main-ways-tabs-tab-item-more" href="#">
                        <div class="main-ways-tabs-tab-item-more__circle"></div>
                        <div class="main-ways-tabs-tab-item-more__text">Все направления</div></a></div>
            </div>
        </div>
        <div class="main-ways-tabs-tab tabs-tab" id="tab3">
            <div class="main-ways-tabs-tab-wrap">
                <div class="main-ways-tabs-tab-item">
                    <div class="main-ways-tabs-tab-item-wrap"><img src="assets/images/main-way3.svg" alt="">
                        <div class="main-ways-tabs-tab-item__title">Управленческий учет</div><a class="main-ways-tabs-tab-item__link" href="#">1С:Управление нашей фирмой 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Документооборот 8</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Предприятие 8. Управляющий</a><a class="main-ways-tabs-tab-item__link" href="#">1С:Договорчики 8</a>
                    </div>
                </div>
                <div class="main-ways-tabs-tab-item"><a class="main-ways-tabs-tab-item-more" href="#">
                        <div class="main-ways-tabs-tab-item-more__circle"></div>
                        <div class="main-ways-tabs-tab-item-more__text">Все направления</div></a></div>
            </div>
        </div>
    </div>
</div>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
