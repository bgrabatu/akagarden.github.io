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

	<title>Contact | AKA: Special Outdoor Spaces with Natural Stones</title>


	<!-- Normal Meta Etiketleri -->
	<meta name="description" content="Kaleli Mimarlık Ofisi, estetik ve sürdürülebilir mekânlar tasarlar.">
	<meta name="keywords" content="İLETIŞIM, Sormak, istediğiniz, bir, şey, var, mı?, Bize, bir, mesaj, yazın., Sizinle, yaratıcı, bir, iletişim, kurmayı, dört, gözle, bekliyoruz!, KONUM, Bizi, Ziyaret, Edin, İLETIŞIM, Konuşalım, Mı?, İLETIŞIM, FORMU, Bize, bir, mesaj, yazın, Kişisel, bilgilerinizi, üçüncü, şahıslarla, paylaşmayacağımıza, söz, veriyoruz, HARITA, Bizi, Ziyaret, Edin">
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
							<div class="mry-subtitle mry-mb-20 mry-fo">Contact</div>
							<h1 class="mry-mb-20 mry-fo">Do you have any questions?<br><span class="mry-border-text">Write us a message</span><span class="mry-animation-el"></span></h1>
							<div class="mry-text mry-fo">We look forward to engaging in creative <br>communication with you!</div>
							<div class="mry-scroll-hint-frame">
								<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
									<span class="mry-magnetic-object"></span>
								</a>
								<div class="mry-label mry-fo">SCROLL DOWN</div>
							</div>
						</div>
					</div>
				</div>

				<!-- contact -->
				<div class="mry-about mry-p-100-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">

								<div class="row">
									<div class="col-lg-6">

										<div class="mry-mb-100 mry-text-center">
											<div class="mry-numbering mry-fo">
												<div class="mry-border-text">01</div>
												<div class="mry-subtitle">Location</div>
											</div>
											<div class="mry-fade-object mry-mb-100">
												<h4 class="mry-mb-20 mry-fo">Visit Us</h4>
												<p class="mry-text mry-mb-20 mry-fo">
													<a href="<?php echo $editDataContact['address_iframe'] ?>" target="_blank" style="text-decoration: none;" class="mry-default-link"> <?php echo $editDataContact['country'] ?>, <?php echo $editDataContact['city'] ?>,<br><?php echo $editDataContact['address'] ?></a>
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">

										<div class="mry-mb-100 mry-text-center">
											<div class="mry-numbering mry-fo">
												<div class="mry-border-text">02</div>
												<div class="mry-subtitle">Contact</div>
											</div>
											<?php
											$phone = $editDataContact['phone'];
											$phone = str_replace(' ', '', $phone);

											?>
											<div class="mry-fade-object mry-mb-100">
												<h4 class="mry-mb-20 mry-fo">Shall we talk?</h4>
												<p class="mry-text mry-fo">Email:<a href="mailto:mireya.inbox@mail.com" style="text-decoration: none;" class="mry-default-link"> <?php echo $editDataContact['email'] ?></a>
													<br>Phone: <a href="tel:<?php echo $phone ?>" style="text-decoration: none;" class="mry-default-link"><?php echo $editDataContact['phone'] ?></a>
												</p>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">03</div>
										<div class="mry-subtitle">CONTACT FORM</div>
									</div>
									<h2 class="mry-fo">Write us a message</h2>
								</div>

							</div>

							<div class="col-lg-8">

								<form method="POST" id="form" class="mry-form mry-mb-100" action="send.php">

									<div class="row">
										<div class="col-lg-6">
											<label class="mry-label mry-fo" for="firstName">Name</label>
											<div class="mry-fo"><input id="firstName" name="firstName" placeholder="Your Name" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required>
											</div>
										</div>
										<div class="col-lg-6">
											<label class="mry-label mry-fo" for="lastName">Surname</label>
											<div class="mry-fo"><input id="lastName" name="lastName" placeholder="Your Surname" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6">
											<label class="mry-label mry-fo" for="email">E-Mail</label>
											<div class="mry-fo"><input id="email" name="email" placeholder="info@email.com" class="mry-default-link" type="email" required></div>
										</div>
										<div class="col-lg-6">
											<label class="mry-label mry-fo" for="phone">Phone</label>
											<div class="mry-fo"><input id="phone" name="phone" placeholder="(0000) 000 00 00" class="mry-default-link" type="text" data-parsley-pattern="^\+{1}[0-9]+$"></div>
										</div>
									</div>

									<div class="mry-fade-object">
										<label class="mry-label mry-fo" for="message">Message</label>
										<div class="mry-fo">
											<textarea id="message" name="message" rows="8" cols="80" placeholder="Write your message here" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" required></textarea>
										</div>
									</div>
									<div class="row align-items-center">
										<div class="col-lg-4">
											<div class="mry-fo"><button type="submit" class="mry-btn mry-default-link">Send Message</button></div>
										</div>
										<div class="col-lg-8">
											<p class="mry-text mry-simple-text mry-contact-hint mry-fo"><span class="mry-color-text">*</span> We promise not to share your personal information with third parties.</p>
										</div>
									</div>
								</form>

							</div>

							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">04</div>
										<div class="mry-subtitle">Map</div>
									</div>
									<h2 class="mry-fo">Visit Us</h2>
								</div>

							</div>

							<div class="col-lg-10">

								<div class="mry-map-frame mry-mb-100 mry-fo">
									<div id='map-light' class="mry-map mry-map-light"> </div>
									<div class="mry-lock mry-magnetic-link"><i class="fas fa-lock mry-magnetic-object"></i></div>
									<div class="mry-curtain"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- contact end -->

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