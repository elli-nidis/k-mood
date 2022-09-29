<?PHP 
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "moiixmmx_k-mood-m-n-d", "18MpFeS!983epTh", "moiixmmx_k-mood-m-n-d");
if ($mysqli == false){
print("error");
 }
else {
$result_music = mysqli_query($mysqli, "SELECT * FROM `music`"); //Забираю данные из БД, из таблицы music
$result_dorams = mysqli_query($mysqli, "SELECT d.dorama_name, d.img_dorama, d.year, s.url_dorama FROM `dorams` AS d JOIN `series` AS s ON d.id_dorama=s.id_dorama WHERE s.series_number=1"); //Забираю данные по фильмам из двух таблиц, ссылку на фильм беру только для первых серий

}
?>