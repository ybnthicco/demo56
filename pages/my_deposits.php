<?if($id > (1)){?>

<div class="row clearfix">
<div class="col-sm-12 col-md-12">
<div class="card" >
<div class="header">
<h2>Ваши депозиты</h2>
</div>
<div class="body table-responsive">
<table class="table table-striped table-borderless m-b-5">
<thead>
<tr>
<th style="width:20%;">Кошелек</th>
<th class="width:20%">Сумма</th>
<th style="width:20%;">Выплачено</th>
<th style="width:20%;">Осталось</th>
<th style="width:20%;">Статус</th>
</tr>
</thead>
<tbody class="no-border-x">
<?
$checkdeps=$db->getOne("SELECT id FROM `deposits` WHERE userid=?i and fake='0' LIMIT 1",$id);
if($checkdeps>0){
$depositsrow=$db->query("SELECT * FROM `deposits` WHERE userid=?i and fake='0' ORDER BY id DESC LIMIT 50",$id);
while($deposits=$db->fetch($depositsrow)){?>
<?$wallet=$db->getOne("SELECT wallet FROM `ss_users` WHERE id=?i",$deposits['userid']);?>
<tr>
<td><?=$wallet?></td>
<td class="number"><?=$deposits['summa']?> <?=$m_curr?></td>
<?
$seconds = time()-$deposits['unixtime'];
 if($deposits['status']==0){
$der=(($deposits['summa']+($deposits['summa']/100*$percent_u))-$deposits['psumma']);
}else{
$der='0.00';
}
if($seconds>(3600*$depperiod)){
    if($deposits['status']==0){
	$deptime="Выплачивается";}else{
	$deptime="Выплачено";
	}
}else{


$hours = floor($seconds/3600);
$seconds = $seconds-($hours*3600);
$minutes = floor($seconds/60);
$seconds = $seconds-($minutes*60);
$seconds = floor($seconds);



$h=$depperiod-($hours+1);
if($h<10){$h='0'.$h;}
$m=60-($minutes+1);
if($m<10){$m='0'.$m;}
$s=60-($seconds+1);
if($s<10){$s='0'.$s;}
	$deptime=$h.":".$m.":".$s;
}
?>
<td><?=$deposits['psumma']?> <?=$m_curr?></td>
<td><?=$der?> <?=$m_curr?></td>
<td <? if($deposits['status']==0){ ?>class="countdown"<?}?> style="text-align:center;"><?=$deptime?></td>
</tr>
<?}}?>
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