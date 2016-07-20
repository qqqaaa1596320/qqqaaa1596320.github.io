<?php
ini_set('error_reporting', E_ALL);
$botToken = "227903728:AAEFhGZ1CfzCn_IMDg1MsMCxd__iF4bryx0";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

print_r( "fas");

$text = $updateArray["result"][0]["message"]["text"];
sendMessage($chatId,"test");
switch ($message) {
	case '/test':
		sendMessage($chatId,"test");
		break;
	case '/hi':
		sendMessage($chatId,"hi!!");
		break;
	
	default:
		sendMessage($chatId,"no");
		break;
}
function sendMessage($chatId,$message){

	$url = "https://api.telegram.org/bot227903728:AAEFhGZ1CfzCn_IMDg1MsMCxd__iF4bryx0/sendmessage?chat_id=".$chatId."&text=fa";
	file_get_contents($url);
}

?>