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
<h2 style="color: #fff;">Техническая поддержка</h2>
</div>
<div class="container">
<center><p class="text-light" style="position: relative;z-index: 99;font-size: 120%;">Для решения проблем, по-поводу сотрудничества и других вопросов. 
</p></center>
</div><br>
</div><br>

<div class="container" style="min-height: 500px;">
<div class="row">
<div class="col-md-6">
<div class="card bg-light">
<div class="card-header">E-mail поддержка</div>
<div class="card-body">Наша почта -  <b><?=$adminmail?></b> Рекомендуем сообщить свой логин (payeer кошелек) или ID в проекте. Максимально сформулируйте ваш запрос в поддержку это облегчит решение вашей проблемы.
</div>
</div>
</div>

<div class="col-md-6">
<div class="card bg-light">

<div class="card-header">Мы Вконтакте</div>
<div class="card-body" style="padding: 1.1rem 1.25rem 0.25rem;">Наша группа ВК -  <b>
<a href="<?=$vkgrup?>">Посетить <span class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
</span></a></b>
</div>

<div class="card-body" style="padding: 0.10rem 1.25rem;">Мы в Телеграме -  <b>
<a href="<?=$telega?>">Посетить <span class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-send fa-stack-1x fa-inverse"></i>
</span></a></b>
</div>
<br>
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