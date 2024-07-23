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
<div class="header"><h2>Очистка базы данных</h2></div>

<div class="body table-responsive">

<center>
<p><b>Внимание!!! Данное действие приведет к частичной очистке БД.<br>
После очистки, зарегистрированные участники останутся на своих местах!</b></p><br>
<?if($_POST['do']=='cleanbd'){
$db->query("TRUNCATE `batches`");
$db->query("TRUNCATE `deposits`");
$db->query("TRUNCATE `log`");
$db->query("TRUNCATE `pay`");
$db->query("TRUNCATE `userstat`");
$db->query("UPDATE more SET plus='0.00'");
$db->query("UPDATE more SET minus='0.00'");
$db->query("UPDATE more SET feikuser='0'");
$db->query("UPDATE ss_users set cursum = '0.00'");
$db->query("UPDATE ss_users set psum = '0.00'");
header("Location: /?page=admin_clean");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<input type="hidden" name="do" value="cleanbd">
<button type="submit" name="submit">Очистить базу данных</button>
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
<p><b>Внимание!!! Данное действие приведет к полной очистке БД.<br>
После очистки, зарегистрируйте кошелек админа первым на проекте!<br>
ВАЖНО!!! Так же будут удалены все ваши фейки для имитаций пополнений и выплат.</b></p><br>
<?if($_POST['do']=='cleanbdfull'){
$db->query("TRUNCATE `batches`");
$db->query("TRUNCATE `ss_users`");
$db->query("TRUNCATE `deposits`");
$db->query("TRUNCATE `log`");
$db->query("TRUNCATE `pay`");
$db->query("TRUNCATE `userstat`");
$db->query("UPDATE more SET plus='0.00'");
$db->query("UPDATE more SET minus='0.00'");
header("Location: /exit");
if ($db = 'true') {
        echo "Данные успешно обновлены.";
    } else {
        echo "Произошла ошибка.";
    }
}
?>
<form action="" method="POST">
<input type="hidden" name="do" value="cleanbdfull">
<button type="submit" name="submit">Очистить базу данных</button>
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