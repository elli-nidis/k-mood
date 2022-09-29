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
								<a href="'.$music['url_song'].'" class="tube"> <img class="card-img mb-2" src="assets/img/img_music/'.$music['img_music'].'" alt="'.$music['artist'].' '.$music['song'].'"></a>
								<figcaption class="h5">'.$music['artist'].'</figcaption>
								<a href="'.$music['url_song'].'" class="text-decoration-none text-white-50 sing-name link tube">
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