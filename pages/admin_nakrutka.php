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
<div class="header"><h2>Накрутка статистики</h2></div>

<div class="body table-responsive">
<!--
<center>
<p><b>Внимание!!! Установка суммы накрутки не добавляется к уже имеющейся накрученной сумме, а лишь выводит общую сумму!<br>
Данная накрутка актуальна для проектов НЕ имеющих столбиков финансовых операций "новые вклады и выплаты"</b></p>

<?if (isset($_POST['plus_dep'])){
$db->query("UPDATE more SET plus='".$_POST['plus_dep']."' ");
header("Location: /?page=admin_nakrutka");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">Введите сумму которую хотите добавить к сумме вкладов</p>
<input type="text" name="plus_dep" placeholder="Сумма к депам">
<button type="submit" name="submit">Добавить</button>
</form>

<br>

<?if (isset($_POST['minus_dep'])){
$db->query("UPDATE more SET minus='".$_POST['minus_dep']."' ");
header("Location: /?page=admin_nakrutka");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">Введите сумму которую хотите добавить к сумме выплат</p>
<input type="text" name="minus_dep" placeholder="Сумма к выплатам">
<button type="submit" name="submit">Добавить</button>
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
-->
<center>
<p><b>Накрутка пополнений и выплат!<br>
У Вас 19 зарегистрированных фейков с id от 2 до 20. Ими можно имитировать пополнения и выплаты.</b></p>
<?if (isset($_POST['popolneniya_id']) && isset($_POST['popolneniya_sum']) && isset($_POST['popolneniya_tim'])){

$db->query(" INSERT INTO pay (`id`, `userid`, `type`, `data`, `summa`) VALUES (NULL, '".$_POST['popolneniya_id']."', 'Пополнение баланса', '".$_POST['popolneniya_tim']."', '".$_POST['popolneniya_sum']."') ");
header("Location: /?page=admin_nakrutka");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">Здесь можно имитировать пополнения.</p>
<input type="text" name="popolneniya_id" placeholder="ID фейка">
<input type="text" name="popolneniya_sum" placeholder="Сумма пополнения">
<input type="hidden" name="popolneniya_tim" value="<?=time();?>">
<button type="submit" name="submit">Создать выплату</button>
</form>

<br>

<?if (isset($_POST['viplata_id']) && isset($_POST['viplata_sum']) && isset($_POST['viplata_tim'])){

$db->query(" INSERT INTO pay (`id`, `userid`, `type`, `data`, `summa`) VALUES (NULL, '".$_POST['viplata_id']."', 'Выплата по депозиту', '".$_POST['viplata_tim']."', '".$_POST['viplata_sum']."') ");
header("Location: /?page=admin_nakrutka");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">Здесь можно имитировать выплаты.</p>
<input type="text" name="viplata_id" placeholder="ID фейка">
<input type="text" name="viplata_sum" placeholder="Сумма выплаты">
<input type="hidden" name="viplata_tim" value="<?=time();?>">
<button type="submit" name="submit">Создать выплату</button>
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
<p><font color="red">Внимание!</font> Установка количества фейков не добавляется к уже имеющейся накрутке, а лишь выводит общее число!</p>

<?if (isset($_POST['feikuser'])){
$db->query("UPDATE more SET feikuser='".$_POST['feikuser']."' ");
header("Location: /?page=admin_nakrutka");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">На данный момент установлена - <font color="red"><?=$feyk?> фейков</font></p>
<input type="text" name="feikuser" placeholder="Количество фейков">
<button type="submit" name="submit">Добавить</button>
</form>
</center>

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