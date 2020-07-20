<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?$APPLICATION->IncludeComponent(
	"rastudio:main.include",
	"block_mainBanner",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => ""
	)
);?>

<?$APPLICATION->IncludeComponent(
	"slam:easyform",
	"block_main-form",
	Array(
		"CATEGORY_EMAIL_PLACEHOLDER" => "",
		"CATEGORY_EMAIL_TITLE" => "Ваш E-mail",
		"CATEGORY_EMAIL_TYPE" => "email",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
		"CATEGORY_PHONE_INPUTMASK" => "N",
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
		"CATEGORY_PHONE_PLACEHOLDER" => "",
		"CATEGORY_PHONE_TITLE" => "Мобильный телефон",
		"CATEGORY_PHONE_TYPE" => "tel",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_VALUE" => "",
		"CATEGORY_TITLE_PLACEHOLDER" => "",
		"CATEGORY_TITLE_TITLE" => "Ваше имя",
		"CATEGORY_TITLE_TYPE" => "text",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_TITLE_VALUE" => "",
		"COMPONENT_TEMPLATE" => "block_main-form",
		"CREATE_SEND_MAIL" => "",
		"DISPLAY_FIELDS" => array(0=>"TITLE",1=>"EMAIL",2=>"PHONE",3=>"MESSAGE",4=>"",),
		"EMAIL_BCC" => "",
		"EMAIL_FILE" => "N",
		"EMAIL_SEND_FROM" => "N",
		"EMAIL_TO" => "",
		"ENABLE_SEND_MAIL" => "Y",
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
		"EVENT_MESSAGE_ID" => array(),
		"FIELDS_ORDER" => "TITLE,EMAIL,PHONE,MESSAGE",
		"FORM_AUTOCOMPLETE" => "Y",
		"FORM_ID" => "FORM3",
		"FORM_NAME" => "Форма обратной связи 8",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"#\">персональных данных</a>",
		"HIDE_ASTERISK" => "N",
		"HIDE_FIELD_NAME" => "N",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "N",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
		"REQUIRED_FIELDS" => array(0=>"EMAIL",),
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "N",
		"TITLE_SHOW_MODAL" => "Спасибо!",
		"USE_BOOTSRAP_CSS" => "N",
		"USE_BOOTSRAP_JS" => "N",
		"USE_CAPTCHA" => "N",
		"USE_FORMVALIDATION_JS" => "N",
		"USE_IBLOCK_WRITE" => "N",
		"USE_JQUERY" => "N",
		"USE_MODULE_VARNING" => "N",
		"WIDTH_FORM" => "500px",
		"_CALLBACKS" => ""
	)
);?>

<?$APPLICATION->IncludeComponent(
	"rastudio:news.list",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumb",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
<?
    
     $APPLICATION->IncludeComponent(
	"slam:easyform", 
	"servesesAnaliz",
	array(
		"CATEGORY_ACCEPT_TITLE" => "Согласие на обработку данных",
		"CATEGORY_ACCEPT_TYPE" => "accept",
		"CATEGORY_ACCEPT_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_ACCEPT_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_ACCEPT_VALUE" => "Нажимая на кнопку «Отправить», вы соглашаетесь с <a href=\"#\" data-action=\"accept\">политикой конфиденциальности</a>",
		"CATEGORY_EMAIL_PLACEHOLDER" => "Ваш email",
		"CATEGORY_EMAIL_TITLE" => "Ваш E-mail",
		"CATEGORY_EMAIL_TYPE" => "email",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_HIDDEN_TITLE" => "count",
		"CATEGORY_HIDDEN_TYPE" => "hidden",
		"CATEGORY_HIDDEN_VALUE" => "",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
		"CATEGORY_PHONE_INPUTMASK" => "Y",
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
		"CATEGORY_PHONE_PLACEHOLDER" => "Ваш телефон",
		"CATEGORY_PHONE_TITLE" => "Мобильный телефон",
		"CATEGORY_PHONE_TYPE" => "tel",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_PHONE_VALUE" => "",
		"CATEGORY_TITLE_PLACEHOLDER" => "Ваше имя",
		"CATEGORY_TITLE_TITLE" => "Ваше имя",
		"CATEGORY_TITLE_TYPE" => "text",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_TITLE_VALUE" => "",
		"CATEGORY_count_buisness_apps_TITLE" => "count_buisness_apps",
		"CATEGORY_count_buisness_apps_TYPE" => "hidden",
		"CATEGORY_count_buisness_apps_VALUE" => "",
		"CATEGORY_count_intensive_TITLE" => "count_intensive",
		"CATEGORY_count_intensive_TYPE" => "hidden",
		"CATEGORY_count_intensive_VALUE" => "",
		"CATEGORY_count_work_places_TITLE" => "count_work_places",
		"CATEGORY_count_work_places_TYPE" => "hidden",
		"CATEGORY_count_work_places_VALUE" => "",
		"CATEGORY_use_new_technologies_SHOW_INLINE" => "Y",
		"CATEGORY_use_new_technologies_TITLE" => "use_new_technologies",
		"CATEGORY_use_new_technologies_TYPE" => "hidden",
		"CATEGORY_use_new_technologies_VALUE" => "",
		"COMPONENT_TEMPLATE" => "servesesTel2",
		"CREATE_SEND_MAIL" => "",
		"DISPLAY_FIELDS" => array(
            0 => "name-of-service",
			1 => "TITLE",
			2 => "EMAIL",
			3 => "ACCEPT",
			4 => "count_work_places",
			5 => "count_intensive",
			6 => "count_buisness_apps",
			7 => "use_new_technologies",
			8 => "",
		),
		"EMAIL_BCC" => "",
		"EMAIL_FILE" => "N",
		"EMAIL_SEND_FROM" => "N",
		"EMAIL_TO" => $emailSendGlobal,
		"ENABLE_SEND_MAIL" => "Y",
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
		"EVENT_MESSAGE_ID" => array(
			0 => "46",
		),
		"FIELDS_ORDER" => "name-of-service,count_work_places,count_intensive,count_buisness_apps,EMAIL,use_new_technologies,TITLE,ACCEPT",
		"FORM_AUTOCOMPLETE" => "Y",
		"FORM_ID" => "FORM12",
		"FORM_NAME" => $title,
		"FORM_SUBMIT_VALUE" => "Отправить Заявку",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"#\">персональных данных</a>",
		"FORM_SUBTITLE" => $subtitle,
		"HIDE_ASTERISK" => "Y",
		"HIDE_FIELD_NAME" => "Y",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сервисы / Заявка на КП",
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
		),
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "N",
		"TITLE_SHOW_MODAL" => "Спасибо!",
		"USE_BOOTSRAP_CSS" => "N",
		"USE_BOOTSRAP_JS" => "N",
		"USE_CAPTCHA" => "N",
		"USE_FORMVALIDATION_JS" => "N",
		"USE_IBLOCK_WRITE" => "N",
		"USE_INPUTMASK_JS" => "N",
		"USE_JQUERY" => "N",
		"USE_MODULE_VARNING" => "Y",
		"WIDTH_FORM" => "500px",
		"_CALLBACKS" => "reddysendphone",
        "CATEGORY_name-of-service_TITLE" => "Страница с которой была отправлена форма",
        "CATEGORY_name-of-service_TYPE" => "hidden",
        "CATEGORY_name-of-service_VALUE" => ""
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>