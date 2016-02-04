<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "buy");
$APPLICATION->SetTitle('Билет он-лайн');
$srt = urlencode("Билет на Олдтаймер-Галерею и экспозицию ГОН");
?>
<header class="header">
  <div class="container"><img src="/layout/images/title.buy.png" alt=""></div>
</header>
<div class="page">
  <div class="container">
    <div class="center">
        <iframe style='display: inline-block;' frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=41001232198506&quickpay=shop&payment-type-choice=on&writer=seller&targets=<?=$srt?>&default-sum=500&button-text=02&mail=on&successURL=www.oldtimer.ru/oldtimer-gallery/visitors/&hint=<?=$str?>" width="450" height="280"></iframe>
      <p> <strong>Онлайн продажа билетов со скидкой прекращается 4 марта в 12:00.<br/><br/></strong>Для покупки нескольких билетов, исправьте сумму на любую, кратную 500 руб.<br/>
        Электронные билеты рассылаются в автоматическом режиме в течение 15 минут после оплаты.<br/>
        Если оплаченный билет не получен Вами в течение часа, напишите нам на <a href="mailto:gallery@oldtimer.ru" target="_blank">gallery@oldtimer.ru</a><br/><br/>
        Официальный билетный партнёр <a href="http://redkassa.ru" target="_blank">RedKassa.ru</a>
      </p>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
