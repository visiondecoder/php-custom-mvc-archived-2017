<?php include 'header.php';?>

<?php

$DB->SelectTable('products');
$exportResult = $ProductController->ShowExports();
$totalExportProducts = $exportResult->num_rows;
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
                <div class="d-flex m-b-10 no-block">
                  <h5 class="card-title m-b-0 align-self-center"><i class="fas fa-book"></i> Export <span class="label label-rounded label-primary ml-auto"><?=$totalExportProducts;?></span></h5>
                </div>
                <div class="table-responsive m-t-10">
                  <table id="myTable" class="table table-orders color-table table-bordered table-hover product-table">
                    <thead>
                      <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td class="op-0">&nbsp;</td>
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
                          <td class="text-center"><a href="delete-product.php?id=<?=$export['id'];?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
                      </tr>
                      <?php }
?>
                    </tbody>
                  </table>
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
<script src="plugins/vendors/datatables/jquery.dataTables.min.js"></script>
<script>
   $(function() {
       $('#myTable').DataTable();
           var table = $('#example').DataTable({
              "columnDefs": [{
                  "visible": false,
                  "targets": 2
            }],
            "order": [
                  [2, 'asc']
            ],
            "displayLength": 18,
             "drawCallback": function(settings) {
                var api = this.api();
                 var rows = api.rows({
                     page: 'current'
                 }).nodes();
                var last = null;
             api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<script>
 function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
