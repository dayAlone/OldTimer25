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

<div class="gallery">
    <? foreach($gallery as $image):?>
    <div class="gallery__item" style="background: url(<?=CFile::GetPath($image['value'])?>)"></div>
    <?endforeach;?>
</div>
