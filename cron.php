<?
define ("SCRIPT_BY_SIRGOFFAN" , dirname(__FILE__) );
if($_GET['key']=='kdUhdf8hgd8e90Q'){
require_once($_SERVER['DOCUMENT_ROOT']."/core/ini.php");

$mintime=time()-(60*60*$depperiod);
$ocherr=$db->getRow("SELECT * FROM deposits WHERE status='0' AND unixtime<?s ORDER BY id ASC LIMIT 1",$mintime);
if($ocherr['id']>0){
$wallet=$db->getOne("SELECT wallet FROM ss_users WHERE id=?i", $ocherr['userid']);
$user_login=$db->getOne("SELECT user FROM ss_users WHERE id=?i",$ocherr['userid']);
$psumma=($ocherr['summa']+($ocherr['summa']/100*$percent_u))/($timex_dep/$depperiod);
if(whithdraw('Автовыплата с проекта '.$sitename.'', $ocherr['userid'], $wallet, $psumma, $ocherr['id'],$ocherr['kol'] )==true){
addUserStat($ocherr['userid'], "Выплата по депозиту", "".$psumma."");
addpay($ocherr['userid'], "Выплата по депозиту", $psumma);
?>
<?}}}?>