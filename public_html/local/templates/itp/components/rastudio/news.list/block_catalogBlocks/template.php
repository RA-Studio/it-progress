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
/** @var array $arResult['PROPERTIES'] */
/** @var array $arResult['SECTIONS'] */
$this->setFrameMode(true);
?>
<div class="tabsAndIllustratedLinks container">
    <?if (!empty($arResult['PROPERTIES'])){?>
        <form class="catalog-sort" data-event="sort" action="">
            <span>Сортировать по:</span>
            <?foreach ($arResult['PROPERTIES'] as $key=>$property){?>
                <div class="catalog-sort-item">
                    <input type="radio" name="sort" value="<?=$property['CODE']?>" id="radio<?=$property['ID']?>">
                    <label for="radio<?=$property['ID']?>"><?=$property['NAME']?></label>
                </div>
            <?}?>
        </form>
    <?}?>
    <?if (!empty($_POST['sort'])){
        $APPLICATION->RestartBuffer();
    }?>
    <?if (!empty($arResult['SECTIONS'])){?>
    <div class="tabsAndIllustratedLinks-items" data-container="">
            <?foreach($arResult['SECTIONS'] as $section){?>
                <a class="tabsAndIllustratedLinks-items-item" href="<?=$section['SECTION_PAGE_URL']?>">
                    <div class="tabsAndIllustratedLinks-items-item__img">
                        <img src="<?=CFile::GetPath($section['ITEM']['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="">
                    </div>
                    <div class="tabsAndIllustratedLinks-items-item__title"><?=$section['ITEM']['NAME']?></div>
                </a>
            <?}?>
        </div>
    <?}?>
    <?if (!empty($_POST['sort'])){
        die();
    }?>
</div>

<script>
    $(document).on('change', '[data-event="sort"] input',function (e) {
        var data =$(this).closest('form').serialize();
        var container = $(document).find('[data-container]');
        console.log(container);
        $.ajax({
            type: 'post',
            data: data,
            success: function(result) {
                container.html($(result).find('[data-container]').html());
            }
        });
    })
</script>