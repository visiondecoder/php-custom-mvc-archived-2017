<?php include 'header.php';?>

<?php

// imporst
$DB->SelectTable('products');
$importResult = $ProductController->ShowImportsLimit(10);
$totalImportProducts = $importResult->num_rows;

// exports
$exportResult = $ProductController->ShowExportsLimit(10);
$totalExportProducts = $exportResult->num_rows;

// ports
$DB->SelectTable('ports');
$portResult = $PortController->FetchPorts();
$totalPorts = $portResult->num_rows;

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
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body p-30">
                <div class="d-flex pt-3 pb-2 no-block">
                  <div class="align-self-center col-md-3"><img src="imgs/icon/note.svg" alt="" title="" width="55"></div>
                  <div class="align-slef-center mr-auto col-md-8">
                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-pink"><?=$totalImportProducts;?></h2>
                    <h6 class="text-light m-b-0">Total Import</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body p-30">
                <div class="d-flex pt-3 pb-2 no-block">
                  <div class="align-self-center col-md-3"><img src="imgs/icon/badge.svg" alt="" title="" width="55"></div>
                  <div class="align-slef-center mr-auto col-md-8">
                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-primary"><?=$totalExportProducts;?></h2>
                    <h6 class="text-light m-b-0">Total Export</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body p-30">
                <div class="d-flex pt-3 pb-2 no-block">
                  <div class="align-self-center col-md-3"><img src="imgs/icon/users.svg" alt="" title="" width="55"></div>
                  <div class="align-slef-center mr-auto col-md-8">
                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-orange"><?=$totalPorts;?></h2>
                    <h6 class="text-light m-b-0">Total Port</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>


        <!-- Import -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card panel-main o-income panel-refresh">
              <div class="refresh-container">
                <div class="preloader" style="display: none;">
                  <div class="loader">
                    <div class="loader__figure"></div>
                  </div>
                </div>
              </div>
              <div>
                <div class="card-body panel-wrapper">
                  <div class="d-flex m-b-10 no-block">
                    <h5 class="card-title m-b-3 mt-3  align-self-center">Import</h5>
                    <div class="ml-auto text-light-blue">
          <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                      <li>
            <a href="import.php" class="btn waves-effect waves-light btn-rounded btn-primary">Read More</a>
            </li>
            </ul>
                  </div>
                  </div>
                  <div class="table-responsive m-t-10">
                  <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                   <table id="myTable" class="table table-orders color-table table-bordered table-hover product-table">
                    <thead>
                      <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td class="op-0">&nbsp;</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
while ($import = $importResult->fetch_assoc()) {?>


                      <tr>
                        <td><?=$import['id'];?></td>
                        <td><img src="../uploads/<?=$import['image_name'];?>" alt="" title=""></td>
                        <td><?=$import['title'];?></td>
                        <td><?=$import['description'];?></td>
                         <td class="text-center"><a href="edit.php?id=<?=$import['id'];?>">
                          <i class="fas fa-pencil-alt"></i></a></td>
                      </tr>
                      <?php }
?>
                    </tbody>
                  </table>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>


        <!-- Export -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card panel-main o-income panel-refresh">
              <div class="refresh-container">
                <div class="preloader" style="display: none;">
                  <div class="loader">
                    <div class="loader__figure"></div>
                  </div>
                </div>
              </div>
              <div>
                <div class="card-body panel-wrapper">
                  <div class="d-flex m-b-10 no-block">
                    <h5 class="card-title m-b-3 mt-3  align-self-center">Export</h5>
                    <div class="ml-auto text-light-blue">
          <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                      <li>
            <a href="export.php" class="btn waves-effect waves-light btn-rounded btn-primary">Read More</a>
            </li>
            </ul>
                  </div>
                  </div>
                  <div class="table-responsive m-t-10">
                  <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                   <table id="myTable" class="table table-orders color-table table-bordered table-hover product-table">
                    <thead>
                      <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td class="op-0">&nbsp;</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
while ($export = $exportResult->fetch_assoc()) {?>


                      <tr>
                        <td><?=$export['id'];?></td>
                        <td><img src="../uploads/<?=$export['image_name'];?>" alt="" title=""></td>
                        <td><?=$export['title'];?></td>
                        <td><?=$export['description'];?></td>
                         <td class="text-center"><a href="edit.php?id=<?=$export['id'];?>">
                          <i class="fas fa-pencil-alt"></i></a></td>
                      </tr>
                      <?php }
?>
                    </tbody>
                  </table>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
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
 <!-- Date Picker Plugin JavaScript -->
    <script src="plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


 <script>
    // MAterial Date picker

    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
</script>

<!-- Vector map JavaScript -->
    <script src="plugins/vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Dashboard JS -->
<script src="js/dashboard-shop-2.js"></script>

  <!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>


  </body>
</html>