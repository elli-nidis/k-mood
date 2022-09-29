<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Авторизация</title>

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
			.lotos {
				background-image: url(assets/img/lotos.png);
				background-size: contain;
				background-repeat: no-repeat;
			}
	</style>
	</head>

	<body>
		<!--------------------HEADER START-------------------->
		<?php require_once("header.php") ?>
		<!--------------------HEADER END-------------------->

		<!--------------------CONTENT START-------------------->
		<div class="container-fluid bg-dark bg-opacity-50 min-vh-100 lotos">
			<div class="container bg-secondary bg-opacity-50 text-white min-vh-100">


			<div class="container">
			<h1 class="text-center pt-5 mb-5">Авторизация</h1>
			<div class="col-md-4 mx-auto">
				<form onsubmit="checkForm(this); return false;">

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<div class="input-group-text">
							<i class="fa-regular fa-envelope mx-0 pt-2 px-0 text-center"></i>
							</div>
						</div>
						<input type="email" class="form-control in-put" placeholder="Email" required name="email" />
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<div class="input-group-text">
							<i class="fa-solid fa-unlock-keyhole mx-0 pt-2 px-0 text-center"></i>
							</div>
						</div>
						<input type="password" class="form-control in-put" placeholder="Пароль" required id="formPass" name="pass" />
						<i class="col-xs-2 fa-regular fa-eye mx-0 pt-2 px-0 text-center eye" onmousedown="formPass.type='text'; this.nextElementSibling.hidden = false; this.hidden = true"></i>
						<i class="col-xs-2 fa-regular fa-eye-slash mx-0 pt-2 px-0 text-center eye" hidden onmouseup="formPass.type='password'; this.previousElementSibling.hidden = false; this.hidden = true"></i>
					</div>

					
					<input type="submit" class="form-control btn btn-success" value="Авторизоваться" />
					<p id="info" class="mt-3"></p>
				</form>
			</div>
		</div>


			</div>
		</div>
	<!--------------------CONTENT END-------------------->

		<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>
		<!--------------------FOOTER END-------------------->

		<!--------------------AUTHORIZATION SCRIPT START-------------------->
		<script>
			async function checkForm(form) {
				let response = await fetch("./assets/php/obr_auth.php", {
					method: "POST",
					body: new FormData(form),
				});
				let result = await response.text();
				if (result == "ok") {
					location.href = "lk.php";
				} else if (result == "user-not-found") {
					info.innerHTML = "Такого пользователя нет!";
				} else {
          alert("Неизвестная ошибка");
        }
			}
		</script>
		<!--------------------AUTHORIZATION SCRIPT END-------------------->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	</body>
</html>
