<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<!--calc-->
<div class="calc container">
    <div class="block__title">Калькулятор</div>
    <form class="calc-block" action="">
        <div class="calc-block-top">
            <div class="calc-block-top-col">
                <div class="calc-block-top-col__span">Количество пользователей:</div>
                <div class="calc-block-top-col-input">
                    <div class="calc-block-top-col-input__minus"><span>-</span></div>
                    <input type="text" value="1" name="input-vol">
                    <div class="calc-block-top-col-input__plus"><span>+</span></div>
                </div>
            </div>
            <div class="calc-block-top-col">
                <div class="calc-block-top-col__span">Количество лицензий:</div>
                <div class="calc-block-top-col-input">
                    <div class="calc-block-top-col-input__minus"><span>-</span></div>
                    <input type="text" value="1" name="input-vol">
                    <div class="calc-block-top-col-input__plus"><span>+</span></div>
                </div>
            </div>
            <div class="calc-block-top-col">
                <div class="calc-block-top-col__span">Стоимость:</div>
                <div class="calc-block-top-col__price"> <span>60 600 </span><span>руб/мес</span></div><a class="calc-block-bot__btn" href="#">Оставить заявку</a>
            </div>
        </div>
        <div class="calc-block-bot">
            <div class="calc-block-bot__text">«1С:Бухгалтерия 8» позволяет в комплексе решать все задачи, стоящие перед бухгалтерией предприятия, и является самым востребованным на российском рынке продуктом линейки «1С».</div>
        </div>
    </form>
</div>