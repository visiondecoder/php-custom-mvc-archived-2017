<?php include 'header.php';?>

<?php

$pid = $_GET['id'];

// product
$DB->SelectTable('products');
$products = $ProductController->Show($pid);

$DB->SelectTable('product_images');
$productImages = $ProductController->FetchAllImages($pid);

?>


		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>Product Detail</h2>
							<!-- <p>Home > Import <span>Product Detail</span></p> -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Out Slider <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start Import Content <<===== -->

		<section id="event-content-area" class="pt-70 pb-100">
			<div class="container">
				<div class="row">


						<div class="col-md-12">
						<div class="col-md-6 pt-30 floatleft">



						<div class="fullslider owl-carousel owl-theme">
				<!-- slider item -->
				<?php

foreach ($productImages as $image) {?>


							<div class="item single-header-slider">
								<span>
									<img src="<?=ROOT_DOMAIN;?>uploads/<?=$image['image_name'];?>" alt="" />
								</span>

							</div>
											<?php }?>
						</div>

					</div>


						<div class="col-md-6 pt-30 floatleft">
						<?php
foreach ($products as $product) {
	?>
							<div class="event-item">
								<div class="event-text">
									<h6> <?=$product['title'];?> </h6>
									<span><?=$product['description'];?></span>
								</div>
							</div>
					<?php }?>
						</div>
						</div>

				</div>
			</div>
		</section>

		<!-- =====>> END Import Content <<=====
		============================= -->

<?php include 'footer.php';?>