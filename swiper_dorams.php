<?php 
include "./assets/php/obr_show.php";
?>

<div class="container pt-5">
				<div class="row ink">
					<h2 class="h2 mb-3 text-white"> <i class="fa-regular fa-heart"></i> Дорамы</h2>
						<div class="swiper">
							<div class="swiper-wrapper">
							<?php 
								while($dorams = mysqli_fetch_assoc($result_dorams))
								{
									echo '
								<figure class="swiper-slide">
									<a href="#"> <img class="card-img mb-2" src="'.$dorams['img_dorama'].'" alt="'.$dorams['dorama_name'].'"></a>
									<a href="#" class="text-decoration-none text-white-50 film-name link"><figcaption class="h5">'.$dorams['dorama_name'].'</figcaption></a>
								</figure>';
							}
							?>
							</div>
							<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
						</div>
				</div>
			</div>