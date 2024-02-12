<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- color of address bar in mobile browser -->
	<meta name="theme-color" content="#28292C">
	<!-- favicon  -->
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/plugins/bootstrap.min.css">
	<!-- font awesome css -->
	<link rel="stylesheet" href="css/plugins/font-awesome.min.css">
	<!-- swiper css -->
	<link rel="stylesheet" href="css/plugins/swiper.min.css">
	<!-- fancybox css -->
	<link rel="stylesheet" href="css/plugins/fancybox.min.css">
	<!-- mapbox css -->
	<link href="css/plugins/mapbox-style.css" rel='stylesheet'>
	<!-- main css -->
	<link rel="stylesheet" href="css/style-light.css">

	<title>Mireya</title>

</head>

<body>

	<div class="mry-app">

		<?php
		include_once('websiteParts/preloader.php');
		include_once('websiteParts/cursor.php');
		include_once('websiteParts/menu.php');
		?>
		<div class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<canvas class="mry-dots"></canvas>

				<div class="swiper-container mry-main-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">

							<!-- project -->
							<div class="mry-project-slider-item">
								<div class="mry-project-frame">
									<div class="mry-cover-frame">
										<img class="mry-project-cover mry-position-center" src="img/light/projects/prjct-1/fs/1.jpg" alt="Project" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
										<div class="mry-cover-overlay mry-gradient-overlay"></div>
										<div class="mry-loading-curtain"></div>
									</div>
									<div class="mry-main-title-frame">
										<div class="container">
											<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1000">
												<div class="mry-subtitle mry-mb-20">Interior design</div>
												<h1 class="mry-mb-30">Little Cottage<br><span class="mry-border-text">Сoncept</span></h1>
												<div class="mry-text mry-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Adipisci distinctio iure, rerum non fugit.</div>
												<a class="mry-btn mry-default-link mry-anima-link" href="project.html">Open Case</a>
												<a class="mry-btn-text mry-default-link mry-anima-link" href="portfolio-grid-1.html">All Projects</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project end -->

						</div>
						<div class="swiper-slide">

							<!-- project -->
							<div class="mry-project-slider-item">
								<div class="mry-project-frame">
									<div class="mry-cover-frame">
										<img class="mry-project-cover mry-position-right" src="img/light/projects/prjct-2/fs/1.jpg" alt="Project" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
										<div class="mry-cover-overlay mry-gradient-overlay"></div>
									</div>
									<div class="mry-main-title-frame">
										<div class="container">
											<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1000">
												<div class="mry-subtitle mry-mb-20">Architecture</div>
												<h1 class="mry-mb-30">Compact House<br><span class="mry-border-text">Project</span><span class="mry-animation-el"></span></h1>
												<div class="mry-text mry-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Adipisci distinctio iure, rerum non fugit.</div>
												<a class="mry-btn mry-default-link mry-anima-link" href="project.html">Open Case</a>
												<a class="mry-btn-text mry-default-link mry-anima-link" href="portfolio-grid-1.html">All Projects</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project end -->

						</div>
						<div class="swiper-slide">

							<!-- project -->
							<div class="mry-project-slider-item">
								<div class="mry-project-frame">
									<div class="mry-cover-frame">
										<img class="mry-project-cover" src="img/light/projects/prjct-3/fs/1.jpg" alt="Project" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
										<div class="mry-cover-overlay mry-gradient-overlay"></div>
									</div>
									<div class="mry-main-title-frame">
										<div class="container">
											<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1000">
												<div class="mry-subtitle mry-mb-20">Interior design</div>
												<h1 class="mry-mb-30">Greenwell Yards<br><span class="mry-border-text">Country house</span><span class="mry-animation-el"></span></h1>
												<div class="mry-text mry-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Adipisci distinctio iure, rerum non fugit.</div>
												<a class="mry-btn mry-default-link mry-anima-link" href="project.html">Open Case</a>
												<a class="mry-btn-text mry-default-link mry-anima-link" href="portfolio-grid-1.html">All Projects</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project end -->

						</div>
					</div>
				</div>

				<div class="mry-slider-pagination-frame">
					<div class="mry-slider-pagination"></div>
				</div>

				<div class="mry-slider-nav-panel">
					<div class="container">
						<div class="mry-slider-progress-bar-frame">
							<div class="mry-slider-progress-bar">
								<div class="mry-progress"></div>
							</div>
						</div>
					</div>

					<div class="mry-slider-arrows">
						<div class="mry-label">Slider Navigation</div>
						<div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
						<div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- jquery js -->
	<script src="js/plugins/jquery.min.js"></script>
	<!-- tween max js -->
	<script src="js/plugins/tween-max.min.js"></script>
	<!-- scroll magic js -->
	<script src="js/plugins/scroll-magic.js"></script>
	<!-- scroll magic gsap plugin js -->
	<script src="js/plugins/scroll-magic-gsap-plugin.js"></script>
	<!-- swiper js -->
	<script src="js/plugins/swiper.min.js"></script>
	<!-- isotope js -->
	<script src="js/plugins/isotope.min.js"></script>
	<!-- fancybox js -->
	<script src="js/plugins/fancybox.min.js"></script>
	<!-- mapbox js -->
	<script src="js/plugins/mapbox.min.js"></script>
	<!-- smooth scrollbar js -->
	<script src="js/plugins/smooth-scrollbar.min.js"></script>
	<!-- overscroll js -->
	<script src="js/plugins/overscroll.min.js"></script>
	<!-- canvas js -->
	<script src="js/plugins/canvas.js"></script>
	<!-- parsley js -->
	<script src="js/plugins/parsley.min.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>

</body>

</html>