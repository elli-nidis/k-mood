<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>K-mood</title>

		<!-------- FAVIKON-------->
		<link rel="icon" type="image/svg+xml" href="assets/img/KMonster.svg" />

		<!-------- Bootstrap v5.2.0-beta1-------->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-------- STYLE CSS-------->
		<link rel="stylesheet" href="assets/css/index.css" />

		<!-------- FONTAWESOME-------->
		<script src="https://kit.fontawesome.com/972f7543c8.js" crossorigin="anonymous"></script>
	</head>

  <body>
		
<!--------------------HEADER START-------------------->
		<?php require_once("header.php") ?>
<!--------------------HEADER END-------------------->

<!--------------------CONTENT START-------------------->
	<div class="container-fluid bg-dark bg-opacity-50 min-vh-100">

		<div class="container bg-secondary bg-opacity-50 text-white min-vh-100">

			<!--------------------MUSIC START-------------------->
			<div class="container pt-5 ">
				<div class="row">
					<h2 class="h2 mb-3 text-white"> <i class="fa-regular fa-heart"></i> K-pop музыка</h2>
					<div class="col-lg-3 col-md-6 col-sm-12 ">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/stray_kids_thunderous.jpg" alt="STRAY KIDS Thunderous"></a>
							<figcaption class="h5">STRAY KIDS</figcaption>
							<a href="#" class="text-decoration-none text-white-50 sing-name">
								<figcaption class="h5">Thunderous</figcaption></a>
						</figure>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/stray_kids_venom.jpg" alt="STRAY KIDS Venom"></a>
							<figcaption class="h5">STRAY KIDS</figcaption>
							<a href="#" class="text-decoration-none text-white-50 sing-name"><figcaption class="h5">Venom</figcaption></a>
						</figure>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/oneus_luna.jpg" alt="ONEUS Luna"></a>
							<figcaption class="h5">ONEUS</figcaption>
							<a href="#" class="text-decoration-none text-white-50 sing-name"><figcaption class="h5">Luna</figcaption></a>
						</figure>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/oneus_window.jpg" alt="ONEUS Window"></a>
							<figcaption class="h5">ONEUS</figcaption>
							<a href="#" class="text-decoration-none text-white-50 sing-name"><figcaption class="h5">Window</figcaption></a>
						</figure>
					</div>

				</div>
			</div>
			<!--------------------MUSIC END-------------------->

			<!--------------------DORAMS START-------------------->
			<div class="container pt-5">
				<div class="row">
					<h2 class="h2 mb-3 text-white"> <i class="fa-regular fa-heart"></i> Дорамы</h2>
					<div class="col-lg-3 col-md-6 col-sm-12 ">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/Goblin.jpg" alt="Гоблин"></a>
							<a href="#" class="text-decoration-none text-white-50 film-name"><figcaption class="h5">Гоблин</figcaption></a>
						</figure>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/queen.jpeg" alt="Королева Чорин"></a>
							<a href="#" class="text-decoration-none text-white-50 film-name"><figcaption class="h5">Королева Чорин</figcaption></a>
						</figure>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/way.webp" alt="Путь любви городской пары"></a>
							<a href="#" class="text-decoration-none text-white-50 film-name"><figcaption class="h5">Путь любви городской пары</figcaption></a>
						</figure>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
						<figure>
							<a href="#"> <img class="card-img mb-2" src="assets/img/happiness.jpg" alt="Счастье"></a>
							<a href="#" class="text-decoration-none text-white-50 film-name"><figcaption class="h5">Счастье</figcaption></a>
						</figure>
					</div>

				</div>
			</div>
			<!--------------------DORAMS END-------------------->
		</div>
	</div>
	
<!--------------------CONTENT END-------------------->

<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>;
<!--------------------FOOTER END-------------------->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
