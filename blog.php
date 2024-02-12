<?php
include_once('admin/php/main.php');
?>
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


	<title>Blog | Kaleli Mimarlik Ofisi </title>

	<!-- Normal Meta Etiketleri -->
	<meta name="description" content="Kaleli Mimarlık Ofisi, estetik ve sürdürülebilir mekânlar tasarlar.">
	<meta name="keywords" content=" ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Kaleli Mimarlik">
	<meta name="source" content="https://www.kalelimimarlik.com">

	<!-- Twitter için meta etiketleri -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@kalelimimarlik">
	<meta name="twitter:creator" content="@kalelimimarlik">
	<meta name="twitter:title" content="Kaleli Mimarlik Ofisi">
	<meta name="twitter:description" content="Kaleli Mimarlık Ofisi, estetik ve sürdürülebilir mekânlar tasarlar.">
	<meta name="twitter:image" content="https://www.kalelimimarlik.com/afis.jpg">

	<!-- Facebook için meta etiketleri -->
	<meta property="og:title" content="Kaleli Mimarlik Ofisi">
	<meta property="og:description" content="Kaleli Mimarlık Ofisi, estetik ve sürdürülebilir mekânlar tasarlar.">
	<meta property="og:image" content="https://www.kalelimimarlik.com/afis.jpg">
	<meta property="og:url" content="https://www.kalelimimarlik.com">
	<meta property="og:site_name" content="Kaleli Mimarlik">

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
				<canvas class="mry-dots" style="display: none"></canvas>

				<div class="mry-head-bg">
					<img src="img/light/projects/prjct-7/1.jpg" alt="background">
					<div class="mry-bg-overlay"></div>
				</div>

				<div class="mry-banner mry-p-140-0">
					<div class="container">
						<div class="mry-main-title mry-title-center">
							<div class="mry-subtitle mry-mb-20 mry-fo">Blog</div>
							<h1 class="mry-mb-20 mry-fo">Explore Our Amazing<br><span class="mry-border-text">Newsletter</span><span class="mry-animation-el"></span></h1>
							<div class="mry-text mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
							<div class="mry-scroll-hint-frame">
								<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
									<span class="mry-magnetic-object"></span>
								</a>
								<div class="mry-label mry-fo">Scroll Down</div>
							</div>
						</div>
					</div>
				</div>

				<!-- blog -->
				<div class="mry-portfolio mry-p-100-100" id="mry-anchor">
					<div class="container">

						<div class="mry-portfolio-frame">
							<div class="mry-masonry-grid mry-3-col">
								<div class="mry-grid-sizer"></div>

								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior">

									<div class="mry-card-item mry-fo">
										<div class="mry-card-cover-frame mry-mb-20">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/1.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Omuli Museum of the Horse</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 architecture">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/2.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Sleeping Pods on a Cliff</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/3.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Tiny Kiwi Meditation Cabin</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 repair">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/4.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Spirala Community Home</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior repair">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/5.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Omuli Museum of the Horse</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 architecture repair">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/6.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Sleeping Pods on a Cliff</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior architecture">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/1.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Tiny Kiwi Meditation Cabin</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 architecture">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/2.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Spirala Community Home</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
								<div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior architecture">

									<div class="mry-card-item">
										<div class="mry-card-cover-frame mry-mb-20 mry-fo">
											<div class="mry-badge">29.01.2021</div>
											<img src="img/light/blog/3.jpg" alt="project">
											<div class="mry-cover-overlay"></div>
											<div class="mry-hover-links">
												<a href="publication.php" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr">
											<h4 class="mry-mb-10 mry-fo"><a href="publication.php">Omuli Museum of the Horse</a></h4>
											<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
											<div class="mry-fo"><a href="publication.php" class="mry-link mry-default-link">Read more</a></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<ul class="mry-pagination mry-fo">
							<li class="mry-active"><a href="#." class="mry-default-link"><span>1</span></a></li>
							<li><a href="#." class="mry-default-link"><span>2</span></a></li>
							<li><a href="#." class="mry-default-link"><span>3</span></a></li>
							<li><a href="#." class="mry-default-link"><span>4</span></a></li>
							<li><a href="#." class="mry-default-link"><span>5</span></a></li>
						</ul>

					</div>
				</div>
				<!-- blog end -->

				<!-- footer -->
				<?php include_once('websiteParts/footer.php') ?>

				<!-- footer end -->

				<div class="mry-head-bg mry-head-bottom">
					<img src="img/light/projects/prjct-5/1.jpg" alt="background">
					<div class="mry-bg-overlay"></div>
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