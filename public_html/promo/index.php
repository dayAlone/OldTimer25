<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('body_class', "buy");
$APPLICATION->SetTitle('Билет онлайн');
$srt = "Билет на «Олдтаймер-Галерею» и экспозицию «95 лет ГОН»";
$srt .= " + Промобилет";
$cost = 1000;


$srt = urlencode($srt);
?>
<header class="header">
  <div class="container"><img src="/layout/images/title.buy.png" alt=""></div>
</header>
<div class="page">
  <div class="container">
    <div class="center">
        <iframe
            style='display: inline-block;'
            frameborder="0"
            allowtransparency="true"
            scrolling="no"
            src="https://money.yandex.ru/embed/shop.xml?account=41001232198506&quickpay=shop&payment-type-choice=on&writer=seller&targets=<?=$srt?>&default-sum=<?=$cost?>&button-text=02&mail=on&successURL=www.oldtimer.ru/oldtimer-gallery/visitors/&comment=on" width="450" height="295">
        </iframe>
      <p>
        Для участия в акции "Каждый третий – бесплатно!" впишите промокод в поле "Комментарий" и оплатите два билета на выставку по 500 рублей каждый. Третий билет вы получите бесплатно.
        <br/><br/>Чтобы купить большее количество билетов, исправьте сумму на любую, кратную 1000 рублей.
        <br/><br/>Акция закончится не позднее 25 февраля. Количество билетов, участвующих в акции, ограничено. По окончании акции эта страница станет недоступной.
        <br/><br/>
        Электронные билеты рассылаются в автоматическом режиме в течение 15 минут после оплаты.<br/>
        Если оплаченный билет не получен Вами в течение часа, напишите нам на <a href="mailto:gallery@oldtimer.ru" target="_blank">gallery@oldtimer.ru</a><br/><br/>
        Официальный билетный партнёр <a href="http://redkassa.ru" target="_blank">RedKassa.ru</a>
      </p>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
