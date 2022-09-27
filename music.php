<?php 
include "./assets/php/obr_show.php";
?>

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

	<div class="container pt-5 pb-5">
			<h2 class="h2 mb-3 text-white"> <i class="fa-regular fa-heart"></i> K-pop музыка</h2>

			<?php 
							while($music = mysqli_fetch_assoc($result_music))
							{
								echo '
			<div class="card text-bg-secondary mb-3" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
					<a href="#"><img src="'.$music['img_music'].'" class="img-fluid rounded-start" alt="'.$music['artist'].' '.$music['song'].'"></a>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">'.$music['artist'].'</h5>
							<p class="card-text">'.$music['song'].'</p>
						</div>
					</div>
				</div>
			</div>';
		}
		?>
		</div>
	</div>

</div>


<!--------------------FOOTER START-------------------->
		<?php require_once("footer.php") ?>
<!--------------------FOOTER END-------------------->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


  </body>
</html>
