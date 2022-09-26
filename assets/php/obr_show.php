<?PHP 
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d"); //Подключаюсь к БД
if ($mysqli == false){
print("error");
 }
else {
$result_music = mysqli_query($mysqli, "SELECT * FROM `music`");
$result_dorams = mysqli_query($mysqli, "SELECT * FROM `dorams`");
}
?>