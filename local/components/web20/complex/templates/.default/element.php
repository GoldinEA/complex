<?php
$APPLICATION->IncludeComponent(
    "web20:complex.element",
    ".default",
    [
        'GROUP_ID' => $arResult['VARIABLES']['ELEMENT_ID'],
        "CACHE_TYPE" => $arParams['CACHE_TYPE'],
        "CACHE_TIME" => $arParams['CACHE_TIME'],
        "CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
        "SEF_FOLDER" => $arParams['SEF_FOLDER'],
    ],
    $component
);