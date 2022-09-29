<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Info</title>
		
		<!-------- FAVIKON-------->
		<link rel="icon" type="image/svg+xml" href="assets/img/KMonster.svg" />

		<!-------- Bootstrap v5.2.0-beta1-------->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

		<!-------- STYLE CSS-------->
		<link rel="stylesheet" href="assets/css/index.css" />

		<!-------- FONTAWESOME-------->
		<script src="https://kit.fontawesome.com/972f7543c8.js" crossorigin="anonymous"></script>

	<style>
		.bts {
			background-image: url(assets/img/bts.png);
			background-size: contain;
			background-repeat: no-repeat;
			background-position: 100% 0%;
		}
	</style>

	</head>

	<body>

<!--------------------HEADER START-------------------->
		<?php require_once("header.php") ?>
<!--------------------HEADER END-------------------->


	<!--------------------CONTENT START-------------------->
	<div class="container-fluid bg-dark bg-opacity-50 min-vh-100 bts">
		<div class="container bg-secondary bg-opacity-50 text-white min-vh-100">

		<div class="container">
			<h1 class="text-center pt-5 mb-5">Информация для правообладателей</h1>

			<p class="h4 text-black-50">
			Сайт создан как учебный проект и не преследует коммерческих целей.
			<br><br>
			Материалы и ссылки, размещенные на сайте, расположены в свободном доступе в сети Интернет. При обнаружении материалов, нарушающих ваши авторские права, вы можете написать на адрес электронной почты: mithos@rambler.ru, предоставив следующую информацию:
			<br>
			— Документ, свидетельствующий о наличии у вас исключительных прав на материал, размещенный на сайте.
			<br>
			— Прямые ссылки на страницы сайта с материалами, которые нарушают ваши авторские права и вы не хотите, чтобы они были размещены без вашего согласия.
			</p>

		</div>
	</div>

</div>
<!--------------------CONTENT END-------------------->

<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>
<!--------------------FOOTER END-------------------->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	</body>
</html>
