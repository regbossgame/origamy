<?

function get_gram($str){
$k=0;
$m=array();
$str=$str.",";
	while (strpos($str,'*')>0){
		$a=substr($str,0,strpos($str,',')+1);
		$str=str_replace($a,'',$str);
		
		$m=explode("*",$a);
		
		$b=round($m[1]);
		if ($b<=1){$b=0;}
		
		$k+=$b;

	}

   return $k;	
}


function get_sostav($str){
$res="";
$m=array();
$nstr=$str;
$str=$str.",";
	while (strpos($str,'*')!=false){
		$a=substr($str,strpos($str,'*'),(strpos($str,',')-strpos($str,'*'))+1);
		$str=str_replace($a,'#',$str);
//		echo $str."<br>";
		
//		$res.=$m[0].", ";
		
	}

	while (strpos($str,',')!=false){
		$str=str_replace(',','',$str);
	}
	
	if ($str[strlen($str)-1]=="#"){$str[strlen($str)-1]="";}
	
	while (strpos($str,'#')!=false){
		$str=str_replace('#',',',$str);
	}
		
   
   //$res.="#";
   //$res=str_replace(', #','',$res);
   //if (strlen($res)<5){$res=$nstr;}
   //echo "+".$res."+";
   return $str;
}




function htmlSubstr($html, $length)
{
    $out = '';
    $arr = preg_split('/(<.+?>|&#?\\w+;)/s', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    $tagStack = array();
    for($i = 0, $l = 0; $i < count($arr); $i++) {
        if( $i & 1 ) {
            if( substr($arr[$i], 0, 2) == '</' ) {
                array_pop($tagStack);
            } elseif( $arr[$i][0] == '&' ) {
                $l++;
            } elseif( substr($arr[$i], -2) != '/>' ) {
                array_push($tagStack, $arr[$i]);
            }
            $out .= $arr[$i];
        } else {
            if( ($l += strlen($arr[$i])) >= $length ) {
                $out .= substr($arr[$i], 0, $length - $l + strlen($arr[$i]));
                break;
            } else {
                $out .= $arr[$i];
            }
        }
    }
    while( ($tag = array_pop($tagStack)) !== NULL ) {
        $out .= '</' . strtok(substr($tag, 1), " \t>") . '>';
    }
    return $out;
}


function obrez($str,$kolko){

$str=str_replace("   "," ",$str);
$str=str_replace("  "," ",$str);
$str=str_replace("  "," ",$str);
$str=str_replace("  "," ",$str);


$rm="";
for ($ij=0;$ij<($kolko-2);$ij++){

$rm.=$str[$ij];
}
if (strlen($str)>=$kolko){$rm.="..";}

return $rm;
}


function trans($str)
{
    $tr = array(
        "�"=>"A","�"=>"B","�"=>"V","�"=>"G",
        "�"=>"D","�"=>"E","�"=>"IO","�"=>"J","�"=>"Z","�"=>"I",
        "�"=>"Y","�"=>"K","�"=>"L","�"=>"M","�"=>"N",
        "�"=>"O","�"=>"P","�"=>"R","�"=>"S","�"=>"T",
        "�"=>"U","�"=>"F","�"=>"H","�"=>"TS","�"=>"CH",
        "�"=>"SH","�"=>"SCH","�"=>"","�"=>"YI","�"=>"",
        "�"=>"E","�"=>"YU","�"=>"YA","�"=>"a","�"=>"b",
        "�"=>"v","�"=>"g","�"=>"d","�"=>"e","�"=>"io","�"=>"j",
        "�"=>"z","�"=>"i","�"=>"y","�"=>"k","�"=>"l",
        "�"=>"m","�"=>"n","�"=>"o","�"=>"p","�"=>"r",
        "�"=>"s","�"=>"t","�"=>"u","�"=>"f","�"=>"h",
        "�"=>"ts","�"=>"ch","�"=>"sh","�"=>"sch","�"=>"y",
        "�"=>"yi","�"=>"","�"=>"e","�"=>"yu","�"=>"ya",
		"�"=>"Num","+"=>"Plus","&"=>"And"
    );
	$str=strtr($str,$tr);
//	$str = preg_replace('~[^-a-z0-9_]+~u', '_', $str);
	$str = str_replace('""', '"', $str);
	$str = str_replace('"', '-', $str);
	$str = str_replace("''", "'", $str);
	$str = str_replace("'", '-', $str);
	
	
	$str = str_replace('|', '-', $str);
	$str = str_replace('%', '-', $str);
	$str = str_replace('*', '-', $str);
	$str = str_replace('?', '-', $str);
	$str = str_replace('#', '-', $str);
	$str = str_replace('<', '-', $str);
	$str = str_replace('>', '-', $str);
	$str = str_replace('`', '-', $str);	
	$str = str_replace('@', '-', $str);
	$str = str_replace(':', '-', $str);
	$str = str_replace(';', '-', $str);
	$str = str_replace('^', '-', $str);
	$str = str_replace('.', '-', $str);
	$str = str_replace(',', '-', $str);
	$str = str_replace('=', '-', $str);
	$str = str_replace('�', '-', $str);
	$str = str_replace('�', '-', $str);
	$str = str_replace('!', '', $str);
	
	
	
	
	$str = str_replace('  ', '-', $str);
	$str = str_replace('/', '-', $str);
	$str=str_replace("\\", "-", $str);
	
	$str = str_replace(' ', '-', $str);
	//$str = str_replace('.', '-', $str);
	$str = str_replace(',', '-', $str);
	$str = str_replace('(', '-', $str);
	$str = str_replace(')', '-', $str);

	
	$str = str_replace("---", '-', $str);
	$str = str_replace("--", '-', $str);
	$str = str_replace("--", '-', $str);
	$str = str_replace("--", '-', $str);

	$str = str_replace("_-", '_', $str);
	$str = str_replace("-_", '_', $str);
	$str = str_replace("___", '_', $str);
	$str = str_replace("__", '_', $str);
	$str = str_replace("__", '_', $str);
	
	

	//$str=preg_match("/^[A-z]+$/ui", $str);
	
    $str = trim($str, "-");
	
	$str=strtolower($str);
	
    return $str;
    
}
?>