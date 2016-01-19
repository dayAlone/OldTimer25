<? $section = $arResult['SECTION']['PATH'][0]?>
<div class="row year">
  <div class="col-xs-7">
	<div class="year__title"><?=$section['NAME']?></div>
	<div class="year__divider divider divider--blue"></div>
	<p class="year__description"><?=$section['~DESCRIPTION']?></p>
  </div>
  <div class="col-xs-5">
	<div class="year__image-frame">
	  <div style="background-image: url(<?=$section['PREVIEW_PICTURE']['SRC']?>)" href="#" class="year__image"></div>
	</div>
  </div>
</div>
<? require('../articles/template.php') ?>
