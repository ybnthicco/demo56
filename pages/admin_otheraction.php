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
<div class="header"><h2>Возможные действия с  проектом</h2></div>
<div class="body table-responsive">
<center>

<p><b>Удаление участников из проекта!<br>ВАЖНО!!! Если у участника есть работающий депозит, то нужно сначала удалить его депозит.</b></p>

<?if (isset($_POST['del_user'])){
$db->query("DELETE FROM ss_users WHERE wallet='".$_POST['del_user']."' ");
header("Location: /?page=admin_otheraction");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">Для удаления участника, просто введите его номер кошелька PAYEER</p>
<input type="text" name="del_user" placeholder="Введите номер кошелька">
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
<div class="body table-responsive">
<center>
<p><b>Смена куратора участнику!</b></p>

<?if (isset($_POST['user_id']) && isset($_POST['new_curator'])){
$db->query("UPDATE ss_users SET curator='".$_POST['new_curator']."' WHERE id='".$_POST['user_id']."' ");
header("Location: /?page=admin_otheraction");
if ($db) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">Для смены куратора, просто введите ID участника и ID нужного куратора</p>
<input type="text" name="user_id" placeholder="ID участника">
<input type="text" name="new_curator" placeholder="ID куратора">
<button type="submit" name="submit">Сменить</button>
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
<p><b>Установка даты старта проекта!</b></p>

<?if (isset($_POST['data_start'])){
$db->query("UPDATE more SET start='".$_POST['data_start']."' ");
header("Location: /?page=admin_otheraction");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">На данный момент установлена - <font color="red"><b><?=$data_starta?></b></font></p>
<input type="text" name="data_start" placeholder="Дата старта">
<button type="submit" name="submit">Установить</button>
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
<p><b>Установка почты администратора!</b></p>

<?if (isset($_POST['mail'])){
$db->query("UPDATE more SET mail='".$_POST['mail']."' ");
header("Location: /?page=admin_otheraction");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">На данный момент установлена - <font color="red"><b><?=$adminmail?></b></font></p>
<input type="text" name="mail" placeholder="Почта проекта">
<button type="submit" name="submit">Установить</button>
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
<p><b>Установка ссылки на Вконтакте!</b></p>

<?if (isset($_POST['vk'])){
$db->query("UPDATE more SET vk='".$_POST['vk']."' ");
header("Location: /?page=admin_otheraction");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">На данный момент установлена - <font color="red"><b><?=$vkgrup?></b></font></p>
<input type="text" name="vk" placeholder="Ссылка на Вконтакте">
<button type="submit" name="submit">Установить</button>
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
<p><b>Установка ссылки на Телеграм!</b></p>

<?if (isset($_POST['telega'])){
$db->query("UPDATE more SET telega='".$_POST['telega']."' ");
header("Location: /?page=admin_otheraction");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<p style="text-align: center;">На данный момент установлена - <font color="red"><b><?=$telega?></b></font></p>
<input type="text" name="telega" placeholder="Ссылка на Телеграм">
<button type="submit" name="submit">Установить</button>
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