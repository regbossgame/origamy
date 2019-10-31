<?

unlink("index.php");

include "func.php";

include "conf.php";

$nbar="Кафе &#171;ОРИГАМИ&#187; Таганрог на ул. Чехова 43";
$name=array();
$name[0]="Главная";
$name[1]="Роллы";
$name[2]="Суши";
//$name[3]="Сеты";
$name[3]="Горячее";
$name[4]="Салаты";
$name[5]="Сэндвичи";
$name[6]="Воки";
$name[7]="Бар";
//$name[7]="Галерея";
//$name[8]="Доставка";

$tit=array();
$tit[0]=$nbar.". Главная / Галерея / Доставка 8(928)106-93-21 | Cуши &#171;ОРИГАМИ&#187; кафе-бар Таганрог! Суши оригами в Таганроге. Роллы оригами в Таганроге.";// Похожие тэги: оригамибар.рф Origami Origamy Аригами Арегами Орегами My-Origami.ru
$tit[1]="Меню: Роллы - ".$nbar;
$tit[2]="Меню: Суши - ".$nbar;
//$tit[3]="Меню: Сеты - ".$nbar;
$tit[3]="Меню: Горячие блюда - ".$nbar;
$tit[4]="Меню: Салаты - ".$nbar;
$tit[5]="Меню: Сэндвичи - ".$nbar;
$tit[6]="Меню: Воки - ".$nbar;
$tit[7]="Меню: Бар - ".$nbar;
$tit[8]="Галерея - ".$nbar;
$tit[9]="Доставка - ".$nbar;

$nt=array();
$nt[0]=0;
$nt[1]=10;
$nt[2]=20;
$nt[3]=40;
$nt[4]=50;
$nt[5]=60;
$nt[6]=45;
$nt[7]=70;
$nt[8]=0;
$nt[9]=0;



$str=array();
$str[0]="index.html";
for($i=1;$i<count($name);$i++){
$str[$i]=trans($name[$i]).".html";
}



for($i=0;$i<count($str);$i++){
$txt="<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>

<HTML>

<HEAD>

<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>

<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?116\"></script>

<link rel=stylesheet href='style.css' type='text/css'>
 <script src='java.js' type='text/javascript'></script>
<link rel='shortcut icon' href='favicon.ico'>";
if ($i==0){//||($i==3)){
	$txt.="<link rel=\"stylesheet\" href=\"css/lightbox.css\" type=\"text/css\" media=\"screen\" />
	<script src=\"js/jquery-1.10.2.min.js\"></script>
	<script src=\"js/lightbox-2.6.min.js\"></script>\n";
}
//<div style='position:absolute;left:0px;top:0px;width:100%;height:100px;background:url(res/top1.png);z-index:-1;'></div>
$txt.="<TITLE>".$tit[$i]."</TITLE>
</HEAD>
<BODY>

<!-- Yandex.Metrika counter -->
<script type=\"text/javascript\">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30640772 = new Ya.Metrika({id:30640772,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName(\"script\")[0],
        s = d.createElement(\"script\"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = \"text/javascript\";
    s.async = true;
    s.src = (d.location.protocol == \"https:\" ? \"https:\" : \"http:\") + \"//mc.yandex.ru/metrika/watch.js\";

    if (w.opera == \"[object Opera]\") {
        d.addEventListener(\"DOMContentLoaded\", f, false);
    } else { f(); }
})(document, window, \"yandex_metrika_callbacks\");
</script>
<noscript><div><img src=\"//mc.yandex.ru/watch/30640772\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div class='maket'>
<div class='header'><div style='float:left;'><img src='res/logo.png' height=150px>
</div>
<div style='float:right;margin-right:60px;'><br><img src='res/number.png' width=400px>

<!-- VK Widget -->
<div id=\"vk_subscribe\"></div>
<script type=\"text/javascript\">
VK.Widgets.Subscribe(\"vk_subscribe\", {mode: 0, soft: 0}, -94623452);
</script>

</div>
<br><br><br><br>
<br><br><br>

<div class='menu'>
<div class='line1'></div>
<table class='ment'>
<tr>";

//$txt.="<h2 style='text-align:center;margin-left:0px;margin-top:20px;'>";
 for($j=0;$j<count($str);$j++){
	$tt=$name[$j];
	$txt.="<td width=135px>";
	if ($i==$j){$tt="<span class='red1'>".$tt."</span>";}else{
	$tt="<a href='".$str[$j]."' class='nored1'>".$tt."</a>\n";
	}
	
	$txt.=$tt."</td>";
	$txt.="<td class='mtd'> </td>";
 }
 
 $txt.="<td width=430px></td>";
 
 //$txt.="</h2>\n";
 $txt.="</tr></table>
 <div class='line1'></div>";
 


$txt.="</div></div>\n";

 $txt.="<div class='content1'>";
 
 if ($i==0){
 $txt.="<br><br><h1 class='cat1' style='width:100%;'>Добро пожаловать!</h1>
 <h2 class='cat1' style='width:100%;'>Официальный сайт &#171;ОРИГАМИ&#187; Кафе/Cуши-бар. Город Таганрог, ул. Чехова 43</h2>
 
 <div class='namraz'><h2 class='cat1'>Галерея</h2></div>
 <br>";
 $txt.="<div class='line1'></div>";
 $sPath='gal/';
include "gal.php";
$txt.="<div class='line1'></div>";
$txt.="<div class='namraz'><h2 class='cat1'>Схема проезда</h2></div>
<br>";
$txt.="<table border=0><tr>
<td>
<script type=\"text/javascript\" charset=\"utf-8\" src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=CJwZ4PeDw-1fzFo6LfYv12tdmf2S5fZA&width=500&height=400\"></script>
</td>
<td width=20px></td>
<td>";

include "vk.php";

$txt.="</td>
</td>
<td width=20px></td>
<td>";

include "vk2.php";

$txt.="</td>
</tr></table>";

 }
 
 if ($nt[$i]!=0){
 
 include "cataloge.php";
 
 }else{
 
 if (file_exists("txt/".$str[$i])){
 $txt.="<br>".file_get_contents("txt/".$str[$i]);
}else{
$tt="<span style='color:#FFFFFF;'>Страница в стадии разаработки</span>";
 file_put_contents($str[$i],$tt);
 file_put_contents("txt/".$str[$i],$tt);
 $txt.=$tt;
}

 }
 
 $txt.="</div>";

 
$txt.="</div>";

 $txt.="<div style='clear:both;float:right;'>
  
 <!-- Yandex.Metrika informer -->
<a href=\"https://metrika.yandex.ru/stat/?id=30640772&amp;from=informer\"
target=\"_blank\" rel=\"nofollow\"><img src=\"//bs.yandex.ru/informer/30640772/3_0_473025FF_271005FF_1_pageviews\"
style=\"width:88px; height:31px; border:0;\" alt=\"яндекс.ћетрика\" title=\"яндекс.ћетрика: данные за сегодн¤ (просмотры, визиты и уникальные посетители)\" onclick=\"try{Ya.Metrika.informer({i:this,id:30640772,lang:'ru'});return false}catch(e){}\"/></a>
<!-- /Yandex.Metrika informer -->
 </div> ";


$txt.="</BODY>

</HTML>";
 
 file_put_contents($str[$i],$txt);
 echo $str[$i]." - ".$name[$i]." - ".$tit[$i]." => OK<br>\n";
 }


 ?>
