<?

$dDir = opendir($sPath); // ��������� ����������, $dDir - ���������� 
//$aFileList = array(); // ������ � ������� ����� ���������� ����� ������ 
$j1=0;
$fis=array();
// ���� ���������� ���������� 
while ($sFileName=readdir($dDir)) 
{ 
if (($sFileName!='.') && ($sFileName!='..') && ((strpos($sFileName,".jpg")>0) || (strpos($sFileName,".JPG")>0)))
{ 

$fis[$j1]=$sFileName;
$j1++;
} 
} 

closedir ($dDir); 


/*
for($i=0;$i<$j;$i++){
for($i1=0;$i1<$j;$i1++){
if $fis[$i][0]
}
*/
sort($fis);

for($i1=0;$i1<$j1;$i1++){
$txt.='<a href="'.$sPath.''.$fis[$i1].'" rel="lightbox[plants]"><img src="'.$sPath.'mini/'.$fis[$i1].'" width=152px height=118px " /></a>';
$txt.="\n";
}

//if ($sFileName==""){$sPath="res";$sFileName="nofoto.jpg";}

?>

