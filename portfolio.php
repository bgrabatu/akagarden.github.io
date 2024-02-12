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

	<title>Portfolio | AKA: Special Outdoor Spaces with Natural Stones</title>

	<!-- Normal Meta Etiketleri -->
	<meta name="description" content="Kaleli Mimarlık Ofisi, estetik ve sürdürülebilir mekânlar tasarlar.">
	<meta name="keywords" content="PORTFOLYO, Mimarlık, Serüvenimiz, Portfolyomuz, iç, mekan, tasarımından, dış, mekan, projelerine, konutlardan, ticari, alanlara, kadar, farklı, alanlardaki, çalışmalarımızı, içeriyor., Her, proje, işlevsellik, ve, estetik, arasında, mükemmel, bir, denge, oluşturmak, için, özenle, tasarlanır. Müşterilerimizin, ihtiyaçlarını, anlamak, ve, onların, hayallerini, gerçeğe, dönüştürmek, bizi, heyecanlandıran, en, önemli, parçalardan, biridir.">
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
					<img src="img/light/projects/prjct-6/1.jpg" alt="background">
					<div class="mry-bg-overlay"></div>
				</div>

				<div class="mry-banner mry-p-140-0">
					<div class="container">
						<div class="mry-main-title mry-title-center">
							<div class="mry-subtitle mry-mb-20 mry-fo">Portfolio</div>
							<h1 class="mry-mb-20 mry-fo">Explore the Colors of Life in Your <br><span class="mry-border-text">Garden with the Aesthetic Dance of Natural Stones</span><span class="mry-animation-el"></span></h1>
							<div class="mry-text mry-fo">At AKA, we don't just transform gardens and living areas; we craft a narrative woven with the elegance of nature's beauty. Each project is our canvas, where natural stones form the brushstrokes, and harmony becomes our palette.</div>
							<div class="mry-scroll-hint-frame">
								<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
									<span class="mry-magnetic-object"></span>
								</a>
								<div class="mry-label mry-fo">SCROLL DOWN</div>
							</div>
						</div>
					</div>
				</div>

				<!-- portfolio -->
				<div class="mry-portfolio mry-p-100-100">
					<div class="container">

						<div class="mry-filter mry-mb-40 mry-fo">
							<a href="#" data-filter="*" class="mry-card-category mry-default-link mry-current">All Designs</a>
							<a href="#" data-filter=".MimariDanismanlik" class="mry-card-category mry-default-link">Architectural Consultancy</a>
							<a href="#" data-filter=".IcMekanTasarimi" class="mry-card-category mry-default-link">Interior Design</a>
							<a href="#" data-filter=".DisMekanTasarimi" class="mry-card-category mry-default-link">Outdoor Design</a>
						</div>

						<div class="mry-portfolio-frame">
							<div class="mry-masonry-grid">
								<div class="mry-grid-sizer"></div>

								<?php
								if (is_array($editDataProject)) {
									$sn = 1;
									foreach ($editDataProject as $data) {

										$project_url_name = $data['project_name'];
										$project_url_id = $data['project_id'];
										$seo_name = turkce_karakterleri_temizle($project_url_name);

										if ($data['project_type'] == "IcMekanTasarimi") {
											$project_type = "İç Mekan Tasarımı";
											$project_type = turkce_karakterleri_temizle($project_type);
											// SEO uyumlu URL'yi oluştur
											$url = "/$project_type/" . $seo_name
												. "/$project_url_id";
										} else if ($data['project_type'] == "DisMekanTasarimi") {
											$project_type = "Dış Mekan Tasarımı";
											$project_type = turkce_karakterleri_temizle($project_type);
											// SEO uyumlu URL'yi oluştur
											$url = "/$project_type/" . $seo_name
												. "/$project_url_id";
										} else if ($data['project_type'] == "MimariDanismanlik") {
											$project_type = "Mimari Danışmanlık";
											$project_type = turkce_karakterleri_temizle($project_type);
											// SEO uyumlu URL'yi oluştur
											$url = "/$project_type/" . $seo_name
												. "/$project_url_id";
										}

								?>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 mry-masonry-grid-item-h-x-2 <?php echo $data['project_type'] ?>">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">
														<?php
														if ($data['project_type'] == "IcMekanTasarimi") {
															$project_type = "İç Mekan Tasarımı";
															echo $project_type;
														} else if ($data['project_type'] == "DisMekanTasarimi") {
															$project_type = "Dış Mekan Tasarımı";
															echo $project_type;
														} else if ($data['project_type'] == "MimariDanismanlik") {
															$project_type = "Mimari Danışmanlık";
															echo $project_type;
														}
														?>
													</div>
													<img src="admin/architecture/<?php echo $data['project_main_image'] ?>" alt="project">
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $data['project_main_image'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
														<a href="project.php?<?php echo $url ?>" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-mb-10"><a href="project.php"><?php echo $data['project_name'] ?></a></h4>
													<div class="mry-text"><?php echo $data['project_short_description'] ?></div>
												</div>
											</div>

										</div>

								<?php
										$sn++;
									}
								} else {
									echo $editDataProject;
								} ?>

							</div>
						</div>
					</div>
				</div>
				<!-- portfolio end -->

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