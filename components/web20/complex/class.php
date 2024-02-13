<?php

class СomplexComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $arDefaultUrlTemplates404 = [
            'list' => 'index.php',
            'element' => '#ELEMENT_ID#.php',
        ];
        $arDefaultVariableAliases404 = [];
        $arDefaultVariableAliases = [];
        $arComponentVariables = ['ELEMENT_ID'];
        $SEF_FOLDER = '';
        $arUrlTemplates = [];

        if ($this->arParams['SEF_MODE'] == 'Y') {

            $arVariables = [];

            $arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates(
                $arDefaultUrlTemplates404,
                $this->arParams['SEF_URL_TEMPLATES']
            );

            $arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
                $arDefaultVariableAliases404,
                $this->arParams['VARIABLE_ALIASES']
            );

            $componentPage = CComponentEngine::ParseComponentPath(
                $this->arParams['SEF_FOLDER'],
                $arUrlTemplates,
                $arVariables
            );

            if (strlen($componentPage) <= 0) {
                $componentPage = 'list';
            }

            CComponentEngine::InitComponentVariables(
                $componentPage,
                $arComponentVariables,
                $arVariableAliases,
                $arVariables);

            $SEF_FOLDER = $this->arParams['SEF_FOLDER'];
        } else {
            $arVariables = [];
            $arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
                $arDefaultVariableAliases,
                $this->arParams['VARIABLE_ALIASES']
            );

            CComponentEngine::InitComponentVariables(
                false,
                $arComponentVariables,
                $arVariableAliases,
                $arVariables
            );
            $componentPage = intval($arVariables['ELEMENT_ID']) > 0 ? 'element' : 'list';
        }

        $this->arResult = [
            'FOLDER' => $SEF_FOLDER,
            'URL_TEMPLATES' => $arUrlTemplates,
            'VARIABLES' => $arVariables,
            'ALIASES' => $arVariableAliases,
        ];

        $this->IncludeComponentTemplate($componentPage);
    }
}