<? $this->setFrameMode(true);?>
<?foreach ($arResult as $key=>$item):?>
    <a href="<?=$item['LINK']?>" class="nav__item <?=($item['SELECTED']?'nav__item--active':'')?><?=$item['TEXT']?></a><br>
<?endforeach;?>
