<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['IMAGES'] = explode("\n", trim($arParams['IMAGES']));

$arResult['IMAGES'] = array_map(function($image) {
    return "/local/components/my_slider/slider.one/images/" . $image;
}, $arResult['IMAGES']);

$this->IncludeComponentTemplate();
?>