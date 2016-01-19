<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>
    <?
		$APPLICATION->IncludeComponent("bitrix:news.list", "promos",
			array(
				"IBLOCK_ID"            => 42,
				"NEWS_COUNT"           => "3",
				"SORT_BY1"             => "SORT",
				"SORT_ORDER1"          => "ASC",
				"CACHE_TYPE"           => "A",
                'FIELD_CODE'           => array('DETAIL_PICTURE'),
				'PROPERTY_CODE'        => array('CLASS', 'BG'),
				"SET_TITLE"            => "N"
			),
			false
		);
	?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
