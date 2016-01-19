<div class="quotes">
    <?foreach ($arResult['ITEMS'] as $key=>$item):?>
          <div data-bg="#<?=$item['PROPERTIES']['BG']['VALUE']?>" data-id="<?=$item['ID']?>" data-border="#<?=$item['PROPERTIES']['BORDER']['VALUE']?>" class="quote">
            <div class="quote__frame">
              <div class="quote__arrow"><svg width="55" height="42" viewBox="0 0 55 42" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="corner"><path d="M5.5 42c0-1.11 1.054-3.252 2.188-4.124L48.524 6.484l5.83-4.482H7.002C6.172 2.002 5.5 1.332 5.5 0H0v42h5.5z" id="bg"/><path d="M5.5 42c0-1.11 1.054-3.252 2.188-4.124L48.524 6.484l5.83-4.482H7.002C6.172 2.002 5.5 1.332 5.5 0h-5c0 4.093 2.91 7.002 6.502 7.002H39.5L4.64 33.912C2.275 35.732.5 39.337.5 42h5z" id="arrow"/></g></g></svg>
              </div>
              <p><?=$item['PREVIEW_TEXT']?></p>
            </div>
            <div class="quote__author">
              <div style="background-image: url(<?=$item['PREVIEW_PICTURE']['SRC']?>)" class="quote__image"></div>
              <div class="quote__name"><?=$item['NAME']?></div>
              <div class="quote__info"><?=$item['PROPERTIES']['ABOUT']['VALUE']?></div>
            </div>
          </div>
    <?endforeach?>
</div>
<div class="authors">
    <?foreach ($arResult['ITEMS'] as $key=>$item):?>
    <a href="#" class="author" data-id="<?=$item['ID']?>">
        <?=str_replace(" ", "<br>", $item['NAME'])?>
    </a>
    <?endforeach?>
</div>
