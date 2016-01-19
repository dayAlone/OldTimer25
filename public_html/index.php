<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "index");
?>
<header class="header">
  <div class="container">
    <h4>95 лет на службе отечеству</h4><img src="/layout/images/title.enter.png" alt=""><a href="#" class="button">о выставке</a><a href="#" class="button button--blue">купить билет</a>
  </div>
</header>
<div class="page">
  <div class="container">
    <h3 class="center"><span>95 </span>главных машин страны. <span>95 </span>удивительных историй.
      <br/><span>95 </span>лет Гаражу Особого Назначения.
    </h3>
    <div class="slider"><a href="#" data-direction="&lt;" class="slider__arrow slider__arrow--prev"><img src="/layout/images/svg/left.svg" alt=""></a><a href="#" data-direction="&gt;" class="slider__arrow slider__arrow--next"><img src="/layout/images/svg/right.svg" alt=""></a>
      <div data-width="100%" data-autoplay="true" data-nav="false" data-loop="true" data-transition-duration="1000" data-shadow="false" class="fotorama slider__fotorama"><img src="/layout/images/slider.jpg" alt=""><img src="/layout/images/slider.jpg" alt=""><img src="/layout/images/slider.jpg" alt=""></div>
    </div>
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
    <div class="years"><a href="#" data-value="0" style="z-index: 8" class="years__item ">1916</a><a href="#" data-value="1" style="z-index: 7" class="years__item ">1924</a><a href="#" data-value="2" style="z-index: 6" class="years__item ">1953</a><a href="#" data-value="3" style="z-index: 5" class="years__item years__item--active">1964</a><a href="#" data-value="4" style="z-index: 4" class="years__item ">1983</a><a href="#" data-value="5" style="z-index: 3" class="years__item ">1991</a><a href="#" data-value="6" style="z-index: 2" class="years__item ">1999</a><a href="#" data-value="7" style="z-index: 1" class="years__item ">2016</a>
    </div>
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
        <a href="/contacts/" class="button">посетить выставку</a>
    </div>
    <div class="center">
      <div class="divider"></div>
    </div>
    <ul class="nav-tabs">
      <li role="presentation" class="active"><a href="#t-1" aria-controls="t-1" role="tab" data-toggle="tab">Автомобили выездной охраны</a></li>
      <li role="presentation"><a href="#t-2" aria-controls="t-2" role="tab" data-toggle="tab">Aвтобусы</a></li>
      <li role="presentation"><a href="#t-3" aria-controls="t-3" role="tab" data-toggle="tab">Мотоциклы почётного эскорта</a></li>
    </ul>
    <div class="tab-content">
      <div id="t-1" role="tabpanel" class="tab-pane fade in active">

      </div>
      <div id="t-2" role="tabpanel" class="tab-pane">

      </div>
      <div id="t-3" role="tabpanel" class="tab-pane">

      </div>
    </div>
    <div class="center"><a href="/contacts/" class="button">посетить выставку</a></div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
