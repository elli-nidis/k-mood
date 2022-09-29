<?PHP 
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d"); //Подключаюсь к БД
if ($mysqli == false){
print("error");

 } else{												//Если подключение произошло, привязываю значения из формы к переменным PHP
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = trim(mb_strtolower($_POST["email"]));
$pass = trim($_POST["pass"]);
$pass = password_hash($pass, PASSWORD_DEFAULT);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");		//Проверяю есть ли в БД запись с email, которую ввели в форму на сайте (чтобы не плодить дубликаты пользователей)

if($result->num_rows !== 0){						//если количество таких email в БД отлично от нуля (т.е. пользователь уже зарегистрирован)
	print("exist");
} else {																//иначе произвожу запись в БД
		$mysqli->query("INSERT INTO `users`(`user_name`, `user_lastname`, `email`, `pass`, `date_reg`) VALUES ('$name', '$lastname', '$email', '$pass', NOW())");	//Иначе (такого пользователя еще нет) ввожу данные из формы в БД
		print("ok");
}
}
?>