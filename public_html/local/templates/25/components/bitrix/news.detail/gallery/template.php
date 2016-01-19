<?$item = $arResult;
 if(!function_exists('images_sort')) {
    function images_sort($a, $b)
    {
        if($a['sort']=='' && $b['sort']>0)
            return 1;

        if($b['sort']=='' && $a['sort']>0)
            return -1;

        if($a['sort']=='' && $b['sort']=='')
            return ($a['value'] < $b['value']) ? -1 : 1;

        if ($a['sort'] == $b['sort'])
            return 0;

        return ($a['sort'] < $b['sort']) ? -1 : 1;
    }
}
$gallery     = array();
$prop_name   = "IMAGES";
$description = $item['PROPERTIES'][$prop_name]['DESCRIPTION'];

foreach ($item['PROPERTIES'][$prop_name]['VALUE'] as $key => $value)
      $gallery[] = array('sort'=>$description[$key], 'value'=> $value);
usort($gallery, "images_sort");

?>
<div class="slider">
    <a href="#" data-direction="&lt;" class="slider__arrow slider__arrow--prev"><img src="/layout/images/svg/left.svg" alt=""></a>
    <a href="#" data-direction="&gt;" class="slider__arrow slider__arrow--next"><img src="/layout/images/svg/right.svg" alt=""></a>
    <div data-width="100%" data-autoplay="true" data-nav="false" data-loop="true" data-transition-duration="1000" data-shadow="false" class="fotorama slider__fotorama">
        <? foreach($gallery as $image):?>
        <img src="<?=CFile::GetPath($image['value'])?>" alt=""/>
        <?endforeach;?>
    </div>
</div>
