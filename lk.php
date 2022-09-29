<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Личный кабинет</title>
		
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
		.blossom {
			background-image: url(assets/img/blossom.png);
			background-size: cover;
			background-repeat: no-repeat;
			/* background-position: 100% 0%; */
		}
			.pink_saranhe {
				/* background-image: url(assets/img/pink_saranhe);
				background-size: contain; */
				border-radius: 25%;
				width: 100%;
			}
		.edit_btn {
			cursor: pointer;
			color: green;
		}

		.edit_btn:hover {
			color: darkgreen;
		}

		p {
			font-size: 1.5rem;
		}

		.save_btn {
			cursor: pointer;
			color: #FF1B6D;
		}

		.save_btn:hover {
			color: #EE9CBC;
		}

		.cancel_btn {
			cursor: pointer;
			color: #388C38;
		}

		.cancel_btn:hover {
			color: #128888;
		}

	</style>

	</head>

	<body>

<!--------------------HEADER START-------------------->
		<?php require_once("header.php") ?>
<!--------------------HEADER END-------------------->


	<!--------------------CONTENT START-------------------->
	<div class="container-fluid bg-dark bg-opacity-50 min-vh-100 blossom">
		<div class="container bg-secondary bg-opacity-50 text-white min-vh-100">

		<div class="container pt-5">
		<h1 class="text-center mb-5">Личный кабинет</h1>

		<div class="row">
			<div class="col-sm-3 col-md-3">
				<div class="text-center pink_saranhe">
					<img class="d-none d-sm-block pink_saranhe" src="assets/img/pink_saranhe.png" alt="pink hart">
				</div>
			</div>

			<div class="col-sm-9 col-md-9 ps-2">
				<div class="row">
					<div class="d-none d-sm-block col-sm-3 col-md-3">
						<p>Имя:</p>
						<p>Фамилия:</p>
						<p>E-mail:</p>
						<p>Id:</p>
						<p>Дата регистрации:</p>
					</div>
					<div class="col-sm-9 col-md-9">
						<p>
							<span><?php echo $_SESSION["name"]; ?></span>
							<span class="edit_btn">[ Изменить ]</span>
							<span class="save_btn" hidden data-item="user_name">[ Сохранить ]</span>
							<span class="cancel_btn" hidden>[ Отменить ]</span>
						</p>
						<p>
							<span><?php echo $_SESSION["lastname"]; ?></span>
							<span class="edit_btn">[ Изменить ]</span>
							<span class="save_btn" hidden data-item="user_lastname">[ Сохранить ]</span>
							<span class="cancel_btn" hidden>[ Отменить ]</span>
						</p>
						<p><?php echo $_SESSION["email"]; ?></p>
						<p class="d-none d-sm-block"><?php echo $_SESSION["id"]; ?></p>
						<p class="d-none d-sm-block"><?php echo $_SESSION["date_reg"]; ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-8 my-3">
			<form onsubmit="sendMessage(this); return false;">
					<label for="exampleFormControlTextarea1" class="h2 text-primary">Написать сообщение</label>
					<textarea class="form-control mt-3" id="exampleFormControlTextarea1" name="message_text" rows="3"></textarea>
					<div class="col-auto">
						<button type="submit" class="btn btn-primary my-3">Отправить сообщение</button>
					</div>
				</form>
			</div>
		</div>

		</div>
	</div>
</div>
<!--------------------CONTENT END-------------------->

<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>
<!--------------------FOOTER END-------------------->

<!--------------------CHANGE USERS NAME SCRIPT-------------------->
	<script>
		let edit_buttons = document.querySelectorAll(".edit_btn");
		let save_buttons = document.querySelectorAll(".save_btn");
		let cancel_buttons = document.querySelectorAll(".cancel_btn");


		for (let i = 0; i < edit_buttons.length; i++) {

			let inputValue = edit_buttons[i].previousElementSibling.innerText;

			edit_buttons[i].addEventListener("click", () => {
				edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
				save_buttons[i].hidden = false;
				cancel_buttons[i].hidden = false;
				edit_buttons[i].hidden = true;
			})

			cancel_buttons[i].addEventListener("click", () => {

				edit_buttons[i].previousElementSibling.innerText = inputValue;

				save_buttons[i].hidden = true;
				cancel_buttons[i].hidden = true;
				edit_buttons[i].hidden = false;
			})

			save_buttons[i].addEventListener("click", async () => {
				let newInputValue = edit_buttons[i].previousElementSibling.firstElementChild.value;

				edit_buttons[i].previousElementSibling.innerText = newInputValue;

				save_buttons[i].hidden = true;
				cancel_buttons[i].hidden = true;
				edit_buttons[i].hidden = false;


				let formData = new FormData();
				formData.append("value", newInputValue);
				formData.append("item", save_buttons[i].dataset.item);

				let response = await fetch("assets/php/obr_lk.php", {
					method: 'POST',
					body: formData
				});
			})

		}
		</script>

<!--------------------SEND MESSAGE SCRIPT-------------------->
		<script>
			async function sendMessage(form){
				let response = await fetch("./assets/php/sendMessage.php", {
					method: "POST", 
					body: new FormData(form),
				});
				let result = await response.text();
				if(result == "ok") {
					alert("Сообщение успешно отправлено");
					document.getElementById("exampleFormControlTextarea1").value = "";
				} else { 
					info.innerHTML = "Упс... что-то пошло не так.";
				}
			}
		</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


  </body>
</html>
