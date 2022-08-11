<?php include 'header.php';?>


<?php

$id = $_GET['id'];

$DB->SelectTable('testimonials');
$clientResult = $TestimonialController->GetOne($id);

while ($record = $clientResult->fetch_assoc()) {
	$name = $record['client_name'];
	$message = $record['client_message'];
}

$clientApi = $domainName . "testimonial.api.php";

?>

<?php include 'left-site.php';?>


    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">



      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title m-b-40 mt-3 align-self-center">Edit Testimonials</h5>
                <div class="row">
                  <!-- End of product slider -->
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <div class="form-wrap form-wrap2 mt-4">
                        <form class="form-horizontal" method="post" action="<?=$clientApi;?>" enctype="multipart/form-data">
                        <input type="hidden" name="formAction" value="update">
                        <input type="hidden" name="id" value="<?=$id;?>">
                          <div class="col-sm-12 col-xs-12">
                            <div class="form-group m-b-15">
                              <label class="control-label text-primary font-12 m-b-5">Client Name</label>
                              <div>
                                <input type="text" name="client_name" value="<?=$name;?>" class="form-control font-14" placeholder="Name">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-12 col-xs-12">
                            <div class="form-group m-b-15">
                              <label class="control-label text-primary font-12 m-b-5">Client Comment</label>
                              <div>
                                <input type="text" name="client_message" value="<?=$message;?>" class="form-control font-14" placeholder="Name">
                              </div>
                            </div>
                          </div>

                          <div class="clearfix"></div>
                          <div class="form-group row m-l-0 m-b-10">
                            <div class="col-md-12  col-xs-12 text-right">
                              <div class="p-l-15 p-r-15">
                                <span class="buttonname">
                               <!--    <input class="inputbut" type="submit" name="submit"> -->
                                  <input type="submit" name="submit" value="submit" class="inputbut" placeholder="submit">
                                </span>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>





        </div>




  <?php include 'footer.php';?>


<script src="plugins/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="plugins/vendors/bootstrap/js/popper.min.js"></script>
<script src="plugins/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="plugins/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="plugins/vendors/d3/d3.min.js"></script>
<script src="plugins/vendors/c3-master/c3.min.js"></script>
<!--jquery knob -->
<script src="plugins/vendors/knob/jquery.knob.js"></script>
<!--Sparkline JavaScript -->
<script src="plugins/vendors/sparkline/jquery.sparkline.min.js"></script>
<!--Morris JavaScript -->
<script src="plugins/vendors/raphael/raphael-min.js"></script>
<script src="plugins/vendors/morrisjs/morris.js"></script>
<!-- Popup message jquery -->
<script src="plugins/vendors/toast-master/js/jquery.toast.js"></script>
<!-- Tag input Jquery -->
<script src="plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="plugins/vendors/switchery/dist/switchery.min.js"></script>
<script>
    $(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

    });
    </script>
<!-- product jquery -->
<script src="plugins/vendors/product-slider/product-slider.js"></script>
<script src="plugins/vendors/product-slider/product-slider.init.js"></script>
<!-- jQuery file upload -->
<script src="plugins/vendors/dropify/dist/js/dropify.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>