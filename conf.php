<?
$ipt = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : getenv('REMOTE_ADDR')); 

if (($_SESSION['adm_en']=="1")&&($_SESSION['adm']>0)){$enadm=1;}

$admuser=strtolower("admin");
$admpas=strtolower("331210");

$databasename = "boewic_origami";
$databaseuser = "boewic_origami";
$databasepasswd = "next2015next2015";


$sqllocal = "localhost";//mysql-17.smartape.ru

include "bd.php"

/*
$hostname='http://127.0.0.1/';
$hostname2='http://www.my-origami.ru/';
$hostname3='http://127.0.0.1/remzona23.ru';
*/

?>