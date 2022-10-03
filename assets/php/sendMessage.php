<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d"); 

if ($mysqli == false) {
	print("error");
} else {
	$message_text = $_POST["message_text"];	//если соединение с БД ok, забираю данные из формы
	$email = $_SESSION["email"];
		
	$mysqli->query("INSERT INTO `messages`(`email`, `message_text`, `date_send`) VALUES ('$email', '$message_text', NOW())");	//Вношу записи в БД
	print("ok");
}
?>