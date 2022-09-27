<?PHP 
header('Content-Type: text/html; charset=utf-8');
session_start();

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d"); //Подключаюсь к БД
if ($mysqli == false){
print("error");

 } else{																						//Если подключение произошло, привязываю значения из формы к переменным БД
$email = trim(mb_strtolower($_POST["email"]));
$pass = trim($_POST["pass"]);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");		//Проверяю есть ли в БД запись
$result = $result->fetch_assoc();

if (password_verify($pass, $result["pass"])) {
	echo "ok";
	$_SESSION["name"] = $result["name"];
	$_SESSION["lastname"] = $result["lastname"];
	$_SESSION["email"] = $result["email"];
	$_SESSION["id"] = $result["id"];
} else {
	echo "user-not-found";
}
}
?>