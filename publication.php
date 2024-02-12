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


	<title>Mireya</title>

	<!-- Normal Meta Etiketleri -->
	<meta name="description" content="Web sayfasının kısa açıklaması burada yer alır.">
	<meta name="keywords" content="Anahtar Kelime 1, Anahtar Kelime 2, Anahtar Kelime 3">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Adınız">
	<meta name="source" content="https://www.sitenizinadresi.com">

	<!-- Twitter için meta etiketleri -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@KullaniciAdi">
	<meta name="twitter:creator" content="@KullaniciAdi">
	<meta name="twitter:title" content="Twitter için Başlık">
	<meta name="twitter:description" content="Twitter için Açıklama">
	<meta name="twitter:image" content="https://www.sitenizinadresi.com/afis.jpg">

	<!-- Facebook için meta etiketleri -->
	<meta property="og:title" content="Facebook için Başlık">
	<meta property="og:description" content="Facebook için Açıklama">
	<meta property="og:image" content="https://www.sitenizinadresi.com/afis.jpg">
	<meta property="og:url" content="https://www.sitenizinadresi.com">
	<meta property="og:site_name" content="Web Sitenizin Adı">

</head>

<body>

	<div class="mry-app">

		<?php
		include_once('websiteParts/preloader.php');
		include_once('websiteParts/cursor.php');
		include_once('websiteParts/menu.php');
		?>

		<!-- menu -->
		<div class="mry-menu">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-4">
						<nav id="mry-dynamic-menu">
							<ul>
								<li class="menu-item menu-item-has-children"><a href="#." class="mry-default-link">Home</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="index.php" class="mry-anima-link mry-default-link">Half slider</a></li>
										<li class="menu-item"><a href="fs-slider.php" class="mry-anima-link mry-default-link">Full width slider</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="about.php" class="mry-anima-link mry-default-link">About</a></li>
								<li class="menu-item menu-item-has-children"><a href="#." class="mry-default-link">Works</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="portfolio-grid-1.php" class="mry-anima-link mry-default-link">Portfolio grid 1</a></li>
										<li class="menu-item"><a href="portfolio-grid-2.php" class="mry-anima-link mry-default-link">Portfolio grid 2</a></li>
										<li class="menu-item"><a href="portfolio-box-1.php" class="mry-anima-link mry-default-link">Portfolio boxed 1</a></li>
										<li class="menu-item"><a href="portfolio-box-2.php" class="mry-anima-link mry-default-link">Portfolio boxed 2</a></li>
										<li class="menu-item"><a href="project.php" class="mry-anima-link mry-default-link">Single project</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="contact.php" class="mry-anima-link mry-default-link">Contact</a></li>
								<li class="menu-item menu-item-has-children current-menu-item"><a href="#." class="mry-default-link">Blog</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="blog.php" class="mry-anima-link mry-default-link">Blog list</a></li>
										<li class="menu-item"><a href="publication.php" class="mry-anima-link mry-default-link">Publication</a></li>
									</ul>
								</li>
							</ul>
						</nav>

					</div>
					<div class="col-md-4">
						<div class="mry-info-box-frame">
							<div class="mry-info-box">
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Country:</div>
									<div class="mry-text">Canada</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">City:</div>
									<div class="mry-text">Toronto</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Adress:</div>
									<div class="mry-text">HTGS 4456 North Av.</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Email:</div>
									<a class="mry-text mry-default-link" href="mailto:mireya.inbox@mail.com">mireya.inbox@mail.com</a>
								</div>
								<div>
									<div class="mry-label mry-mb-5">Phone:</div>
									<a class="mry-text mry-default-link" href="#.">+4 9(054) 996 84 25</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- menu end -->

		<div class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<canvas class="mry-dots" style="display: none"></canvas>

				<div class="mry-head-bg">
					<img src="img/light/projects/prjct-6/1.jpg" alt="background">
					<div class="mry-bg-overlay"></div>
				</div>

				<div class="mry-banner mry-p-140-0">
					<div class="container">
						<div class="mry-main-title mry-title-center">
							<div class="mry-subtitle mry-mb-20 mry-fo">Newsletter</div>
							<h1 class="mry-mb-20 mry-fo">Toronto Affordable <br><span class="mry-border-text">Housing Challenge</span><span class="mry-animation-el"></span></h1>
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

				<!-- publication -->
				<div class="mry-about mry-p-100-100">
					<div class="container">
						<div class="row justify-content-center">

							<div class="col-lg-10">

								<div class="mry-about-video mry-mb-100 mry-fo">
									<div class="mry-video-cover-frame">
										<img class="mry-video-cover" src="img/light/blog/4.jpg" alt="banner">
										<div class="mry-cover-overlay"></div>
										<div class="mry-curtain"></div>
									</div>
								</div>

							</div>

							<div class="col-lg-8">

								<div class="mry-mb-100">
									<div class="mry-subtitle mry-mb-20 mry-fo">29.01.2021</div>
									<h3 class="mry-mb-40 mry-fo">Quidem magni eligendi adipisicing elit sed exercitationem</h3>
									<p class="mry-text mry-mb-40 mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam eius ab, dolores illo commodi totam hic molestias modi
										reprehenderit corrupti odio consequuntur facilis ut rem fugiat, explicabo expedita sint quaerat magni blanditiis autem assumenda. Possimus fuga dolorum, animi
										dolorem, saepe quas magnam sed perferendis, dolores repellendus, dolore quos aspernatur? Itaque blanditiis quod unde dignissimos nostrum quas, dolore maiores
										excepturi eligendi quia, totam delectus dicta assumenda omnis enim. Quidem magni eligendi sed exercitationem harum corporis odit nostrum quae nam nisi officia
										labore, et doloribus ratione tenetur modi odio officiis distinctio! Ducimus pariatur laborum omnis porro debitis labore, reiciendis doloribus non impedit.</p>
									<h3 class="mry-mb-40 mry-fo">Totam delectus dicta assumenda</h3>
									<p class="mry-text mry-fo">Delectus dicta assumenda omnis enim. Quidem magni eligendi sed exercitationem harum corporis odit nostrum quae nam nisi officia labore,
										et doloribus ratione tenetur modi odio officiis distinctio! Ducimus pariatur laborum omnis porro debitis labore, reiciendis doloribus non impedit.</p>
									<blockquote class="mry-fo">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem et, nisi ipsum. Sunt aperiam fuga quae officia neque ab sapiente.
									</blockquote>
									<p class="mry-text mry-mb-40 mry-fo">Quaerat magni blanditiis autem assumenda. Possimus fuga dolorum, animi dolorem, saepe quas magnam sed perferendis, dolores
										repellendus, dolore quos aspernatur? Itaque blanditiis quod unde dignissimos nostrum quas, dolore maiores excepturi eligendi quia, totam delectus dicta
										assumenda omnis enim. Quidem magni eligendi sed exercitationem harum corporis odit nostrum quae nam nisi officia labore, et doloribus ratione tenetur modi odio
										officiis distinctio! Ducimus pariatur laborum omnis porro debitis labore, reiciendis doloribus non impedit.</p>
									<p class="mry-text mry-mb-40 mry-fo">Deiciendis doloribus non impedit.</p>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-subtitle mry-mb-20 mry-fo">Popular</div>
									<h2 class="mry-fo">Popular Publications</h2>
									<div class="mry-arrows mry-fo">
										<div class="mry-sl-nav">
											<div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
											<div class="mry-next mry-button-blog-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
										</div>
										<div class="mry-label mry-fo">Slider Navigation</div>
									</div>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="swiper-container mry-blog-slider">
									<div class="swiper-wrapper">
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
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
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
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
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
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
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">29.01.2021</div>
													<img src="img/light/blog/4.jpg" alt="project">
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
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
				<!-- publication end -->

				<!-- footer -->
				<?php include_once('websiteParts/footer.php') ?>

				<!-- footer end -->

				<div class="mry-head-bg mry-head-bottom">
					<img src="img/light/projects/prjct-2/1.jpg" alt="background">
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