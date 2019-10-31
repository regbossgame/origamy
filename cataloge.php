<?
$mon=$_GET['menu'];

$sql0="SELECT * FROM category WHERE typ LIKE '".$nt[$i]."'";// WHERE str LIKE '$cat'";
$result0 = @mysql_query("$sql0",$db);
$k0=@mysql_num_rows($result0);

echo $sql0." - ".$k0."<br>";


for($i0=0;$i0<$k0;$i0++){
$name0=@mysql_result($result0, $i0,'name');
//$oid0=@mysql_result($result0, $i0,'oid');
if ($mon!='1'){$txt.= "<div class='namraz'><h1 class='cat1'><br>".$name0."</h1></div>";}

$sql1="SELECT * FROM menu WHERE cat LIKE '".$name0."' ORDER BY zen";// WHERE str LIKE '$cat'";
$result1 = @mysql_query("$sql1",$db);
$k1=@mysql_num_rows($result1);

for($j0=0;$j0<$k1;$j0++){
$name0=@mysql_result($result1, $j0,'name');
$img0=@mysql_result($result1, $j0,'id');
$sostav0=@mysql_result($result1, $j0,'sostav');
$gram0=@mysql_result($result1, $j0,'gram');
$kol0=@mysql_result($result1, $j0,'kol');
$zen0=@mysql_result($result1, $j0,'zen');
$id0=@mysql_result($result1, $j0,'id');

if (!file_exists('tov/'.$img0.'.jpg')){$img0="0";}
$img0='tov/'.$img0.'.jpg';
$txt.="<div class='tov1'>
<h3 style='margin-left:10px;'>".$name0."</h3>
<div class='tor'>
<div style='height:165px;'>";

if ($sostav0!=""){$txt.="<p class='comm'><u>Состав</u>: $sostav0</p>";}

$txt.="<p class='comm'><u>Вес</u>: ".$gram0." г. / ".$kol0." шт.</p>
</div>
<div class='zens'>".$zen0."<span class='spanr'>р.</span></div>
</div>
<div class='tol'><img src='$img0' style='width:270px;height:225px;border:0px;'/></div>

</div>";
}

}

?>