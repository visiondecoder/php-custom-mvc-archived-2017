<?php include 'header.php';?>

<?php
// imporst
$DB->SelectTable('products');
$importResult = $ProductController->ShowImports();
$totalImportProducts = $importResult->num_rows;
?>


		<!-- ===========================
    	=====>> Start Out Slider <<===== -->

		<section id="about-area" class="out-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="out-slider-content">
							<h2>Import</h2>
							<p>Home > <span>Import</span></p>
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

					<?php
while ($importProducts = $importResult->fetch_object()) {?>
						<div class="col-lg-4 col-md-6 pt-30">
							<div class="event-item">
								<div class="event-item-img thummailproduct">
									<img src="<?=ROOT_DOMAIN . "uploads/$importProducts->image_name";?>" alt="" />
								</div>
								<div class="event-text">
									<h6 class="mb-15"> <a href="product-detail.php?id=<?=$importProducts->id;?>"><?=$importProducts->title;?></a> </h6>
									<span><?=$importProducts->description;?></span>
								</div>
							</div>
						</div>
					<?php }?>

				</div>
			</div>
		</section>

		<!-- =====>> END Import Content <<=====
		============================= -->

<?php include 'footer.php';?>