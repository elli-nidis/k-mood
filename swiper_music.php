<?php 
include "./assets/php/obr_show.php";
?>

<div class="container pt-5">
					<div class="row sakura">
					<h2 class="h2 mb-3 text-white"> <i class="fa-regular fa-heart"></i> K-pop музыка</h2>
					<div class="swiper">
						<div class="swiper-wrapper">
							<?php 
							while($music = mysqli_fetch_assoc($result_music))
							{
								echo '
							<figure class="swiper-slide">
								<a href="#"> <img class="card-img mb-2" src="'.$music['img_music'].'" alt="'.$music['artist'].' '.$music['song'].'"></a>
								<figcaption class="h5">'.$music['artist'].'</figcaption>
								<a href="#" class="text-decoration-none text-white-50 sing-name link">
									<figcaption class="h5">'.$music['song'].'</figcaption></a>
							</figure>';
							}
							?>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
					</div>
				</div>