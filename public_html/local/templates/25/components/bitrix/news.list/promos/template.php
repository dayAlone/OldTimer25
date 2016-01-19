<div class="promos">
    <?foreach ($arResult['ITEMS'] as $key=>$item):
        $bg = $item['DETAIL_PICTURE']['SRC'];
        if(intval($item['PROPERTIES']['BG']['VALUE'])>0)
            $bg = CFile::GetPath($item['PROPERTIES']['BG']['VALUE']);
        ?><a href="/<?=$item['CODE']?>/" style="background-image: url(<?=$bg?>)" class="promo promo--<?=$item['PROPERTIES']['CLASS']['VALUE']?>">
            <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" class="promo__image">
            <div class="promo__content">
              <h2 class="promo__title"><?=$item['NAME']?></h2>
              <p class="promo__text"><?=$item['PREVIEW_TEXT']?></p><br>
              <div class="promo__divider promo__divider--white"></div>
            </div>
        </a><?
    endforeach?>
</div>
