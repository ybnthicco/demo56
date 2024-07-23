<?php if(!defined('SCRIPT_BY_SIRGOFFAN')){
echo ('Выявлена попытка взлома!');
exit();
}
?>

<?if(empty($id)){?>

<?if(!empty($_error)){?><div class="stat" style="position: fixed;display: inline-block;font-size: 16px;color: rgb(250, 250, 250);z-index: 10;right: 17px;top: 100px;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 3px;border: 1px solid rgba(255, 255, 255, 0);width: 300px;background: rgba(4,35,50,0.45);height: 85px;border-radius: 4px;line-height: 3.42857143;"><center><div style="color: rgb(255, 255, 255); font-size: 16px; height: 30px; padding: 0px;">Сообщение</div><font><?=$_error?></font></div></center><?}?>
<?if(!empty($_success)){?><div style="position: fixed;display: inline-block;font-size: 16px;color: rgb(250, 250, 250);z-index: 10;right: 17px;top: 100px;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 3px;border: 1px solid rgba(255, 255, 255, 0);width: 300px;background: rgba(4,35,50,0.45);height: 85px;border-radius: 4px;line-height: 3.42857143;"><center><div style="color: rgb(255, 255, 255); font-size: 16px; height: 30px; padding: 0px;">Сообщение</div><font><?=$_success?></font></div></center><?}?>

<footer class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-8 col-xs-6">
© <?php echo date('Y'); ?> - <a href="/" style="text-transform: uppercase;"><?=$host?></a> - Все права защищены.
<br>
<div class="col-md-12">
<ul style="padding-left: 0;margin-bottom: 0;list-style: none;">
<li style="float: left;margin-left: 5px;"><a href="/">Главная</a></li>
<li style="float: left;margin-left: 5px;"><a href="/rules">Правила</a></li>
<li style="float: left;margin-left: 5px;"><a href="/faq">F.A.Q</a></li>
<li style="float: left;margin-left: 5px;"><a href="/contacts">Поддержка</a></li>
<li style="float: left;margin-left: 5px;"><a href="<?=$vkgrup?>" target="_blank">Вконтакте</a></li>
<li style="float: left;margin-left: 5px;"><a href="<?=$telega?>" target="_blank">Телеграм</a></li>
</ul>
</div>
</div>
<div class="col-12 col-md-4 col-xs-6">
<style>
.cntr img{margin: 2px;opacity:0.7;}
.cntr img:hover{opacity:1;}
</style>
<center class="cntr">
<center><a href="https://php-scripts.ru" target="_blank"><img src="https://php-scripts.ru/wp-content/uploads/2019/02/quote-logo.png" width="72px" height="32px" alt="Скрипты хайпов" title="скачать"></a></center>
</center>
</div>
</div>
</div>
</footer>

</body>
</html>

<?}else{?>
<?if($id > (1)){?>

<?if(!empty($_error)){?><div class="stat" style="position: fixed;display: inline-block;font-size: 16px;color: rgb(250, 250, 250);z-index: 10;right: 17px;top: 100px;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 3px;border: 1px solid rgba(255, 255, 255, 0);width: 300px;background: rgba(4,35,50,0.45);height: 85px;border-radius: 4px;line-height: 3.42857143;"><center><div style="color: rgb(255, 255, 255); font-size: 16px; height: 30px; padding: 0px;">Сообщение</div><font><?=$_error?></font></div></center><?}?>
<?if(!empty($_success)){?><div style="position: fixed;display: inline-block;font-size: 16px;color: rgb(250, 250, 250);z-index: 10;right: 17px;top: 100px;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 3px;border: 1px solid rgba(255, 255, 255, 0);width: 300px;background: rgba(4,35,50,0.45);height: 85px;border-radius: 4px;line-height: 3.42857143;"><center><div style="color: rgb(255, 255, 255); font-size: 16px; height: 30px; padding: 0px;">Сообщение</div><font><?=$_success?></font></div></center><?}?>

<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="body">
<p class="copy m-b-0">Инвестиционная компания <b><?=$sitename?></b>. Все права защищены!</p>
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

<?}else{?>
<?if($id == (1)){?>

<?if(!empty($_error)){?><div class="stat" style="position: fixed;display: inline-block;font-size: 16px;color: rgb(250, 250, 250);z-index: 10;right: 17px;top: 100px;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 3px;border: 1px solid rgba(255, 255, 255, 0);width: 300px;background: rgba(4,35,50,0.45);height: 85px;border-radius: 4px;line-height: 3.42857143;"><center><div style="color: rgb(255, 255, 255); font-size: 16px; height: 30px; padding: 0px;">Сообщение</div><font><?=$_error?></font></div></center><?}?>
<?if(!empty($_success)){?><div style="position: fixed;display: inline-block;font-size: 16px;color: rgb(250, 250, 250);z-index: 10;right: 17px;top: 100px;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 3px;border: 1px solid rgba(255, 255, 255, 0);width: 300px;background: rgba(4,35,50,0.45);height: 85px;border-radius: 4px;line-height: 3.42857143;"><center><div style="color: rgb(255, 255, 255); font-size: 16px; height: 30px; padding: 0px;">Сообщение</div><font><?=$_success?></font></div></center><?}?>



<?}}}?>

