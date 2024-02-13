<?php

use Bitrix\Main\Context;
use Bitrix\Main\GroupTable;

class СomplexListComponent extends CBitrixComponent
{
    public function executeComponent()
    {


        if ($this->startResultCache()) {
            // Получаем список групп (кеширование включил в компоненте, поэтому сам запрос orm нет смысла
            // кешировать
            $this->arResult['GROUPS'] = GroupTable::getList([
                    'select' => ['ID', 'NAME'],
                ]
            )->fetchAll();
            $this->IncludeComponentTemplate();

        }
    }
}