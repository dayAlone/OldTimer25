<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");
	$APPLICATION->IncludeComponent("bitrix:news.list", "year",
	array(
		"IBLOCK_ID"      => 44,
		"NEWS_COUNT"     => "99999",
		"SORT_BY1"       => "SORT",
		"SORT_ORDER1"    => "ASC",
		"PROPERTY_CODE"  => array('LINK'),
		"PARENT_SECTION" => $_GET['id'],
		"CACHE_TYPE"     => "A",
		"DISPLAY_PANEL"  => "N",
		"SET_TITLE"      => "N"
	   ),
	   false
	);
?>
