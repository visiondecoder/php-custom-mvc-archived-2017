<?php include 'header.php';?>

<?php
// homeAbout
$DB->SelectTable('cms_pages');
$CMS->setPage('about');
$aboutCMS = $CMS->FetchCMSPage();
?>
		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>About Us</h2>
							<p>Home > <span>About Us</span></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Out Slider <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start About Content <<===== -->

		<section id="about-content-area" class="pt-95 pb-100 about-content-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-cycling-text about-text">
							<h3><?=$aboutCMS->title;?></h3>
							<p class="about"><?=$aboutCMS->content1;?></p>
							<br />
							<p><?=$aboutCMS->content2;?></p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-img">
							<img src="<?=ROOT_DOMAIN . "uploads/$aboutCMS->image1";?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END About Content <<=====
		============================= -->

<?php include 'footer.php';?>