<?


include "func.php";

include "conf.php";
//include "bd.php";


//$sql="DEFAULT CHARACTER SET cp1251 COLLATE cp1251_general_ci";
//$result = @mysql_query("$sql",$db);
//echo "CHAR_SET=".$result."<br>";
	
$bd="category";

$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);

$sql = "CREATE TABLE ".$bd." (
	name varchar(50) not null,
	typ int not null

)";



   $result = @mysql_query("$sql",$db);
	echo $bd."_rez=".$result."<br>";


$type=$bd;

include "reader.php";

//echo $type;

for($i=0;$i<count($conf[$type]);$i++){
//if ($conf[$type][$i]['oid']==''){$conf[$type][$i]['oid']=trans($conf[$type][$i]['name']);}
echo $conf[$type][$i]['name'];//."=>(".$conf[$type][$i]['oid'].")";
$sql = "INSERT INTO $bd (name,typ) VALUES('".$conf[$type][$i]['name']."','".$conf[$type][$i]['typ']."')";

$result = @mysql_query($sql,$db);
echo $sql." | R=".($result*1)."<br>";
}

	
	
$bd="products";


$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);

$sql = "CREATE TABLE ".$bd." (
	id int not null,
	name varchar(130) not null,
	zen_g float(6,2) not null,
	zen float(6,2) not null,
	ves float(6,2) not null,
	oth float(6,2) not null
)";



   $result = @mysql_query("$sql",$db);
	echo $bd."_rez=".$result."<br>";


$type=$bd;

include "reader.php";

//echo $type;
$te=array();
$i=0;
$te[$i]="id";
$i++;
$te[$i]="name";
$i++;
$te[$i]="zen_g";
$i++;
$te[$i]="zen";
$i++;
$te[$i]="ves";
$i++;
$te[$i]="oth";

$j1=$i+1;

//print_r($conf);
//print(count($conf[$type]));


for($i=0;$i<count($conf[$type]);$i++){
$t1=$te[0];
$t2="'".$conf[$type][$i][$te[0]]."'";
for($j=1;$j<$j1;$j++){
$t1.=",".$te[$j];
$conf[$type][$i][$te[$j]]=str_replace(',','.',$conf[$type][$i][$te[$j]]);
$t2.=",'".$conf[$type][$i][$te[$j]]."'";
}

//echo $conf[$type][$i]['name']."=>(".$conf[$type][$i]['cat'].")";
$sql = "INSERT INTO $bd (".$t1.") VALUES(".$t2.")";

$result = @mysql_query($sql,$db);
echo $sql." | R=".($result*1)."<br>";
}


$bd="menu";

$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);

$sql = "CREATE TABLE ".$bd." (
	id int not null,
	cat varchar(50) not null,
	name varchar(130) not null,
	zen int not null,
	rekom float(6,2) not null,
	sebe float(6,2) not null,
	sostav varchar(230) not null,
	tehno varchar(230) not null,
	gram int not null,
	kol int not null
)";



   $result = @mysql_query("$sql",$db);
	echo $bd."_rez=".$result."<br>";


$type=$bd;

include "reader.php";

//echo $type;
$te=array();
$i=0;
$te[$i]="id";
$i++;
$te[$i]="cat";
$i++;
$te[$i]="name";
$i++;
$te[$i]="zen";
$i++;
$te[$i]="rekom";
$i++;
$te[$i]="sebe";
$i++;
$te[$i]="sostav";
$i++;
$te[$i]="tehno";
$i++;
$te[$i]="gram";
$i++;
$te[$i]="kol";
/*$i++;
$te[$i]="reit";
$i++;
$te[$i]="str";
*/
$j1=$i+1;

for($i=0;$i<count($conf[$type]);$i++){
$g=get_gram($conf[$type][$i]['tehno']);
if (($g*1)!=0){$conf[$type][$i]['gram']=$g;}
//$conf[$type][$i]['gram']=$g;
$conf[$type][$i]['sostav']=get_sostav($conf[$type][$i]['tehno']);

$k1=0;
$k2=0;
$m=array();
$str=$conf[$type][$i]['tehno'].",";
$pr=$conf[$type][$i]['name'];
echo $pr."#";
$type='products';
	while (strpos($str,'*')>0){
		$a=substr($str,0,strpos($str,',')+1);
		$str=str_replace($a,'',$str);
//echo $str."|";		
		$m=explode("*",$a);
		
		$b=round($m[1]);
		//if ($b<=1){$b=0;}
		
		$k2+=$b;
		
		$c=$m[0];
		$c=trim($c);
		
		$j=-1;
		//echo "|".$c."|";
		
		for($i1=0;$i1<count($conf[$type]);$i1++){
				if ($c==$conf[$type][$i1]['name']){
					$j=$i1;
					$k1+=($conf[$type][$i1]['zen_g']*$b);
							echo $c."#".$conf[$type][$i1]['zen_g']." * ".$b." = ";
							echo $k1."|";
					}
		}
		if ($j==-1){$k1="<b><font style='color:#AF0000'>".$c."</font></b>";break;}
		

	}
   echo $str." -> ".$k2."gr. SEB= ".$k1."<br>";
   $type=$bd;
   if ($conf[$type][$i]['id']<=4300){$k1+=10.47;}
   $conf[$type][$i]['sebe']=$k1;
   $conf[$type][$i]['rekom']=$conf[$type][$i]['sebe']*3;
		
	



}



//print_r($conf);

for($i=0;$i<count($conf[$type]);$i++){
$t1=$te[0];
$t2="'".$conf[$type][$i][$te[0]]."'";
for($j=1;$j<$j1;$j++){
$t1.=",".$te[$j];
$t2.=",'".$conf[$type][$i][$te[$j]]."'";
}

//echo $conf[$type][$i]['name']."=>(".$conf[$type][$i]['cat'].")";
$sql = "INSERT INTO $bd (".$t1.") VALUES(".$t2.")";

$result = @mysql_query($sql,$db);
echo $sql." | R=".($result*1)."<br>";
}

echo "<br><br>REF...";
//include "ref.php";
echo "<br><br>OK";
