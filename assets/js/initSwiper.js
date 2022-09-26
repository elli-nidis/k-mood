new Swiper('.swiper', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	coverflowEffect: {
	rotate: 50,
	stretch: -30,
	depth: 50,
	modifier: 1,
	slideShadows: true,
	// loop: true,
	// loopedSlides: 4,

	},
	pagination: {
	el: '.swiper-pagination',

	},
});