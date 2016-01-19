<!DOCTYPE html><html lang='ru'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <?
  $APPLICATION->SetAdditionalCSS("/layout/css/frontend.css", true);
  $APPLICATION->AddHeadScript('/layout/js/frontend.js');
  global $CITY;
  ?>
  <title><?php
    $rsSites = CSite::GetByID(SITE_ID);
    $arSite  = $rsSites->Fetch();
    if($APPLICATION->GetCurDir() != '/' && $APPLICATION->GetCurDir() != "/eng/") {
      $APPLICATION->ShowTitle();

      echo ' | ' . $arSite['NAME'];
    }
    else echo $arSite['NAME'];
    ?></title>
  <?
    $APPLICATION->ShowHead();
  ?>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <script src="./layout/js/background_size_emu.js"></script>
  <![endif]-->
</head>
<body class="<?=$APPLICATION->AddBufferContent("body_class");?>">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<toolbar class="toolbar">
  <div class="container">
    <nav class="nav row">
      <div class="col-xs-1"><a href="http://oldtimer.ru" class="nav__item">oldtimer.ru</a></div>
      <div class="col-xs-11 right">
          <?php
                $APPLICATION->IncludeComponent("bitrix:menu", "sidebar",
                array(
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE"    => "A",
                    "ROOT_MENU_TYPE"     => "left",
                    "MAX_LEVEL"          => "1",
                    ),
                false);
            ?>
      </div>
    </nav>
  </div>
</toolbar>
