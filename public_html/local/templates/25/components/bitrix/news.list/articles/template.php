<div class="row">
<?foreach ($arResult['ITEMS'] as $key=>$item):
    $key += 1;
    $link = $item['PROPERTIES']['LINK']['VALUE'];
    ?>
    <div class="col-xs-4">
        <div class="preview">
            <?if(strlen($link)>0):?>
                <a data-url="<?=$link?>" href="#Modal" data-toggle="modal" style="background-image:url(<?=$item['PREVIEW_PICTURE']['SRC']?>);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$item['PREVIEW_PICTURE']['SRC']?>', sizingMethod='scale');-ms-filter: &quot;progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$item['PREVIEW_PICTURE']['SRC']?>', sizingMethod='scale')&quot;;" class="preview__image"></a>
                <a data-url="<?=$link?>" href="#Modal" data-toggle="modal" class="preview__title"><?=$item['NAME']?></a>
            <? else: ?>
                <div class='preview__image' style="background-image:url(<?=$item['PREVIEW_PICTURE']['SRC']?>);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$item['PREVIEW_PICTURE']['SRC']?>', sizingMethod='scale');-ms-filter: &quot;progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$item['PREVIEW_PICTURE']['SRC']?>', sizingMethod='scale')&quot;;"></div>
                <div class='preview__title'><?=$item['NAME']?></div>
            <? endif;?>
            <div class="preview__text"><?=$item['PREVIEW_TEXT']?></div>
        </div>
    </div>
    <? if($key % 3 == 0 && $key != 0):?>
    <div class="col-xs-12"></div>
    <?endif;?>
<?endforeach?>
</div>
