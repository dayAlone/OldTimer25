<ul class="nav-tabs">
    <?foreach ($arResult['SECTIONS'] as $key => $value) {?>
        <li role="presentation" <?=($key === 0 ?'class="active"':'')?>>
            <a href="#t-<?=$key?>" aria-controls="t-<?=$key?>" role="tab" data-toggle="tab"><?=$value['NAME']?></a>
        </li>
    <? }?>
</ul>
<div class="tab-content">
    <?foreach ($arResult['SECTIONS'] as $key => $value) {?>
      <div id="t-<?=$key?>" role="tabpanel" class="tab-pane fade in active">
          <?php
              $APPLICATION->IncludeComponent("bitrix:news.list", "articles",
              array(
                  "IBLOCK_ID"           => 44,
                  "NEWS_COUNT"          => "99999",
                  "SORT_BY1"            => "SECTION_ID",
                  "SORT_ORDER1"         => "ASC",
                  "PROPERTY_CODE"       => array('LINK'),
                  "SECTION_ID"          => $value['ID']
                  "CACHE_TYPE"          => "A",
                  "DISPLAY_PANEL"       => "N",
                  "PARENT_SECTION_CODE" => "tabs",
                  "SET_TITLE"           => "N"
                 ),
                 false
              );
          ?>
      </div>
    <? }?>
</div>
