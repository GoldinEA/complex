<?php use Bitrix\Main\Localization\Loc;

if (!empty($arResult['GROUP'])) { ?>
    <div>
        <p><b>ID:</b> <?= $arResult['GROUP']['ID'] ?></p>
        <p><b><?= Loc::getMessage('NAME_GROUP') ?></b> <?= $arResult['GROUP']['NAME'] ?></p>
        <p><b><?= Loc::getMessage('DESC_GROUP') ?></b> <?= $arResult['GROUP']['DESCRIPTION'] ?></p>
    </div>
<?php }