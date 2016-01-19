<div class="years">
    <?foreach ($arResult['SECTIONS'] as $key => $value) {?>
        <a href="#" data-value="<?=$key?>" data-id="<?=$value['ID']?>" style="z-index: <?=count($arResult['SECTIONS']) - $key?>" class="years__item "><?=$value['CODE']?></a>
    <? }?>
</div>
