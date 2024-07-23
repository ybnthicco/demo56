<?if($id > (1)){?>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header">
<h2>Отзывы о нашей компании</h2>
<p style="float: left;margin-bottom: 0px;margin-top: 15px;font-weight: 500;font-size: 13px;padding-left: 5px;">
Если Вы получаете выплаты с нашего проекта <b><?=$sitename?></b> то мы будем вам очень благодарны за любой оставленный отзыв на ресурсах представленных ниже.
</p>
</div>
<div class="body table-responsive">

<center>
<a href="<?=$vkgrup?>" target="_blank" style="border:  1px solid;padding:  10px;border-radius: 25px;"><i class="fab fa-vk"></i> В группе Вконтакте</a><br><br><br>
<a href="<?=$telega?>" target="_blank" style="border:  1px solid;padding:  10px;border-radius: 25px;"><i class="fab fa-telegram-plane"></i> В Телеграм чате</a><br><br><br>
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