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

<div class="catalog container">
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
        <div class="catalog-items" data-container="">
            <?foreach($arResult['SECTIONS'] as $section){?>
                <div class="catalog-items-item">
                    <a href="<?=$section['SECTION_PAGE_URL']?>" class="catalog-items-item-img">
                        <img src="<?=CFile::GetPath($section['ITEM']['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="">
                    </a>
                    <div class="catalog-items-item-info">
                        <a href="<?=$section['SECTION_PAGE_URL']?>" class="catalog-items-item-info__title"><?=$section['ITEM']['NAME']?></a>
                        <?if(!empty($section['SUBSECTION'])){?>
                            <div class="catalog-items-item-info-links">
                                <?foreach ($section['SUBSECTION'] as $subsection){?>
                                    <a class="catalog-items-item-info-links__link" href="<?=$subsection['SECTION_PAGE_URL']?>"><?=$subsection['NAME']?></a>
                                <?}?>
                            </div>
                        <?}?>
                    </div>
                </div>
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