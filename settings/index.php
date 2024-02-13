<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Тестовое задание");
?>
<?php
$APPLICATION->IncludeComponent(
    "web20:complex",
    ".default",
    Array(

		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
        'SEF_MODE' => 'Y',
        "SEF_URL_TEMPLATES" => array(
            "list" => "/",
            "element" => "#ELEMENT_ID#/",
        ),
        "SEF_FOLDER" => "/settings/",
        "VARIABLE_ALIASES" => array(
            "ELEMENT_ID" => "ELEMENT_ID",
        ),
    )
);?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>