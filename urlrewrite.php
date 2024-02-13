<?php
$arUrlRewrite = array(
    1 =>
        array(
            'CONDITION' => '#^/content/news/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/content/news/index.php',
            'SORT' => 100,
        ),
    0 =>
        array(
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
    2 => array(
        "ID" => 'web20:complex',
        "CONDITION" => "#^/settings/([0-9]+)/#",
        "RULE" => "ELEMENT_ID=$1",
        "PATH" => "/settings/index.php",
    ),
    3 => array(
        "ID" => 'web20:complex',
        "CONDITION" => "#^/settings/#",
        "RULE" => "",
        "PATH" => "/groups/index.php",
    ),
);
