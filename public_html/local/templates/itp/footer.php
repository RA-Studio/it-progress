<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
        ?>
    </div>
<footer class="footer">
            <div class="footer-main">
                <div class="footer-main-wrap">
                    <div class="footer-main-wrap-col">
                        <?if ($APPLICATION->GetCurPage() =='/'){?>
                            <span class="footer-main-wrap-col-logo" href="index.html">
                                <img src="<?=$GLOBALS['UF_CONTENT_SITE']['UF_LOGO']['VALUE']?>" alt="">
                            </span>
                        <?}else{?>
                            <a class="footer-main-wrap-col-logo" href="/">
                                <img src="<?=$GLOBALS['UF_CONTENT_SITE']['UF_LOGO']['VALUE']?>" alt="">
                            </a>
                        <?}?>
                        <?if(!empty($GLOBALS['UF_CONTENT_SITE']['UF_DESCRIPTION']['VALUE']['TEXT'])){?>
                        <div class="footer-main-wrap-col__text"><?=$GLOBALS['UF_CONTENT_SITE']['UF_DESCRIPTION']['VALUE']['TEXT']?></div>
                        <?}?>
                        <?if(!empty($GLOBALS['UF_CONTENT_SITE']['UF_SOCIAL']['VALUES'])){?>
                        <div class="footer-main-wrap-col-socials">
                            <?foreach ($GLOBALS['UF_CONTENT_SITE']['UF_SOCIAL']['VALUES'] as $social){?>
                                <a href="<?=$social['DESCRIPTION']?>">
                                    <?=$social['VALUE']['TEXT']?>
                                </a>
                            <?}?>
                        </div>
                        <?}?>
                    </div>
                    <div class="footer-main-wrap-col-wrap">
                        <div class="footer-main-wrap-col">
                            <div class="footer-main-wrap-col__title">Контакты</div>
                            <div class="footer-main-wrap-col-items">
                                <?if($GLOBALS['UF_CONTENT_CONTACTS']['UF_CONTACTS_MAIL']['VALUE']){?>
                                    <span class="footer-main-wrap-col-row">E-mail<a href="mailto:<?=$GLOBALS['UF_CONTENT_CONTACTS']['UF_CONTACTS_MAIL']['VALUE']?>"><?=$GLOBALS['UF_CONTENT_CONTACTS']['UF_CONTACTS_MAIL']['VALUE']?></a></span>
                                <?}?>
                                <?if($GLOBALS['UF_CONTENT_CONTACTS']['UF_CONTACTS_PHONE']['VALUE']){?>
                                    <span class="footer-main-wrap-col-row">Общие вопросы<a href="tel:<?=$GLOBALS['UF_CONTENT_CONTACTS']['UF_CONTACTS_PHONE']['VALUE']?>"><?=$GLOBALS['UF_CONTENT_CONTACTS']['UF_CONTACTS_PHONE']['VALUE']?></a></span>
                                <?}?>
                                <?if(!empty($GLOBALS['UF_CONTENT_CONTACTS']['UF_BLOCK_CONTACTS']['VALUE'])){?>
                                    <?
                                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","UF_*");
                                    $arFilter = Array("IBLOCK_ID"=>$GLOBALS['UF_CONTENT_CONTACTS']['UF_BLOCK_CONTACTS']['VALUE'], "ACTIVE"=>"Y");
                                    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
                                    while($ob = $res->GetNextElement()){
                                        $arFields = $ob->GetFields();
                                        $arFields['PROPERTIES'] = $ob->GetProperties();
                                        ?><span class="footer-main-wrap-col-row"><?=$arFields['NAME']?>
                                            <a href="tel:<?=$arFields['PROPERTIES']['UF_PHONE']['VALUE']?>">
                                                <?=$arFields['PROPERTIES']['UF_PHONE']['VALUE']?>
                                            </a>
                                        </span><?
                                    }
                                    ?>
                                <?}?>
                            </div>
                        </div>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottomLeft",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "bottom",
		"TITLE" => "Услуги"
	),
	false
);?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottomRight",
                                "USE_EXT" => "Y",
                                "COMPONENT_TEMPLATE" => "bottom",
                                "TITLE" => "Компания"
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
            <div class="footer-bot">
                <div class="footer-bot-wrap">
                    <div class="footer-bot-wrap-col">
                        <?=$GLOBALS['UF_CONTENT_SITE']['UF_DEVELOPER']['VALUE']['TEXT']?>
                    </div>
                    <div class="footer-bot-wrap-col">
                        <?=$GLOBALS['UF_CONTENT_SITE']['UF_COPYRIGHT']['VALUE']['TEXT']?>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </body>
</html>