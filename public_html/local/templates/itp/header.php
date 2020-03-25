<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
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
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/logo.png" alt="">
                        </span>
                    <?}else{?>
                        <a class="header-info-logo" href="/">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/logo.png" alt="">
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


                <div class="header-menu">
                    <div class="header-menu-item list-item"><a class="header-menu-item__link" href="catalog.html">Сопровождение 1С</a>
                        <div class="header-menu-item-list">
                            <div class="header-menu-item-list-col">
                                <div class="header-menu-item-list-col__title">ИТС</div><a class="header-menu-item-list-col__link" href="product.html">Проф</a><a class="header-menu-item-list-col__link" href="product.html">Техно</a><a class="header-menu-item-list-col__link" href="product.html">Медицина</a><a class="header-menu-item-list-col__link" href="product.html">Строительство</a><a class="header-menu-item-list-col__link" href="product.html">Бюджет</a>
                            </div>
                            <div class="header-menu-item-list-col">
                                <div class="header-menu-item-list-col__title">Услуги 1С</div><a class="header-menu-item-list-col__link" href="product.html">Переход</a><a class="header-menu-item-list-col__link" href="product.html">Перенос данных</a><a class="header-menu-item-list-col__link" href="product.html">Доработка 1С</a>
                            </div>
                            <div class="header-menu-item-list-col"><a class="header-menu-item-list-col__link" href="product.html">Внедрение 1С</a><a class="header-menu-item-list-col__link" href="product.html">Обслуживание 1С</a><a class="header-menu-item-list-col__link" href="product.html">Электронный документооборот</a><a class="header-menu-item-list-col__link" href="product.html">Электронная отчетность</a></div>
                        </div>
                    </div>
                    <div class="header-menu-item list-item"><a class="header-menu-item__link" href="catalog.html">Сервисы 1С</a></div>
                    <div class="header-menu-item list-item"><a class="header-menu-item__link" href="catalog.html">Лицензии</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="delivery.html">Оплата и доставка</a></div>
                    <div class="header-menu-item list-item"><a class="header-menu-item__link" href="documents.html">О компании</a>
                        <div class="header-menu-item-list">
                            <div class="header-menu-item-list-col"><a class="header-menu-item-list-col__link" href="documents.html">Документы</a><a class="header-menu-item-list-col__link" href="team.html">Наша команда</a><a class="header-menu-item-list-col__link" href="clients.html">Наши клиенты</a><a class="header-menu-item-list-col__link" href="partners.html">Наши партнеры</a><a class="header-menu-item-list-col__link" href="career.html">Карьера</a></div>
                        </div>
                    </div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="contacts.html">Контакты</a></div>
                </div>
                <div class="header-search"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7832 14.3911L20 18.6069L18.6069 20L14.3911 15.7832C12.8224 17.0407 10.8713 17.7246 8.86088 17.7218C3.96968 17.7218 0 13.7521 0 8.86088C0 3.96968 3.96968 0 8.86088 0C13.7521 0 17.7218 3.96968 17.7218 8.86088C17.7246 10.8713 17.0407 12.8224 15.7832 14.3911ZM13.8082 13.6605C15.0577 12.3756 15.7555 10.6532 15.7527 8.86088C15.7527 5.05267 12.6681 1.96909 8.86088 1.96909C5.05267 1.96909 1.96909 5.05267 1.96909 8.86088C1.96909 12.6681 5.05267 15.7527 8.86088 15.7527C10.6532 15.7555 12.3756 15.0577 13.6605 13.8082L13.8082 13.6605Z" fill="#00458B"/>
                    </svg>
                </div>
                <div class="header-burger"><svg width="35" height="12" viewBox="0 0 35 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1H35" stroke="#00458B" stroke-width="2"/>
                        <path d="M13 11H35" stroke="#00458B" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="header-searchform">
            <form action="#">
                <label><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2049 12.952L18 16.7462L16.7462 18L12.952 14.2049C11.5402 15.3366 9.78419 15.9522 7.9748 15.9496C3.57271 15.9496 0 12.3769 0 7.9748C0 3.57271 3.57271 0 7.9748 0C12.3769 0 15.9496 3.57271 15.9496 7.9748C15.9522 9.78419 15.3366 11.5402 14.2049 12.952ZM12.4274 12.2945C13.5519 11.138 14.18 9.58786 14.1774 7.9748C14.1774 4.54741 11.4013 1.77218 7.9748 1.77218C4.54741 1.77218 1.77218 4.54741 1.77218 7.9748C1.77218 11.4013 4.54741 14.1774 7.9748 14.1774C9.58786 14.18 11.138 13.5519 12.2945 12.4274L12.4274 12.2945Z" fill="black" fill-opacity="0.25"/>
                    </svg>
                    <input class="header-searchform__input empty" type="text" id="txt" placeholder="Поиск по сайту..." maxlength="55" autocomplete="off" name="search">
                </label>
            </form>
            <div class="header-searchform-list"><a class="header-searchform-list-item" href="product.html">
                    <div class="header-searchform-list-item__title">1С:Предприятие 8. Управляющий</div>
                    <div class="header-searchform-list-item__text">Управленческий учет</div></a><a class="header-searchform-list-item" href="product.html">
                    <div class="header-searchform-list-item__title">1С:Управление торговлей 8</div>
                    <div class="header-searchform-list-item__text">Торговый и складской учет</div></a><a class="header-searchform-list-item" href="product.html">
                    <div class="header-searchform-list-item__title">1С:Розница 8</div>
                    <div class="header-searchform-list-item__text">Торговый и складской учет</div></a><a class="header-searchform-list-item" href="product.html">
                    <div class="header-searchform-list-item__title">1С:Зарплата и управление персоналом 8</div>
                    <div class="header-searchform-list-item__text">Регламентированный учет</div></a></div>
            </div>
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
<?}?>
						