<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d"); //Подключаюсь к БД

if ($mysqli == false) {
	print("error");
} else {														//Произвожу запись изменений данных пользователя
	$inputValue = $_POST["value"];
	$item = $_POST["item"];
	$id = $_SESSION["id"];
	
	$mysqli->query("UPDATE `users` SET `$item` = '$inputValue' WHERE `id_user`='$id'");
	$_SESSION[mb_substr($item, 5)] = $inputValue;
}
?>