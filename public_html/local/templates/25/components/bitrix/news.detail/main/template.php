<?$item = $arResult;?>
  <div style="background-image:url(<?=$item['DETAIL_PICTURE']['SRC']?>)" class="page__block page__block--promo page__block--<?=$item['PROPERTIES']['CLASS']['VALUE']?>">
      <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" class="page__image">
    <div class="page__content">
      <h1 class="page__title"><?=$item['NAME']?></h1>
      <div class="page__divider"></div>
      <p><?=$item['DETAIL_TEXT']?></p>
      <?=html_entity_decode($item['PROPERTIES']['BUTTONS']['VALUE']['TEXT'])?>

    </div><a href="#Map" data-toggle="modal" class="map map--<?=$item['CODE']?>">
      <div class="map__text">
          <span>где увидеть:<br></span>
          КВЦ Сокольники<br><?=$item['PROPERTIES']['WHERE']['VALUE']?>
      </div>
      <div class="map__frame">
        <div class="map__zoom"></div>
      </div></a>
  </div>
