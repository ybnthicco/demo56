<?if($id > (1)){?>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header">
<h2>Связь с администрацией проекта</h2>
</div>
<div class="body table-responsive">
<p style="font-weight: normal;">
Наша техническая поддержка работает 24/7. Мы готовы вам ответить на все интересующие вас вопросы.<br>
Для того чтобы мы вам отправили более развернутый ответ и как можно быстрее, Вам необходимо как можно подробнее описать вашу проблему или ваш вопрос.<br>
Регламент обработки сообщений 24 часа.
</p>
<center>
<a href="mailto:<?=$adminmail?>" target="_blank" style="border:  1px solid;padding:  10px;border-radius: 25px;"><i class="fas fa-at"></i> E-mail: <?=$adminmail?></a><br><br><br>
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