<?php
if (isset($_GET['r']) && $_GET['r'] == "s") {
	echo "<script>alert('Thank you for contacting us');
	    location.href='join-us.php';</script>";
}
?>
<?php include 'header.php';?>


		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>join us</h2>
							<p>Home > <span> Join Us</span></p>
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
					<div class="col-lg-12 col-md-12 pt-40">
						<form id="contact-form" class="row" action="join_us.php" method="POST">
							<input type="hidden" name="joinus" value="joinus">
							<div class="col-lg-6">
								<div class="contact-form-box">
									<input type="text" class="name-le" name="companyname" required placeholder="Company Name"/>
								</div>
							</div>
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
							<div class="col-lg-6">
								<div class="contact-form-box">
									<input type="text" class="name-rl" name="number" required placeholder="Contact No"/>
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
			</div>
		</section>

		<!-- =====>> END Contacts <<=====
		============================= -->



<?php include 'footer.php';?>