<?php use Bitrix\Main\Localization\Loc;

if (!empty($arResult['GROUPS'])) { ?>
    <table>
        <tr>
            <th><?= Loc::getMessage('NAME_GROUP') ?></th>
            <th>Ссылка на страницу</th>
        </tr>
        <?php foreach ($arResult['GROUPS'] as $group): ?>
            <tr>
                <td><?= $group['NAME'] ?></td>
                <td><a href="<?= $arParams['SEF_FOLDER'] ?><?= $group['ID'] ?>/"><?= Loc::getMessage('GO_TO_GROUP') ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p><?= Loc::getMessage('GROUPS_IS_EMPTY') ?></p>
<?php } ?>