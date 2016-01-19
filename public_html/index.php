<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "index");
?>
<header class="header">
  <div class="container">
    <h4>95 лет на службе отечеству</h4><img src="/layout/images/title.enter.png" alt="">
    <a href="#years" class="button">о выставке</a>
    <a href="/buy/" class="button button--blue">купить билет</a>
  </div>
</header>
<div class="page">
  <div class="container">
    <h3 class="center"><span>95 </span>главных машин страны. <span>95 </span>удивительных историй.
      <br/><span>95 </span>лет Гаражу Особого Назначения.
    </h3>
    <?
        $APPLICATION->IncludeComponent("bitrix:news.detail", "gallery", Array(
          "IBLOCK_ID"     => 43,
          "ELEMENT_CODE"  => 'index',
          "CHECK_DATES"   => "N",
          "IBLOCK_TYPE"   => "25",
          "SET_TITLE"     => "Y",
          "CACHE_TYPE"    => "A",
          "FIELD_CODE"    => array('PREVIEW_PICTURE'),
          "PROPERTY_CODE" => array("IMAGES")
        ));
    ?>

    <p class="center">
      Коллекцию автомобилей первых лиц государства показывают крайне редко. <br/>
      Не упустите свой шанс увидеть её. Уникальная выставка в Сокольниках <br/>
      продлится лишь пять дней - с 4 по 8 марта.
    </p>
    <div class="center"><a href="#" class="button">увидеть своими глазами</a></div>
    <div class="center">
      <h2>Кремлёвская коллекция<span>5 дней в Сокольниках</span></h2>
    </div>
    <div class="steps"></div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","years",
        Array(
                "IBLOCK_TYPE"         => 'content',
                "IBLOCK_ID"           => 44,
                "SECTION_CODE"        => "years",
                "TOP_DEPTH"           => "2",
                "SECTION_FIELDS"      => "",
                "ADD_SECTIONS_CHAIN"  => "Y",
                "CACHE_TYPE"          => "A",
                "CACHE_TIME"          => "36000000",
                "CACHE_NOTES"         => "",
                "CACHE_GROUPS"        => "Y"
            )
        );
    ?>
    <div class="row year">
      <div class="col-xs-7">
        <div class="year__title">1964-1983</div>
        <div class="year__divider divider divider--blue"></div>
        <p class="year__description">Гараж особого назначения (ГОН) — структурное подразделение Федеральной службы охраны России. Согласно закону «О государственной охране», сотрудники ГОНа обеспечивают безопасное передвижение президента России, премьер- министра, глав обеих палат парламента, а также лидеров всех зарубежных государств, находящихся в России с визитами. Гараж особого назначения был создан решением Совета народных комиссаров от 5 января 1921 года. Возглавил гараж личный водитель Ленина Степан Гиль. В 1922 году его на этом посту сменил личный водитель Сталина Павел Удалов, который возглавлял гараж до 1953 года.</p>
      </div>
      <div class="col-xs-5">
        <div class="year__image-frame">
          <div style="background-image: url(/layout/images/slider.jpg)" href="#" class="year__image"></div>
        </div>
      </div>
    </div>

    <div class="center">
        <a href="#years" class="button button--blue">выбрать другой период</a>
        <a href="/buy/" class="button">посетить выставку</a>
    </div>
    <div class="center">
      <div class="divider"></div>
    </div>

    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","tabs",
        Array(
                "IBLOCK_TYPE"         => 'content',
                "IBLOCK_ID"           => 44,
                "SECTION_CODE"        => "tabs",
                "TOP_DEPTH"           => "2",
                "SECTION_FIELDS"      => "",
                "ADD_SECTIONS_CHAIN"  => "Y",
                "CACHE_TYPE"          => "A",
                "CACHE_TIME"          => "36000000",
                "CACHE_NOTES"         => "",
                "CACHE_GROUPS"        => "Y"
            )
        );?>
    <div class="center"><a href="/buy/" class="button">посетить выставку</a></div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
