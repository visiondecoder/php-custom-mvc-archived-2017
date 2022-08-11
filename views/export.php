<?php include 'header.php';?>

<?php
// exports
$DB->SelectTable('products');
$exportResult = $ProductController->ShowExportsLimit(8);
$totalExportProducts = $exportResult->num_rows;
?>

		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>Export</h2>
							<p>Home > <span>Export</span></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =====>> END Out Slider <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start Export Content <<===== -->

		<section id="event-content-area" class="pt-70 pb-100">
			<div class="container">
				<div class="row">

					<?php
while ($exportProducts = $exportResult->fetch_object()) {?>
						<div class="col-lg-4 col-md-6 pt-30">
							<div class="event-item">
								<div class="event-item-img">
									<img src="<?=ROOT_DOMAIN . "uploads/$exportProducts->image_name";?>" alt="" />
								</div>
								<div class="event-text">
									<h6 class="mb-15"> <a href="product-detail.php?id=<?=$exportProducts->id;?>"><?=$exportProducts->title;?></a> </h6>
									<span><?=$exportProducts->description;?></span>
								</div>
							</div>
						</div>
					<?php }?>

				</div>
			</div>
		</section>

		<!-- =====>> END Export Content <<=====
		============================= -->

<?php include 'footer.php';?>