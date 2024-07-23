<?php if(!defined('SCRIPT_BY_SIRGOFFAN')){
echo ('Выявлена попытка взлома!');
exit();
}
?>
<?if(empty($id)){?>

<nav class="navbar navbar-expand-md navbar-dark bg-serf bg-jumb">
<a class="navbar-brand wow bounceInDown" href="" style="visibility: visible; animation-name: bounceInDown;"><span class="text-warning"><?=$sitename?></span></a>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">

<ul class="navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
<li class="nav-item"><a class="nav-link" href="/rules">Правила</a></li>
<li class="nav-item"><a class="nav-link" href="/faq">F.A.Q</a></li>
<li class="nav-item"><a class="nav-link" href="/contacts">Поддержка</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$vkgrup?>" target="_blank">Вконтакте</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$telega?>" target="_blank">Телеграм</a></li>
</ul>

</div>
</nav>

<div id="main">
<div class="bg-index"><br>
<div class="title-page">
<h2 style="color: #fff;">Вопросы и ответы</h2>
</div>
<div class="container">
<center><p class="text-light" style="position: relative;z-index: 99;font-size: 120%;">Мы постарались для Вас собрать ответы на часто задаваемые вопросы. 
</p></center>
</div><br>
</div><br>

<div class="container" style="min-height: 500px;">
<div class="row">
<div class="col-md-12">
<div class="card bg-light">
<div class="card-header">Наиболее частые вопросы</div>
<div class="card-body">
Вы планируете стать участником проекта <?=$sitename?>, но предварительно хотите больше узнать о проекте? - Рекомендуем Вам ознакомиться с наиболее распространенными вопросами от наших пользователей. 
Если нужной информации о работе проекта <?=$sitename?> нет, то Вам с радостью ответят на вопросы в технической поддержке сайта.
<br><br>
<b>1) Какими браузерами лучше пользоваться при посещении <?=$sitename?>?</b><br>
При проблемах с созданием вкладов настоятельно рекомендуем пользоваться последними версиями браузеров.
<br>
<br>
<b>2) Что нужно для регистрации?</b><br>
Всё очень просто! Необходимо указать номер Вашего Payeer кошелька. 
<br>
<br>
<b>3) Какие инвестиционные планы вы предлагаете?</b><br>
Мы предлагаем один их самых выгодных планов: +<?=$percent_u?>% через <?=$timeprofit?>.
<br>
<br>
<b>4) Операции автоматические?</b><br>
Да! после регистрации и открытия вклада, вам остаётся только ожидать закрытия вклада и последующего автоматического вывода средств на ваш кошелёк!. 
<br>
<br>
<b>5) Каким должен быть размер инвестиций в систему?</b><br>
Размер вклада каждый инвестор определяет самостоятельно в пределах от <?=$mindep?> <?=$m_curr?>. до <?=$maxdep?> <?=$m_curr?>.
<br>
<br>
<b>6) У меня нет кошелька Payeer. Что делать?</b><br>
Вы можете его создать очень просто, перейдите по этой ссылке 
<b><a href="https://payeer.com/?partner=3265128" target="_blank" style="color: #fa7900;">" PAYEER "</a></b>
<br>
<br>
<b>7) У меня на Payeer нет рублей, но есть другая валюта. Как мне быть?</b><br>
Очень выгодно обменять любую валюту на Payeer рубли можно здесь: 
<b><a href="https://www.bestchange.ru/?p=89855" target="_blank" style="color: #fa7900;">" BESTCHANGE "</a></b>
<br>
<br>
<b>8) Как сделать мой первый депозит?</b><br>
Шаг 1. Введите номер своего кошелька Payeer (авторизация/регистрация)<br>
Шаг 2. Оплатите депозит
<br>
<br>
<b>9) Могу ли я сделать несколько депозитов?</b><br>
Да, но сумма каждого депозита не должна превышать <b><?=$maxdep?> <?=$m_curr?></b>. 
<br>
<br>
<b>10) Через какое время мой депозит появится в списке? </b><br>
Новые депозиты появляются в списке автоматически, но иногда этот процесс может занять до 15 минут. 
<br>
<br>
<b>11) Что нужно сделать, чтобы получить выплату?</b><br>
Выплаты производятся абсолютно автоматически через <b><?=$timeprofit?></b> после открытия депозита. 
<br>
<br>
<b>12) Почему мой депозит пропал из списка?</b><br>
Вероятно в вашем браузере стерлись cookies. Пройдите авторизацию еще раз и перейдите в раздел "Мои депозиты".
<br>
<br>
<b>13) Сколько я получу с приглашенных людей?</b><br>
Вы получите <b><?=$refpercent?>%</b> от пополнения Ваших рефералов <b>сразу на ваш кошелёк!</b>
<br>
<br>
<b>14) Можно ли открывать несколько аккаунтов?</b><br>
В системе <?=$sitename?> КАТЕГОРИЧЕСКИ запрещается создание реферальных цепочек одним пользователем под разными аккаунтами, с одного устройства и IP адреса. Запрещается посещение чужих аккаунтов (даже при согласии владельца) т.к. на платформе установлено передовое аналитическое программное обеспечение, которое отслеживает подобные действия и автоматически удаляет аккаунт нарушителя без возможности дальнейшего его восстановления.
<br>
<br>
<b>15) Как я могу с Вами связаться</b><br>
Если у Вас возникли дополнительные вопросы - перейдите в раздел Поддержка.
</div>
</div>
</div>

</div>
</div>
</div>

<?}else{?>
<script type="text/javascript">
window.location.href = '/my_newdep';
</script>
<?}?>

<?/*-------------------*//*
Web-site: https://ed-script.pro
*//*-------------------*/?>