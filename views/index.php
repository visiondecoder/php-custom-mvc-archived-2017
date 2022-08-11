<?php include 'header.php';?>

<?php

//slider
$DB->SelectTable('sliders');
$sliders = $CMS->getHomeSlider();

// homeAbout
$DB->SelectTable('cms_pages');
$CMS->setPage('about');
$aboutCMS = $CMS->FetchCMSPage();

// imporst
$DB->SelectTable('products');
$importResult = $ProductController->ShowImportsLimit(8);
$totalImportProducts = $importResult->num_rows;

// exports
$exportResult = $ProductController->ShowExportsLimit(8);
$totalExportProducts = $exportResult->num_rows;

// ports
$DB->SelectTable('ports');
$portResult = $PortController->FetchPorts();
$totalPorts = $portResult->num_rows;

// testimonails
$DB->SelectTable('testimonails');
$clientResult = $TestimonialController->GetRandom();

?>

		<!-- ===========================
    	=====>> Start Slider <<===== -->

		<section id="Home-area" class="header">
			<div class="fullslider owl-carousel owl-theme">
				<!-- slider item -->
				<div class="item single-header-slider">
					<span>
						<img src="<?=ROOT_DOMAIN;?>uploads/<?=$sliders->slider1;?>" alt="" />
					</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-left dis-tab">
								<div class="slider-all-text">
									<h1><?=$sliders->slider_text1;?> </h1>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- slider item -->
				<div class="item single-header-slider">
					<span>
						<img src="<?=ROOT_DOMAIN;?>uploads/<?=$sliders->slider2;?>" alt="" />
					</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-left dis-tab">
								<div class="slider-all-text">
									<h1><?=$sliders->slider_text2;?> </h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- slider item -->
				<div class="item single-header-slider">
				    <span>
						<img src="<?=ROOT_DOMAIN;?>uploads/<?=$sliders->slider3;?>" alt="" />
					</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-left dis-tab">
								<div class="slider-all-text">
									<h1><?=$sliders->slider_text3;?> </h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Slider <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start About Cycling  <<===== -->

		<section id="about-cycling-area" class="pt-90 pb-90">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2>About Us </h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="about-cycling-item col-12 padding-0">
							<img src="<?=ROOT_DOMAIN;?>uploads/<?=$aboutCMS->image1;?>" alt="about cycling" />
						</div>

					</div>
					<div class="col-lg-6">
						<div class="about-cycling-text">
							<h3><?=$aboutCMS->title;?></h3>
							<p class="about"><?=$aboutCMS->content1;?></p>
							<a class="btn hvr-shutter-in-vertical" href="about-us.php">LEARN MORE</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END About Cycling  <<=====
		============================= -->



		<!-- ===========================
    	=====>> Start import  <<===== -->

		<section id="what-do-area" class=" what-do-area s-bg pt-90 pb-90">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2>Import</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="what-do-slier owl-carousel owl-theme">
						<?php
while ($importProducts = $importResult->fetch_object()) {?>
						<div class="item single-what-do-item">
							<div class="col-lg-12 ">
								<div class="event-item what-do-item">
									<div class="event-item-img">
										<img src="<?=ROOT_DOMAIN . "uploads/$importProducts->image_name";?>" alt="">
									</div>
									<div class="event-text">
										<h6>
<a href="product-detail.php?id=<?=$importProducts->id;?>">
											<?=$importProducts->title;?>
											</a> </h6>
										<span  class="mt-10"><?=$importProducts->description;?></span>
									</div>
								</div>
							</div>
						</div>
<?php }
?>
					</div>
					<div class="mt-10 col-md-12">
						<a class="btn hvr-shutter-in-vertical rightbtn" href="import.php">View All</a>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END import  <<=====
		============================= -->


		<!-- ===========================
    	=====>> Start export  <<===== -->

		<section id="what-do-area" class=" what-do-area pt-90 pb-90">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2>Export</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="what-do-slier owl-carousel owl-theme">
						<?php
while ($exportProducts = $exportResult->fetch_object()) {?>
						<div class="item single-what-do-item">
							<div class="col-lg-12 ">
								<div class="event-item what-do-item">
									<div class="event-item-img">
										<img src="<?=ROOT_DOMAIN . "uploads/$exportProducts->image_name";?>" alt="">
									</div>
									<div class="event-text">
										<h6>
<a href="product-detail.php?id=<?=$exportProducts->id;?>">
											<?=$exportProducts->title;?>
</a>
											 </h6>
										<span class="mt-10"><?=$exportProducts->description;?></span>
									</div>
								</div>
							</div>
						</div>
<?php }
?>
					</div>
					<div class="mt-10 col-md-12">
						<a class="btn hvr-shutter-in-vertical rightbtn" href="export.php">View All</a>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END export  <<=====
		============================= -->




		<!-- ===========================
    	=====>> Start ports <<===== -->

		<section id="our-services-area" class="pt-90 pb-90 s-bg our-services-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2>Ports</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">

						<?php
$portInc = 0;
while ($records = $portResult->fetch_assoc()) {

	if ($portInc === 9) {
		break;
	}
	?>

							<div class="services-item col-md-4 floatleft">
							<div class="services-item-text">
								<i class="flaticon-startup"></i>
								<h4><?=$records['port_name'];?></h4>
							</div>
						</div>
						<?php $portInc++;}
?>

					</div>
					<div class="mt-10 col-md-12">
						<a class="btn hvr-shutter-in-vertical rightbtn" href="ports.php">View All</a>
					</div>
				</div>

			</div>
		</section>

		<!-- =====>> END port  <<=====
		============================= -->

		<!-- start testimonial -->

			<!-- testimonial -->

	<section id="what-do-area" class=" what-do-area  pt-90 pb-95">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2>Happy Client's</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="what-do-slier owl-carousel owl-theme">

						<?php
while ($record = $clientResult->fetch_assoc()) {?>
												<div class="item single-what-do-item">
							<div class="col-lg-12 ">
								<div class="what-do-item">
									<i class="fas fa-quote-right"></i>
									<p><?=$record['client_message'];?></p>
									<div class="proe">
										<h6><?=$record['client_name'];?></h6>
									</div>
								</div>
							</div>
						</div>
						<?php }
?>

					</div>
				</div>
			</div>
		</section>

		<!-- end testimonial -->





<?php include 'footer.php';?>