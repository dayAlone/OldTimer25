<ul class="nav-tabs">
    <?foreach ($arResult['SECTIONS'] as $key => $value) {?>
        <li role="presentation" <?=($key === 0 ?'class="active"':'')?>>
            <a href="#t-<?=$key?>" aria-controls="t-<?=$key?>" role="tab" data-toggle="tab"><?=$value['NAME']?></a>
        </li>
    <? }?>
</ul>
<div class="tab-content">
  <div id="t-1" role="tabpanel" class="tab-pane fade in active">

  </div>
  <div id="t-2" role="tabpanel" class="tab-pane">

  </div>
  <div id="t-3" role="tabpanel" class="tab-pane">

  </div>
</div>
