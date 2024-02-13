<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'GROUPS' => [
        'CACHE_SETTINGS' => [
            'NAME' => 'Настройки кеширования',
        ],
    ],

    'PARAMETERS' => [
        'CACHE_TIME'  =>  [
            'PARENT' => 'CACHE_SETTINGS',
            'NAME' => 'Время кеширования (сек.)',
            'TYPE' => 'STRING',
            'DEFAULT' => 3600,
        ],
        'CACHE_GROUPS' => [
            'PARENT' => 'CACHE_SETTINGS',
            'NAME' => 'Учитывать права доступа',
            'TYPE' => 'CHECKBOX',
            'DEFAULT' => 'Y',
        ],
    ],
];