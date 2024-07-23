<?if($id == (1)){?>
<?php 
session_start;
if(!isset($_SESSION['access']) || $_SESSION['access']!=true){
header("location:/?page=login_adm");}
else{ ?>

<body class="theme-purple">
<div class="page-loader-wrapper">
<div class="loader">
<div class="preloader">
<div class="spinner-layer pl-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
<p style="color: #000;">Загрузка страницы...</p>
</div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar">
<div class="col-12">
<div class="navbar-header">            
<a href="javascript:void(0);" class="bars"></a>
<a class="navbar-brand" href="/">Админ панель</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li><a href="/exit" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i> Выход</a></li>
</ul>
</div>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
<!-- User Info -->
<div class="user-info">
<div class="image"> <img src="assets/images/crown.png" width="64" height="64" alt="User" /> </div>
<div class="info-container">
<div class="name" data-toggle="dropdown">Ваш логин <?=$user?></div>
<div class="email">Здравствуй Админ!</div>
</div>
</div>
<!-- #User Info --> 

<!-- Menu -->
<div class="menu">
<ul class="list">
<li class="header">НАВИГАЦИЯ</li>
<li> <a href="/?page=admin_deposits"><span><i class="fas fa-business-time"></i> Депозиты</span> </a></li>
<li> <a href="/?page=admin_withdrawal"><span><i class="fas fa-hand-holding-usd"></i> Выплаты</span> </a></li>
<li> <a href="/?page=admin_partner"><span><i class="fas fa-users"></i> Рефоводы</span> </a> </li>
<li> <a href="/?page=admin_users"><span><i class="fas fa-theater-masks"></i> Участники</span> </a> </li>
<li> <a href="/?page=admin_nakrutka"><span><i class="fas fa-recycle"></i> Накрутка</span> </a> </li>
<li> <a href="/?page=admin_otheraction"><span><i class="fas fa-cogs"></i> Другие действия</span> </a> </li>
<li> <a href="/?page=admin_log"><span><i class="fas fa-file-medical-alt"></i> Логи</span> </a> </li>
<li> <a href="/?page=admin_clean"><span><i class="fab fa-cloudscale"></i> Очистка базы данных</span> </a> </li>
</ul>
</div>
<!-- #Menu --> 
</aside>

<!-- Main Content -->
<section class="content home">
<div class="container-fluid">
<div class="block-header">
<div class="row">           
</div>
</div>
<div class="row clearfix">
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="card widget-stat">
<div class="body">
<div class="media">

<div class="media-text">
<span class="title">Инвестировано</span>
<span class="value"><?=$depmoney?> <?=$m_curr?></span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="card widget-stat">
<div class="body">
<div class="media">

<div class="media-text">
<span class="title">Участников</span>
<span class="value"><?=$uzerov?> ЧЕЛ.</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="card widget-stat">
<div class="body">
<div class="media">

<div class="media-text">
<span class="title">Выведено всего</span>
<span class="value"><?=$budget_adm?> <?=$m_curr?></span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="card widget-stat">
<div class="body">
<div class="media">

<div class="media-text">
<span class="title">Партнерских</span>
<span class="value"><?=$refk?> <?=$m_curr?></span>
</div>
</div>
</div>
</div>
</div>
</div>        

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="body table-responsive">
<center>
<p><b>Для открытия вклада участнику, просто введите ID участника и нужную сумму</b></p>
<?if (isset($_POST['fek_id']) && isset($_POST['fek_sum']) && isset($_POST['fek_tim'])){

$db->query(" INSERT INTO deposits (`id`, `userid`, `curatorid`, `summa`, `unixtime`, `status`) VALUES (NULL, '".$_POST['fek_id']."', '1', '".$_POST['fek_sum']."', '".$_POST['fek_tim']."', '0') ");
header("Location: /?page=admin_deposits");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<input type="text" name="fek_id" placeholder="ID участника">
<input type="text" name="fek_sum" placeholder="Сумма вклада">
<input type="hidden" name="fek_tim" value="<?=time();?>">
<button type="submit" name="submit">Открыть вклад</button>
</form>
</center>

</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="body table-responsive">
<center>
<p><b>Для смены суммы вклада участнику, просто введите ID депозита и нужную сумму</b></p>
<?if (isset($_POST['dep_id']) && isset($_POST['new_vklad'])){
$db->query("UPDATE deposits SET summa='".$_POST['new_vklad']."' WHERE id='".$_POST['dep_id']."' ");
header("Location: /?page=admin_deposits");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<input type="text" name="dep_id" placeholder="ID депозита">
<input type="text" name="new_vklad" placeholder="Сумма вклада">
<button type="submit" name="submit">Изменить вклад</button>
</form>
</center>

</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="body table-responsive">
<center>
<p><b>Для удаления депозита, просто введите ID депозита</b></p>
<?if (isset($_POST['del_dep'])){
$db->query("DELETE FROM deposits WHERE id='".$_POST['del_dep']."' ");
header("Location: /?page=admin_deposits");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<input type="text" name="del_dep" placeholder="Введите ID депозита">
<button type="submit" name="submit">Удалить</button>
</form>
</center>

</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header"><h2>Здесь отображаются все работающие депозиты</h2></div>
<div class="body table-responsive">
<table class="table table-striped table-borderless m-b-5">
<thead>
<tr>
<th style="width:16%;">ID Депозита</th>
<th class="width:16%">Кошелек</th>
<th style="width:16%;">Депозит</th>
<th style="width:16%;">Выплачено</th>
<th style="width:16%;">Осталось</th>
<th style="width:16%;">Статус</th>
</tr>
</thead>
<tbody class="no-border-x">
<?
$checkdeps=$db->getOne("SELECT id FROM `deposits` WHERE fake='0' LIMIT 1");
if($checkdeps>0){
$depositsrow=$db->query("SELECT * FROM `deposits` WHERE fake='0' ORDER BY id DESC LIMIT 200");
while($deposits=$db->fetch($depositsrow)){?>
<?$wallet=$db->getOne("SELECT wallet FROM `ss_users` WHERE id=?i",$deposits['userid']);?>
<tr>
<td>ID > <?=$deposits['id']?></td>
<td><?=$wallet?></td>
<td class="number"><?=$deposits['summa']?> <?=$m_curr?></td>
<?
$seconds = time()-$deposits['unixtime'];
 if($deposits['status']==0){
$der=(($deposits['summa']+($deposits['summa']/100*$percent_u))-$deposits['psumma']);
}else{
$der='0.00';
}
if($seconds>(3600*$depperiod)){
    if($deposits['status']==0){
	$deptime="Выплачивается";}else{
	$deptime="Выплачено";
	}
}else{


$hours = floor($seconds/3600);
$seconds = $seconds-($hours*3600);
$minutes = floor($seconds/60);
$seconds = $seconds-($minutes*60);
$seconds = floor($seconds);



$h=$depperiod-($hours+1);
if($h<10){$h='0'.$h;}
$m=60-($minutes+1);
if($m<10){$m='0'.$m;}
$s=60-($seconds+1);
if($s<10){$s='0'.$s;}
	$deptime=$h.":".$m.":".$s;
}
?>
<td><?=$deposits['psumma']?> <?=$m_curr?></td>
<td><?=$der?> <?=$m_curr?></td>
<td <? if($deposits['status']==0){ ?>class="countdown"<?}?> style="text-align:center;"><?=$deptime?></td>
</tr>
<?}}?>
</tbody>
</table>
</div>
</div>
</div>
</div>    

<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="body">
<p class="copy m-b-0">Этот скрипт принадлежит Стасу Данилову. <a href="https://vk.com/id457351861" target="_blank"><font color="red">Посетить его страницу Вконтакте</font></a></p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>

<?}}else{?>

<head>
<script type="text/javascript">
window.location.href = '/';
</script>
</head>

<?}?>