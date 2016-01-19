<? $section = $arResult['SECTION']['PATH'][count($arResult['SECTION']['PATH']) - 1]?>
<div class='year'>
    <div class="row">
      <div class="col-xs-7">
    	<div class="year__title"><?=$section['NAME']?></div>
    	<div class="year__divider divider divider--blue"></div>
    	<p class="year__description"><?=$section['~DESCRIPTION']?></p>
      </div>
      <? if(intval($section['PICTURE']) > 0):?>
      <div class="col-xs-5">
    	<div class="year__image-frame">
    	  <div style="background-image: url(<?=CFile::GetPath($section['PICTURE'])?>)" href="#" class="year__image"></div>
    	</div>
      </div>
      <?endif;?>
    </div>
    <? require('../articles/template.php') ?>
</div>
