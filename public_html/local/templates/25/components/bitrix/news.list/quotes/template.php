
<div class="slider slider--quotes"><a href="#" data-direction="&lt;" class="slider__arrow slider__arrow--prev"><img src="/layout/images/svg/left.svg" alt=""></a><a href="#" data-direction="&gt;" class="slider__arrow slider__arrow--next"><img src="/layout/images/svg/right.svg" alt=""></a>
  <div data-height="450" data-width="100%" data-autoplay="true" data-nav="false" data-loop="true" data-transition-duration="1000" data-shadow="false" class="fotorama slider__fotorama">
      <?foreach ($arResult['ITEMS'] as $key=>$item):?>
        <div class="slider__item">
          <div class="quote">
            <div class="quote__content">
              <div style="background-image: url(<?=$item['PREVIEW_PICTURE']['SRC']?>)" class="quote__avatar"></div>
              <div class="quote__name"><?=$item['NAME']?></div>
              <div class="quote__info"><?=$item['PROPERTIES']['ABOUT']['VALUE']?></div>
              <div class="quote__text"><?=$item['PREVIEW_TEXT']?></div>
            </div>
          </div>
        </div>
      <?endforeach;?>
  </div>
</div>
<div class="authors">
    <?foreach ($arResult['ITEMS'] as $key=>$item):?>
        <a href="#" class="authors__item authors__item--active"><?=str_replace(" ", "<br>", $item['NAME'])?></a>
    <?endforeach;?>
</div>
