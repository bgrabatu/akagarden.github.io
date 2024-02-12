<?php
include_once('admin/php/main.php');

/* 
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);

for ($i = 0; $i < count($url_segments); $i++) {
    echo "Index " . $i . ": " . $url_segments[$i] . "<br>";
}
*/

//BENZER URUNLER LISTELEME KODU

$tableNameProject = "project";
if (isset($_SERVER['REQUEST_URI'])) {

	$url_segments = explode('/', $_SERVER['REQUEST_URI']);
	$project_type = $url_segments[3];
	$id = validate($project_type);

	if ($id == "mimari-danismanlik") {
		$id = "MimariDanismanlik";
	} else if ($id == "ic-mekan-tasarimi") {
		$id = "IcMekanTasarimi";
	} else if ($id == "dis-mekan-tasarimi") {
		$id = "DisMekanTasarimi";
	}

	$condition = ['project_type' => $id];
	$columns = ['project_id ', 'project_name', 'project_short_description', 'project_description', 'project_result_description', 'project_tags', 'project_type', 'project_main_image', 'project_detail_image_1', 'project_detail_image_2', 'project_detail_image_3', 'project_detail_image_4', 'project_detail_image_5', 'project_detail_image_6', 'project_small_image', 'project_display_status', 'project_enable_comment', 'project_date_time', 'project_meta_title', 'project_meta_author', 'project_meta_description', 'project_meta_keywords'];
	$fetchDataProjectDetailsSimilar = fetch_data_project_similar($db, $tableNameProject, $columns, $condition);
}



function fetch_data_project_similar($db, $tableNameProject, $columns, $condition)
{
	if (empty($db)) {
		$msg = "Veritabanı bağlantı hatası";
	} elseif (empty($columns) || !is_array($columns)) {
		$msg = "Sütun adları dizide tanımlanmalıdır";
	} elseif (empty($tableNameProject)) {
		$msg = "Tablo adı boş";
	} else {
		$columnName = implode(", ", $columns);
		$conditionData = '';
		$i = 0;
		foreach ($condition as $index => $data) {
			$and = ($i > 0) ? ' AND ' : '';
			$conditionData .= $and . $index . " = " . "'" . $data . "'";
			$i++;
		}
		$query = "SELECT " . $columnName . " FROM $tableNameProject";
		$query .= " WHERE " . $conditionData;
		$query .= " AND project_display_status = 1";
		$result = $db->query($query);

		if ($result) {
			if ($result->num_rows > 0) {
				$row = array();
				while ($data = $result->fetch_assoc()) {
					$row[] = $data;
				}
				$msg = $row;
			} else {
				$msg = "Aranan Veri Bulunamadı";
			}
		} else {
			$msg = "Sorgu hatası: " . $db->error;
		}
	}

	return $msg;
}



$projectShortDescription = $fetchDataProjectDetails['project_short_description'];
$projectDescription = $fetchDataProjectDetails['project_description'];
$projectResultDescription = $fetchDataProjectDetails['project_result_description'];
$projectName = $fetchDataProjectDetails['project_name'];


$projectShortDescription = kelimeleriAyir($projectShortDescription);
$projectDescription = kelimeleriAyir($projectDescription);
$projectResultDescription = kelimeleriAyir($projectResultDescription);
$projectName = kelimeleriAyir($projectName);

$projectKeywords = $projectShortDescription . "," . $projectDescription . $projectResultDescription . "," . $projectName;



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

	<title><?php echo $fetchDataProjectDetails['project_name'] ?> | AKA: Special Outdoor Spaces with Natural Stones</title>

	<!-- Normal Meta Etiketleri -->
	<meta name="description" content="Kaleli Mimarlık Ofisi, estetik ve sürdürülebilir mekânlar tasarlar.">
	<meta name="keywords" content="<?php echo $projectKeywords ?>">
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
							<div class="mry-subtitle mry-mb-20 mry-fo">AKA</div>
							<h1 class="mry-mb-20 mry-fo"><span class="mry-border-text"><?php echo $fetchDataProjectDetails['project_name'] ?></span><span class="mry-animation-el"></span></h1>
							<div class="mry-text mry-fo"><?php echo $fetchDataProjectDetails['project_tags'] ?></div>
							<div class="mry-scroll-hint-frame">
								<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
									<span class="mry-magnetic-object"></span>
								</a>
								<div class="mry-label mry-fo">SCROLL DOWN</div>
							</div>
						</div>
					</div>
				</div>

				<!-- project -->
				<div class="mry-about mry-p-100-100">
					<div class="container">
						<div class="row justify-content-center">

							<div class="col-lg-8">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">01</div>
										<div class="mry-subtitle">About the Project</div>
									</div>
									<h3 class="mry-mb-40 mry-fo"><span class="mry-title-text">Every Project, an Architectural Masterpiece:</span> <br><?php echo $fetchDataProjectDetails['project_name'] ?></h3>
									<p class="mry-text mry-fo"><?php echo $fetchDataProjectDetails['project_description'] ?></p>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">02</div>
										<div class="mry-subtitle">Project</div>
									</div>
									<h2 class="mry-fo">Project Drafts</h2>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-portfolio-frame">
									<div class="mry-masonry-grid mry-without-descr mry-p-0-100">
										<div class="mry-grid-sizer"></div>

										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_1'] ?>" alt="project">
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_1'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 mry-masonry-grid-item-h-x-2 repair">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-cover-overlay"></div>
													<img src="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_2'] ?>" alt="project">
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_2'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior repair">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_3'] ?>" alt="project">
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_3'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 mry-masonry-grid-item-h-x-2 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_4'] ?>" alt="project">
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_4'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_5'] ?>" alt="project">
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_5'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_6'] ?>" alt="project">
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="admin/architecture/<?php echo $fetchDataProjectDetails['project_detail_image_6'] ?>" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">03</div>
										<div class="mry-subtitle">The Project Outcome</div>
									</div>
									<h3 class="mry-mb-40 mry-fo"><span class="mry-title-text">The Product of Our Creative Vision:</span><br> <?php echo $fetchDataProjectDetails['project_name'] ?>
									</h3>
									<p class="mry-text mry-fo"><?php echo $fetchDataProjectDetails['project_result_description'] ?></p>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-subtitle mry-mb-20 mry-fo">Other Projects</div>
									<h2 class="mry-fo">Similar Projects</h2>
									<div class="mry-arrows mry-fo">
										<div class="mry-sl-nav">
											<div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
											<div class="mry-next mry-button-blog-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="swiper-container mry-blog-slider">
									<div class="swiper-wrapper">
										<?php
										if (is_array($fetchDataProjectDetailsSimilar)) {
											$sn = 1;
											foreach ($fetchDataProjectDetailsSimilar as $data) {

												$project_type = $data['project_type'];
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
												<div class="swiper-slide">

													<div class="mry-card-item">
														<div class="mry-card-cover-frame mry-mb-20 mry-fo">
															<div class="mry-badge"><?php
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
																					?></div>
															<img src="admin/architecture/<?php echo $data['project_small_image'] ?>" alt="project">
															<div class="mry-cover-overlay"></div>
															<div class="mry-hover-links">
																<a href="admin/architecture/<?php echo $data['project_small_image'] ?>" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
																<a href="project.php?<?php echo $url ?>" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
															</div>
														</div>
														<div class="mry-item-descr mry-fo">
															<h4 class="mry-mb-10"><a href="project.php"><?php echo $data['project_name'] ?></a></h4>
															<div class="mry-text"><?php echo $data['project_short_description'] ?>.</div>
														</div>
													</div>

												</div>

										<?php
												$sn++;
											}
										} else {
											echo $fetchDataProjectDetailsSimilar;
										} ?>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
				<!-- project end -->

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