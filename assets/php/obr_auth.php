<?PHP 
header('Content-Type: text/html; charset=utf-8');
session_start();

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d"); //Подключаюсь к БД
if ($mysqli == false){
print("error");

 } else{				//Если подключение произошло, привязываю значения из формы к переменным PHP
$email = trim(mb_strtolower($_POST["email"]));
$pass = trim($_POST["pass"]);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");		//Проверяю есть ли в БД релевантная запись email
$result = $result->fetch_assoc();

if (password_verify($pass, $result["pass"])) {		//Если хеш пароля совпал, передаю информацию в сессию
	echo "ok";
	$_SESSION["name"] = $result["user_name"];
	$_SESSION["lastname"] = $result["user_lastname"];
	$_SESSION["email"] = $result["email"];
	$_SESSION["id"] = $result["id_user"];
	$_SESSION["date_reg"] = date('d-m-Y H:i:s', strtotime($result["date_reg"]));
} else {
	echo "user-not-found";
}
}
?>