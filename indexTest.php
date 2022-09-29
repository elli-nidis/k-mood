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

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

		<!-------- STYLE CSS-------->
		<link rel="stylesheet" href="assets/css/index.css" />

		<!-------- SWIPER JS CDN-------->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

		<!-------- VIDEOTUBE JS-------->
		<link rel="stylesheet" href="assets/videotube/videotube.min.css">
		<script src="assets/videotube/videotubevk.js"></script>


		<!-------- FONTAWESOME-------->
		<script src="https://kit.fontawesome.com/972f7543c8.js" crossorigin="anonymous"></script>

		<style>
			.swiper {
				width: 100%;
				padding-top: 50px;
				padding-bottom: 50px;
			}

			.swiper-slide {
				background-position: center;
				background-size: cover;
				width: 300px;
				height: 300px;

			}

			.sakura {
				background-image: url(assets/img/sakura.png);
				background-size: contain;
				background-repeat: no-repeat;
			}
			.ink {
				background-image: url(assets/img/ink.png);
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
		<div class="container-fluid bg-dark bg-opacity-50 min-vh-100">
			<div class="container bg-secondary bg-opacity-50 text-white min-vh-100">

				<!--------------------SWIPER MUSIC START-------------------->
				<?php require_once("swiper_music.php") ?>
				<!--------------------SWIPER MUSIC END-------------------->


			<!--------------------SWIPER DORAMS START-------------------->
			<?php require_once("swiper_dorams.php") ?>
			<!--------------------SWIPER DORAMS END-------------------->
		</div>
	</div>
	
	<!--------------------CONTENT END-------------------->

		<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>
		<!--------------------FOOTER END-------------------->

		<!-- Swiper JS CDN-->
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


		<!-- Initialize Swiper -->
		<script src="assets/js/initSwiper.js"></script>



	</body>
</html>

