<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "reasons");
$APPLICATION->SetTitle('12 причин посетить');
?>
<div class="header">
  <div class="container"><img src="/layout/images/title.reasons.png" alt=""></div>
</div>
<div class="page">
  <div class="container">
      <?php
          $APPLICATION->IncludeComponent("bitrix:news.list", "articles",
          array(
              "IBLOCK_ID"           => 44,
              "NEWS_COUNT"          => "99999",
              "SORT_BY1"            => "SORT",
              "SORT_ORDER1"         => "ASC",
              "PROPERTY_CODE"       => array('LINK'),
              "PARENT_SECTION_CODE" => 'reasons',
              "CACHE_TYPE"          => "A",
              "DISPLAY_PANEL"       => "N",
              "SET_TITLE"           => "N"
             ),
             false
          );
      ?>
      <div class="center"><a href="/buy/" class="button">купить билет онлайн</a></div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
