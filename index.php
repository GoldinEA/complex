<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Новости");
?>

<!-- --><!-- -->
<!-- -->
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "template1", Array(
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "2",	// Код информационного блока
		"NEWS_COUNT" => "5",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"DETAIL_URL" => "/content/news/#SECTION_ID#/#ELEMENT_ID#/",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"PREVIEW_TRUNCATE_LEN" => "0",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DISPLAY_PANEL" => "N",
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?>
				<!-- -->

<h2>Видео-новости</h2>

<?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"PLAYER_TYPE" => "auto", 
		"USE_PLAYLIST" => "N", 
		"PATH" => "/upload/intro.flv", 
		"WIDTH" => "400", 
		"HEIGHT" => "324", 
		"FULLSCREEN" => "Y", 
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins", 
		"SKIN" => "bitrix.swf", 
		"CONTROLBAR" => "bottom", 
		"WMODE" => "transparent", 
		"HIDE_MENU" => "N", 
		"SHOW_CONTROLS" => "Y", 
		"SHOW_STOP" => "N", 
		"SHOW_DIGITS" => "Y", 
		"CONTROLS_BGCOLOR" => "FFFFFF", 
		"CONTROLS_COLOR" => "000000", 
		"CONTROLS_OVER_COLOR" => "000000", 
		"SCREEN_COLOR" => "000000", 
		"WMODE_WMV" => "window", 
		"AUTOSTART" => "N", 
		"REPEAT" => "N", 
		"VOLUME" => "90", 
		"DISPLAY_CLICK" => "play", 
		"MUTE" => "N", 
		"HIGH_QUALITY" => "Y", 
		"ADVANCED_MODE_SETTINGS" => "N", 
		"BUFFER_LENGTH" => "10", 
		"DOWNLOAD_LINK_TARGET" => "_self" 
	),
false
);?>

<!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>