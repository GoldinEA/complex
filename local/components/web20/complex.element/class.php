<?php

use Bitrix\Main\Application;
use Bitrix\Main\GroupTable;

class СomplexElementComponent extends CBitrixComponent
{

    public function executeComponent()
    {
        if ($this->startResultCache()) {
            // Получаем группу (кеширование включил в компоненте, поэтому сам запрос orm нет смысла
            // кешировать
             $result = GroupTable::getList([
                    'filter' => ['=ID' => $this->arParams['GROUP_ID']],
                    'select' => ['ID', 'NAME', 'DESCRIPTION'],
                    'limit' => 1,
                ]
            );
            $count = $result->getSelectedRowsCount();

            if ($count === 0) {
                Application::getInstance()
                    ->getContext()
                    ->getResponse()
                    ->setStatus('404 Not Found');
                LocalRedirect('/404/', false, '404 Not Found');
            }

            $this->arResult['GROUP'] = $result->fetch();
            $this->IncludeComponentTemplate();

        }

    }
}