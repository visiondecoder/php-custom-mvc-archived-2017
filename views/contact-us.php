<?php
if (isset($_GET['r']) && $_GET['r'] == "s") {
	echo "<script>alert('Thank you for contacting us');
	    location.href='contact-us.php';</script>";
}
?>

<?php include 'header.php';?>

<?php

$DB->SelectTable('cms_pages');
$CMS->setPage('contact');
$contactCMS = $CMS->FetchCMSPage();

?>


		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>contact us</h2>
							<p>Home > <span> Contact Us</span></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Out Slider <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start Contacts <<===== -->

		<section id="contacts-area" class="pt-60 pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-7 pt-40">
						<div class="touch-text">
							<div class="address-title">
								<h6>Get in touch</h6>
							</div>
							<div class="address">
								<i class="fas fa-map-marker-alt"></i>
								<div class="address-text">
									<h6>address</h6>
									<p><?=$contactCMS->address;?></p>
								</div>
							</div>
							<div class="address">
								<i class="fas fa-mobile-alt"></i>
								<div class="address-text">
									<h6>call us</h6>
									<p><?=$contactCMS->contact1;?>
									<br /><?=$contactCMS->contact2;?>
									<br /><?=$contactCMS->contact3;?></p>
								</div>
							</div>
							<div class="address">
								<i class="far fa-envelope-open"></i>
								<div class="address-text">
									<h6>e-mail</h6>
									<p><?=$contactCMS->email1;?></p>
									<p><?=$contactCMS->email2;?></p>
									<p><?=$contactCMS->email3;?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-12 pt-40">
						<form id="contact-form" class="row" action="join_us.php" method="POST">
							<input type="hidden" name="contactus" value="contactus">
							<div class="col-lg-6">
								<div class="contact-form-box">
									<input type="text" class="name-le" name="name" required placeholder="Name"/>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="contact-form-box">
									<input type="email" class="name-rl" name="email" required placeholder="Email"/>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="contact-form-box">
									<input type="text" class="name-le" name="subject" required placeholder="Subject"/>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="contact-form-box">
									<textarea name="message" class="col-12" required placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="contact-form-box">
									<button type="submit" class="btn hvr-shutter-in-vertical pd-r">Submit A Message</button>
								</div>
							</div>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
				<div class="row pt-60">
					<div class="col-lg-12">
						<div id="contact-map"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Contacts <<=====
		============================= -->

<?php include 'footer.php';?>