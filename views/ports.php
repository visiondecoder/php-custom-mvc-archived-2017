<?php include 'header.php';?>

		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>ports</h2>
							<p>Home > <span>Ports</span></p>
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
						<ul class="iconlist iconlist-color nobottommargin">
							<?php
$DB->SelectTable('ports');
$allports = $PortController->FetchPorts();
while ($port = $allports->fetch_assoc()) {?>
					        <li class="col-md-3 col-xs-6 portscss"><?=$port['port_name'];?></li>
<?php }
?>

					      </ul>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Contacts <<=====
		============================= -->


<?php include 'footer.php';?>