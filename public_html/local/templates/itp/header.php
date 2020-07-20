<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
setSettings('CONTACTS',4,6);
setSettings('SITE',11,35);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?=LANG_CHARSET?>">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowMeta("robots");
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    $APPLICATION->ShowMeta("description");
    $APPLICATION->ShowMeta("title");?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="cmsmagazine" content="5030b50dd17858824f3ab635603e59bc"/>
    <!--CSS--><?
    $APPLICATION->AddHeadString('<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;display=swap" rel="stylesheet">',true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/fancybox/jquery.fancybox.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/slick/slick.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/scripts/slick/slick-theme.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/styles/app.min.css');
    ?><!--JS--><?
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/jquery.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/jquery.inputmask.bundle.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/fancybox/jquery.fancybox.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/slick/slick.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/masonry.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/validation.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/scripts/main.js");
    ?><!--ICONS-->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/assets/images/apple-touch-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/images/apple-touch-icon.png">
</head>
<body>
<div class="wrapper">
    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>
    <header class="header visible">
        <div class="header-wrap">
            <div class="header-wrap-container">
                <div class="header-info">
                    <?if ($APPLICATION->GetCurPage() =='/'){?>
                        <span class="header-info-logo" href="index.html">
                            <img src="<?=$GLOBALS['UF_CONTENT_SITE']['UF_LOGO']['VALUE']?>" alt="">
                        </span>
                    <?}else{?>
                        <a class="header-info-logo" href="/">
                            <img src="<?=$GLOBALS['UF_CONTENT_SITE']['UF_LOGO']['VALUE']?>" alt="">
                        </a>
                    <?}?>
                    <div class="header-info-wrap">
                        <div class="header-info-wrap-content"><a class="header-info-wrap__tel" href="tel:88126600808">8 (812) 660-08-08</a>
                            <div class="header-info-wrap__place">Санкт-Петербург</div>
                        </div>
                        <div class="header-info-wrap-select">
                            <div class="header-info-wrap-select-wrap">
                                <div class="header-info-wrap-select-col header-mobile-menu"><a class="header-info-wrap-select-col__link" href="catalog.html">Сопровождение 1С</a><a class="header-info-wrap-select-col__link" href="catalog.html">Сервисы 1С</a><a class="header-info-wrap-select-col__link" href="catalog.html">Лицензии</a><a class="header-info-wrap-select-col__link" href="delivery.html">Оплата и доставка</a><a class="header-info-wrap-select-col__link" href="documents.html">О компании</a><a class="header-info-wrap-select-col__link" href="contacts.html">Контакты</a></div>
                                <div class="header-info-wrap-select-col">
                                    <div class="header-info-wrap-select-top">
                                        <div class="header-info-wrap-select-top-col piter active">
                                            <div class="header-info-wrap-select-top-col__city">Санкт-Петербург</div><a class="header-info-wrap-select-top-col__tel" href="tel:88126600808">8 (812) 660-08-08</a>
                                        </div>
                                        <div class="header-info-wrap-select-top-col moscow">
                                            <div class="header-info-wrap-select-top-col__city">Москва</div><a class="header-info-wrap-select-top-col__tel" href="tel:84996488688">8 (499) 648-86-88</a>
                                        </div>
                                    </div>
                                    <div class="header-info-wrap-select-bot">
                                        <div class="header-info-wrap-select-bot-row">Работаем в пн-пт с 9.00 до 18.00 по всей России</div>
                                        <div class="header-info-wrap-select-bot-row"><a href="tel:88005051503">8 (800) 505-15-03</a><a href="mailto:info@itprogress.ru">info@itprogress.ru</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top",
                        "COMPONENT_TEMPLATE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y"
                    )
                );?>
                <div class="header-search">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7832 14.3911L20 18.6069L18.6069 20L14.3911 15.7832C12.8224 17.0407 10.8713 17.7246 8.86088 17.7218C3.96968 17.7218 0 13.7521 0 8.86088C0 3.96968 3.96968 0 8.86088 0C13.7521 0 17.7218 3.96968 17.7218 8.86088C17.7246 10.8713 17.0407 12.8224 15.7832 14.3911ZM13.8082 13.6605C15.0577 12.3756 15.7555 10.6532 15.7527 8.86088C15.7527 5.05267 12.6681 1.96909 8.86088 1.96909C5.05267 1.96909 1.96909 5.05267 1.96909 8.86088C1.96909 12.6681 5.05267 15.7527 8.86088 15.7527C10.6532 15.7555 12.3756 15.0577 13.6605 13.8082L13.8082 13.6605Z" fill="#00458B"/>
                    </svg>
                </div>
                <div class="header-burger">
                    <svg width="35" height="12" viewBox="0 0 35 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1H35" stroke="#00458B" stroke-width="2"/>
                        <path d="M13 11H35" stroke="#00458B" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.search",
	"searchTop",
	array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "searchTop",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "structure",
		"LINE_ELEMENT_COUNT" => "3",
		"NO_WORD_LOGIC" => "N",
		"OFFERS_LIMIT" => "5",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "3",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"RESTART" => "N",	// Искать без учета морфологии (при отсутствии результата поиска)
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"USE_SEARCH_RESULT_ORDER" => "N",	// Использовать сортировку результатов по релевантности
		"USE_TITLE_RANK" => "N",	// При ранжировании результата учитывать заголовки
	),
	false
);?>

    </header>
<?if(!CSite::InDir('/index.php')){?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumb",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
    <div class="content">
<?}else{?>
    <div class="main">
<?}?>