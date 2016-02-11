<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "contacts");
$APPLICATION->SetTitle('Проезд / Расписание / Билеты');
?>
<div class="header">
  <div class="container"><img src="/layout/images/title.contacts.png" alt=""></div>
</div>
<div class="page">
  <div class="container">
    <div class="row text">
      <div class="col-xs-4">
        <h4>Билеты</h4>
        <p>

          Билет <a href="/buy/">онлайн </a>– 500 рублей <br/>
          Билет в кассе – 700 рублей <br/>
          Семейный билет – 2000 рублей <br/>
          <a data-toggle="modal" data-target="#Price" href="#Price">Скидки и льготы</a>
          <a href="#Present">Подарить билет</a>
        </p>
      </div>
      <div class="col-xs-4">
        <h4>Время работы</h4>
        <p>
          4 марта с 12:00 до 18:00<br/>
          5 марта с 10:00 до 19:00<br/>
          6 марта с 10:00 до 19:00<br/>
          7 марта с 10:00 до 19:00<br/>
          8 марта с 10:00 до 17:00
        </p>
      </div>
      <div class="col-xs-4">
        <h4>Место проведения</h4>
        <p>Выставочный центр «Сокольники», павильоны 4, 4.1 и 4.2<br><a data-toggle="modal" data-target="#Scheme" href="#Scheme">Схема выставочного центра с парковками </a><br>Сокольники находятся недалеко от центра города –<br/> до выставки легко добраться и на <a data-toggle="modal" data-target="#Metro" href="#Metro">метро</a>, и на <a data-toggle="modal" data-target="#Car" href="#Car">автомобиле</a></p>
      </div>
    </div>
    <div class="center"><a href="/buy/" class="button button--orange">купить билет онлайн</a></div>
    <form id="Present" action="/buy/" class="center hidden">
      <div class="divider divider--yellow s-margin-bottom"></div>
      <h2 class="m-margin-bottom">Олдтаймер-Галерея — в подарок</h2>
      <h4>
        День влюблённых, 23 февраля, 8 марта – весна щедра на праздники!<br/>
        Вы уже подумали о подарках? Есть отличный вариант! Оформите электронный билет на Олдтаймер-Галерею, выберите и приложите к своему поздравлению тематическую ретро-открытку.<br/>
        Такому подарку будут рады!<br/>
      </h4>
      <div class="cards m-margin-top">
        <div class="cards__description">Выберите поздравительную открытку</div>
        <div class="card">
          <input name="card" value="1" type="radio" id="card-1" checked class="hidden">
          <label for="card-1" class="card__label"><img src="/layout/images/card-1.jpg" alt=""><br></label>
        </div>
        <div class="card">
          <input name="card" value="2" type="radio" id="card-2" class="hidden">
          <label for="card-2" class="card__label"><img src="/layout/images/card-2.jpg" alt=""><br></label>
        </div>
        <div class="card">
          <input name="card" value="3" type="radio" id="card-3" class="hidden">
          <label for="card-3" class="card__label"><img src="/layout/images/card-3.jpg" alt=""><br></label>
        </div>
        <div class="card">
          <input name="card" value="4" type="radio" id="card-4" class="hidden">
          <label for="card-4" class="card__label"><img src="/layout/images/card-4.jpg" alt=""><br></label>
        </div>
        <div class="card">
          <input name="card" value="5" type="radio" id="card-5" class="hidden">
          <label for="card-5" class="card__label"><img src="/layout/images/card-5.jpg" alt=""><br></label>
        </div>
      </div>
      <button type="submit" class="button button--brown m-margin-top l-margin-bottom">купить билет онлайн</button>
    </form>
  </div>
</div>
<div id="Scheme" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">СХЕМА ВЫСТАВОЧНОГО ЦЕНТРА С ПАРКОВКАМИ</h3>
      <div class="center">
        <p>Выставочный центр предоставляет посетителям около 2000 паковочных машиномест. <br>Стоимость въезда на территорию КВЦ "Сокольники" и парковки – 300 руб.</p>
        <img src="http://23.oldtimer.ru/layout/images/auto.jpg">
      </div>
    </div>
  </div>
</div>
<div id="Metro" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">КАК ДОБРАТЬСЯ НА МЕТРО</h3>
      <div class="center">
        <p>Выставочный центр располагается на территории парка «Сокольники», <br>в 10 минутах ходьбы от станции метро «Сокольники».</p>
        <img src="/layout/images/walk1.jpg">
      </div>
    </div>
  </div>
</div>
<div id="Car" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">КАК ДОБРАТЬСЯ НА АВТОМОБИЛЕ</h3>
      <div class="center">
          <p>
              Заезд на автомобиле осуществляется через 3-й Лучевой просек.<br>
              Въезд на территорию – 300 руб. <br>
              Машину можно оставить на специально оборудованных паркингах.
          </p>
          <img src="http://23.oldtimer.ru/layout/images/auto.jpg">
      </div>
    </div>
  </div>
</div>
<div id="Price" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">СТОИМОСТЬ БИЛЕТОВ</h3>
      <p><b>В кассах «Сокольников» в дни работы выставки:</b></p>
      <p><b>700 руб </b>	ПОЛНЫЙ БИЛЕТ</p>
      <p><b>500 руб </b>	ЛЬГОТНЫЙ БИЛЕТ<br>(с подтверждающим документом) <br>школьники, студенты, инвалиды, пенсионеры, члены многодетных семей</p>
      <p><b>2000 руб </b>	СЕМЕЙНЫЙ БИЛЕТ<br>(2 взрослых + 3 детей)</p>
      <p><b>БЕСПЛАТНО </b>– дошкольники</p>
    </div>
  </div>
</div><?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
