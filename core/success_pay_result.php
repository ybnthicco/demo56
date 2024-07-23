<?php 
if(!defined('SUCCESSPAY')){
echo ('Выявлена попытка взлома!');
exit();
}

$referer=$db->getOne("SELECT curator FROM `ss_users` WHERE id=?i", $id);
$db->query("INSERT INTO deposits (userid, curatorid, summa, unixtime) VALUES(?i,?i,?s,?s)", $id, $referer, $sum, time());	

?>
<?/*-------------------*//*
Web-site: https://ed-script.pro
*//*-------------------*/?>