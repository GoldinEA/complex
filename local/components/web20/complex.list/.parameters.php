<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => [
        'CACHE_TIME'  =>  ['DEFAULT' => 3600],
        'CACHE_GROUPS' => [
            'PARENT' => 'CACHE_SETTINGS',
            'NAME' => GetMessage('CP_BND_CACHE_GROUPS'),
            'TYPE' => 'CHECKBOX',
            'DEFAULT' => 'Y',
        ],
    ],
];