<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "gallery");
$APPLICATION->SetTitle('Олдтаймер-галерея');
$srt = urlencode("Билет на Олдтаймер-Гаререю и экспозицию ГОН");
?>
<div class="header">
  <div class="container"><img src="/layout/images/title.gallery.png" alt=""><br><a href="#" class="button button--orange">о выставке</a><a href="#" class="button button--brown">купить билет</a></div>
</div>
<div class="page">
  <div class="container">
    <div class="row gallery__description">
      <div class="col-xs-5">
        <div class="divider divider--yellow"></div>
        <p>Весенняя Олдтаймер-Галерея 2016 года будет значительно масштабнее предыдущих. Она займёт в Сокольниках сразу три павильона – 4, 4.1 и 4.2, а также прилегающие уличные площадки. Общая площадь экспозиции превысит 11.000 квадратных метров. </p>
        <p>В 25-й раз реставрационные мастерские и коллекционные бюро представят свои достижения, среди которых непременно будут громкие премьеры, сюрпризы и сенсации — стоит подготовить фотокамеры.</p>
        <p>Развалы «блошиного рынка» также заслуживают посещения — возможно, на этот раз именно вам удастся найти среди множества «вещей с историей» настоящую жемчужину!</p>
      </div>
      <div class="col-xs-7 right"><img src="/layout/images/gallery.about.png" alt=""></div>
    </div>
    <div class="center">
      <div class="divider divider--yellow xs-margin-bottom"></div><br>
      <h2 class="no-margin-top xxl-margin-bottom">Лучшие экспонаты</h2>
    </div>
    <?php
        $APPLICATION->IncludeComponent("bitrix:news.list", "articles",
        array(
            "IBLOCK_ID"           => 44,
            "NEWS_COUNT"          => "99999",
            "SORT_BY1"            => "SORT",
            "SORT_ORDER1"         => "ASC",
            "PROPERTY_CODE"       => array('LINK'),
            "PARENT_SECTION"      => 'gallery',
            "CACHE_TYPE"          => "A",
            "DISPLAY_PANEL"       => "N",
            "SET_TITLE"           => "N"
           ),
           false
        );
    ?>
    <div class="center m-margin-top"><a href="/buy/" class="button button--orange xxl-margin-bottom">КУПИТЬ БИЛЕТ ОНЛАЙН</a><br>
      <div class="divider divider--yellow xs-margin-bottom"></div><br>
      <h2 class="no-margin-top xxl-margin-bottom">Звёзды говорят</h2><img src="/layout/images/divider.png" alt="">
      <div class="slider slider--quotes"><a href="#" data-direction="&lt;" class="slider__arrow slider__arrow--prev"><img src="/layout/images/svg/left.svg" alt=""></a><a href="#" data-direction="&gt;" class="slider__arrow slider__arrow--next"><img src="/layout/images/svg/right.svg" alt=""></a>
        <div data-height="450" data-width="100%" data-autoplay="true" data-nav="false" data-loop="true" data-transition-duration="1000" data-shadow="false" class="fotorama slider__fotorama">
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="quote">
              <div class="quote__content">
                <div style="background-image: url(/layout/images/slider.jpg)" class="quote__avatar"></div>
                <div class="quote__name">Леонид Ярмольник</div>
                <div class="quote__info">АКТЕР</div>
                <div class="quote__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="authors"><a href="#" class="authors__item authors__item--active">Леонид<br/>Ярмольник</a><a href="#" class="authors__item">Михаил<br/>Шмаков</a><a href="#" class="authors__item">Алексей<br/>Лысенков</a><a href="#" class="authors__item">Вилли<br/>Токарев</a><a href="#" class="authors__item">Александр<br/>Пикуленко</a><a href="#" class="authors__item">Павел<br/>Санаев</a><a href="#" class="authors__item">Никас<br/>Сафронов</a><a href="#" class="authors__item">Владимир<br/>Жириновский</a><a href="#" class="authors__item">Павел<br/>Коган</a><a href="#" class="authors__item">Александр<br/>Кабаков</a><a href="#" class="authors__item">Элеонора<br/>Филина</a></div><img src="/layout/images/divider.png" alt="">
    </div>
    <div class="center m-margin-top"><a href="/buy/" class="button button--orange xxl-margin-bottom">ПОСЕТИТЬ ВЫСТАВКУ</a><br>
      <div class="divider divider--yellow xs-margin-bottom"></div><br>
      <h2 class="no-margin-top xs-margin-bottom">15 лет успеха</h2>
    </div>
    <?
        $APPLICATION->IncludeComponent("bitrix:news.detail", "gallery", Array(
          "IBLOCK_ID"     => 42,
          "ELEMENT_CODE"  => 'gallery',
          "CHECK_DATES"   => "N",
          "IBLOCK_TYPE"   => "gallery2015",
          "SET_TITLE"     => "Y",
          "CACHE_TYPE"    => "A",
          "FIELD_CODE"    => array('PREVIEW_PICTURE'),
          "PROPERTY_CODE" => array("IMAGES")
        ));
    ?>
    <div class="row xxl-margin-bottom xxs-margin-top slider__description">
      <div class="col-xs-4">
        <p>Олдтаймер-Галерея – единственная в России и крупнейшая в Восточной Европе выставка старинных автомобилей и технического антиквариата.</p>
      </div>
      <div class="col-xs-4">
        <p>Олдтаймер-Галерея проводится с 2002 года дважды в году – весной и осенью – в крупнейших выставочных центрах Москвы: Сокольниках, Экспоцентре и Крокус-Экспо.</p>
      </div>
      <div class="col-xs-4">
        <p>Олдтаймер-Галерея – место, где можно приятно и полезно провести семейные выходные. Посетителей любого возраста здесь ждёт много интересного.</p>
      </div>
    </div>
    <div class="center"><a href="/buy/" class="button button--brown xxl-margin-bottom">УВИДЕТЬ СВОИМИ ГЛАЗАМИ</a><br>
      <div class="divider divider--yellow xs-margin-bottom"></div><br>
      <h4>5 марта 2016 в 14:00<br>в КВЦ Сокольники, в конференц-зале пав.4<br>состоится</h4>
      <h2 class="no-margin-top xs-margin-bottom">Конференция на тему:</h2>
      <p class="highlight">«Изменения в российском законодательстве,<br>касающиеся ввоза, легализации, страхования,<br>постановки на учёт и эксплуатации олдтаймеров»</p>
    </div>
    <div class="row gallery__description">
      <div class="col-xs-6">
        <p>Участие в конференции даёт уникальную возможность задать прямые вопросы представителям следующих организаций:</p>
        <p>
          – Российская Автомобильная Федерация, <br>
          – Комитет Классических Автомобилей РАФ,<br>
          – Министерство промышленности и торговли РФ,<br>
          – ГУОБДД,<br>
          – Евразийская экономическая комиссия,<br>
          – Администратор систем электронных паспортов ТС,<br>
          – Ингосстрах.

        </p>
        <p>Повестка дня конференции и круг обсуждаемых тем будут определяться вашими вопросами, которые можно задать заранее. Это позволит докладчикам лучше подготовиться и дать вам более полную информацию.</p>
      </div>
      <div class="col-xs-6"><br><img src="/layout/images/gallery.car.png" alt=""></div>
    </div>
    <div class="divider divider--thin m-margin-top m-margin-bottom"></div>
    <div class="row m-margin-bottom">
      <div class="col-xs-3">
        <h6>хочу <br/>спросить</h6><a href="#" class="social"><img src="/layout/images/fb.png" alt=""></a><a href="#" class="social"><img src="/layout/images/vk.png" alt=""></a>
      </div>
      <div class="col-xs-9">
        <h6 class="xxl-margin-left">хочу <br/>посетить</h6>
        <form data-parsley-validate class="form">
          <div class="form__message">Поздравляем! <br/>Вы успешно зарегистрировались на конференцию.</div>
          <input type="text" name="number" placeholder="Кол-во мест" required>
          <input type="email" name="email" placeholder="Ваш e-mail" required>
          <input type="submit" placeholder="Регистрация" required>
        </form>
      </div>
    </div>
    <p>Внимание! Конференция будет проходить в рамках выставки старинных автомобилей «Олдтаймер-Галерея». Для прохода в конференц-зал необходимо приобрести входной билет на выставку. Никаких дополнительных сборов за участие в конференции не взимается.</p>
    <div class="center"><a href="/buy/" class="button button--orange xxl-margin-top">КУПИТЬ БИЛЕТ</a></div>
  </div>
</div><?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>