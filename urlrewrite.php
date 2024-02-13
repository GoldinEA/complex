<?php
$arUrlRewrite = array(

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
