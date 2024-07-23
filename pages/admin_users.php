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
<div class="header">
<h2>Здесь отображаются регистрации новых участников</h2>
</div>
<div class="body table-responsive">
<table class="table table-striped table-borderless m-b-5">
<thead>
<tr>
<th style="width:5%;">Номер</th>
<th class="width:15%">Кошелек</th>
<th style="width:5%;">Куратор</th>
<th style="width:10%;">ip адрес</th>
<th style="width:45%;">Ресурс</th>
<th style="width:20%;">Регистрация</th>
</tr>
</thead>
<tbody class="no-border-x">
<? 
$depositsrow=$db->query("SELECT * FROM `ss_users` ORDER BY `ss_users`.`id` DESC limit 200");
 $i=1; 
while($deposits=$db->fetch($depositsrow)){?>
<tr>
<td><?=$deposits['id']?></td>
<td><?=$deposits['wallet']?></td>
<td><?=$deposits['curator']?></td>
<td><?=$deposits['ip']?></td>
<td><?=$deposits['came']?></td>
<td><b><?=date('d.m.Y H:i',$deposits['reg_unix'])?></b></td>
</tr>
<?}?>
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