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

	<style>
		.bamboo {
			background-image: url(assets/img/bamboo_1.png);
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


	<!--CONTENT-->
	<div class="container-fluid bg-dark bg-opacity-50 min-vh-100 bamboo">

		<div class="container bg-secondary bg-opacity-50 text-white min-vh-100">

	<div class="container pt-5 ">
		<div class="row justify-content-center">
			<h2 class="h2 mb-3 text-white"> <i class="fa-regular fa-heart"></i> K-pop музыка</h2>
			<div class="col-md-8">
				<div class="ratio ratio-16x9 border">
					<iframe class="" src="https://vk.com/video_ext.php?oid=-46341065&id=456243543&hash=414f7535eddc8afd&hd=2" 
					width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" 
					frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

</div>
	</div>

<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>
<!--------------------FOOTER END-------------------->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
