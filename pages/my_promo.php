<?if($id > (1)){?>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header">
<h2>Рекламные материалы</h2>
<p style="float: left;margin-bottom: 0px;margin-top: 15px;font-weight: 500;font-size: 13px;padding-left: 5px;">
Распространяйте свою партнерскую ссылку по форумам, соц. сетям, буксах и на других рекламных ресурсах.<br>Мы будем Вам платить <b><?=$refpercent?>%</b> от каждого нового депозита сделанного вашим рефералом.
</p>
</div>
<div class="body table-responsive">

<center>

<p>Партнерская ссылка:</p> <input value="<?=$ssl_connect?>://<?=$host?>/?ref=<?=$id?>" onClick="select()" size="30" type="text">
<h3>Баннер 468x60px</h3>
<img src='<?=$ssl_connect?>://<?=$host?><?=$banner_468?>' /><br><br>
<textarea onClick="select()" size='10' style="background: rgb(243, 247, 248);color: #424242;padding: 3px;border-radius: 5px;border: 1px solid #fff;min-width: 420px;height: 70px;"><a href="<?=$ssl_connect?>://<?=$host?>/?ref=<?=$id?>" target="_blank"><img src="<?=$ssl_connect?>://<?=$host?><?=$banner_468?>" /></a></textarea>
<br>
<!--
<h3>Баннер 728x90px</h3>
<img src='<?=$ssl_connect?>://<?=$host?><?=$banner_728?>' /><br><br>
<textarea onClick="select()" size='10' style="background: rgb(243, 247, 248);color: #424242;padding: 3px;border-radius: 5px;border: 1px solid #fff;min-width: 420px;height: 70px;"><a href="<?=$ssl_connect?>://<?=$host?>/?ref=<?=$id?>" target="_blank"><img src="<?=$ssl_connect?>://<?=$host?><?=$banner_728?>" /></a></textarea>
-->
<br>
<p>Не знаете где рекламировать свою партнерскую ссылку? Жми кнопку ниже!</p>
<a href="https://goo.gl/XjE1Tq" target="_blank"><button>РЕКЛАМНЫЕ ПЛОЩАДКИ ДЛЯ ПРИВЛЕЧЕНИЯ РЕФЕРАЛОВ</button></a>
</center>

</div>
</div>
</div>
</div>

<?}else{?>

<?if($id == (1)){?>
<head>
<script type="text/javascript">
window.location.href = '/?page=admin_deposits';
</script>
</head>

<?}else{?>

<head>
<script type="text/javascript">
window.location.href = '/';
</script>
</head>

<?}}?>