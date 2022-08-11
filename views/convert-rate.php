<?php include 'header.php';?>

		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>convert rate</h2>
							<p>Home > <span>convert rate</span></p>
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
					<div class="col-md-6 marginauto">
						<form method="post" id="currency-form">
							<div class="form-group">
							  <div class="col-md-12 mb-15 floatleft">
							  	<label class="col-md-6 floatleft">From</label>
								<select name="from_currency" id="from_currency" class="col-md-6 floatleft">
									<option value="INR">Indian Rupee</option>
									<option value="USD" selected="1">US Dollar</option>
									<option value="AUD">Australian Dollar</option>
									<option value="EUR">Euro</option>
									<option value="EGP">Egyptian Pound</option>
									<option value="CNY">Chinese Yuan</option>
								</select>
							  </div>
							  <div class="col-md-12 mb-15 floatleft">
							  	<label class="col-md-6 floatleft">Amount</label>
								<input class="col-md-6 floatleft" type="text" placeholder="Currency" name="amount" id="amount" />
							  </div>
							  <div class="col-md-12 mb-15 floatleft">
							  	<label class="col-md-6 floatleft">To</label>
								<select class="col-md-6 floatleft" id="to_currency" name="to_currency">
									<option value="INR" selected="1">Indian Rupee</option>
									<option value="USD">US Dollar</option>
									<option value="AUD">Australian Dollar</option>
									<option value="EUR">Euro</option>
									<option value="EGP">Egyptian Pound</option>
									<option value="CNY">Chinese Yuan</option>
								</select>
							  </div>
							  <div class="col-md-12 floatleft floatcenter mt-20">
							  	<span class="buttonname">
                                 <input class="btn hvr-shutter-in-vertical" id="convert" type="submit" name="convert" value="Convert">
                                </span>
							  </div>



							</div>
						</form>

	<div class="form-group" id="converted_rate"></div>
	<div class="col-md-12 floatleft mt-30">
		<div id="converted_amount"></div>
	</div>

					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Contacts <<=====
		============================= -->


<?php include 'footer.php';?>