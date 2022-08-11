<?php

// homeAbout
$DB->SelectTable('cms_pages');
$CMS->setPage('about');
$aboutCMS = $CMS->FetchCMSPage();

$DB->SelectTable('cms_pages');
$CMS->setPage('contact');
$contactCMS = $CMS->FetchCMSPage();

// cms contents
$DB->SelectTable('cms_contents');
$cmsContents = $CMS->FetchCMSContents();

?>

<!-- ===========================
    	=====>> Start Footer <<===== -->

		<footer id="footer-area" class="pt-50 pb-75 footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 pt-30">
						<div class="footer-item">
							<a href="index.php" class="f-logo"><img src="<?=ROOT_DOMAIN . 'uploads/' . $cmsContents->website_logo;?>" alt="" /></a>
							<p><?=$aboutCMS->content1;?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 pt-30">
						<div class="footer-item">
							<h3>Other Link</h3>
							<ul>
								<li><a href="import.php">Imort</a></li>
								<li><a href="export.php">Export</a></li>
								<li><a href="#">Tearm & Condition </a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 pt-30">

						<div class="footer-add">
								<p><span>Address:</span>
								<br /><?=$contactCMS->address;?></p>

								<p><span>Call Us:</span>
								<br /><?=$contactCMS->contact1;?></p>

								<p><span>Email:</span>
								<br /><?=$contactCMS->email1;?></p>
							</div>

					</div>
					<div class="col-lg-3 col-md-6 pt-30">
						<div class="socile-footer">
							<h3>Social Link</h3>
								<a href="<?=$cmsContents->facebook_link;?>"><i class="fab fa-facebook-f"></i></a>
								<a href="<?=$cmsContents->twitter_link;?>"><i class="fab fa-twitter"></i></a>
								<a href="<?=$cmsContents->linkedin_link;?>"><i class="fab fa-linkedin-in"></i></a>
							</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- =====>> END Footer <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start copy-right <<===== -->

		<div id="copy-right" class="text-center">
			<p><span>localhost</span> © 2018. All Rights Reserved  | <a class="textcolor" href="http://visiondecoder.com" target="blank">Design and Develop by H2L Labs</a> </p>
		</div>

		<!-- =====>> END copy-right <<=====
		============================= -->


		<!-- =======>> IMPOTRANT MAIN JS <<======= -->
        <script src="<?=VIEWS;?>js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?=VIEWS;?>js/vendor/jquery.min.js"></script>
        <script src="<?=VIEWS;?>js/vendor/popper.js"></script>
        <script src="<?=VIEWS;?>js/vendor/bootstrap.min.js"></script>
		<!--====>> navbar JS <<====-->
        <script src="<?=VIEWS;?>js/bootstrap-4-hover-navbar.js"></script>
		<!--====>> wow animat JS <<====-->
        <script src="<?=VIEWS;?>js/wow.min.js"></script>
		<!--====>> parallax JS <<====-->
        <script src="<?=VIEWS;?>js/parallax.min.js"></script>
		<!--====>> Carousel JS <<====-->
        <script src="<?=VIEWS;?>js/owl.carousel.min.js"></script>
		<!--====>> magnific popup JS <<====-->
        <!-- <script src="<?=VIEWS;?>js/jquery.magnific-popup.min.js"></script> -->
		<!--====>> IsoTope JS <<====-->
		<script src="<?=VIEWS;?>js/isotope.pkgd.min.js"></script>
		<script src="<?=VIEWS;?>js/imagesloaded.pkgd.js"></script>
		<!--====>> scrolltotop JS <<====-->
		<script src="<?=VIEWS;?>js/scrolltotop.js"></script>
		<!--====>> preloader JS <<====-->
        <script src="<?=VIEWS;?>js/preloader.js"></script>
		<!--====>> scripts JS <<====-->
        <script src="<?=VIEWS;?>js/scripts.js"></script>
        <!--====>> convert JS <<====-->
        <script src="<?=VIEWS;?>js/ajax-convertrate.js"></script>
        <script src="<?=VIEWS;?>js/validation.min-convertrate.js"></script>
    </body>

</html>
