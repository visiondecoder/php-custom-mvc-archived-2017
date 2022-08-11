<?php include 'header.php';?>

<?php

$PID = $_GET['id'];
$productCondition = ['id' => $PID];
$DB->SelectTable('products');
$productResult = $DB->SelectAllWhere($productCondition);

// get product details
while ($product = $productResult->fetch_assoc()) {
	$productId = $product['id'];
	$productTitle = $product['title'];
	$productType = $product['type'];
	$productDescription = $product['description'];
}

$DB->SelectTable('product_images');
$productImages = $DB->SelectAllWhere(['product_id' => $PID]);
$totalProductImages = $productImages->num_rows;

$productApi = $domainName . 'product.api.php';
?>

<?php include 'left-site.php';?>
<style type="text/css">
  input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
img.imageThumb {
    width: 100%;
    border: none;
}
.remove {
  display: block;
  background: #444;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
.remove.fas.fa-archive {
    font-size: 19px;
    padding: 5px 0;
    color: #abaeff;
}
input#files {
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 20vh;
    width: 100%;
    opacity: 0;
    cursor: pointer;
    z-index: 5;
}
.dropify-wrapper {
    display: block;
    position: absolute;
    cursor: pointer;
    font-size: 14px;
    color: #777;
    background-color: #FFF;
    background-image: none;
    text-align: center;
    border: 2px solid #E5E5E5;
    -webkit-transition: border-color .15s linear;
    transition: border-color .15s linear;
    top: 0;
    width: 100%;
    height: 20vh;
    overflow: hidden;
    display: table-footer-group;
}
.pip {
    display: inline-block;
    margin: 10px 10px 0px;
    border: 2px solid #E5E5E5;
    min-height: 10vh;
    overflow: hidden;
}
.remove {
    display: block;
    background: #f6f7fb;
    color: white;
    text-align: center;
    cursor: pointer;
}
.pip.col-md-5{
  padding: 0;
}
.field {
    position: relative;
</style>


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
                <h5 class="card-title m-b-40 mt-3 align-self-center">Edit Product</h5>
                <div class="row">
                  <form class="form-horizontal col-md-12 flotleft" method="post" action="<?=$productApi;?>" enctype="multipart/form-data">
                    <input type="hidden" name="formAction" value="update">
                  <input type="hidden" name="id" value="<?=$PID;?>">
                  <div class="col-lg-4 col-md-4 flotleft">
                    <div class="field" align="left">
                        <span class="return">
                          <input type="file" id="files" name="productImages[]" multiple />

    <?php
while ($images = $productImages->fetch_assoc()) {?>
                            <span class="pip col-md-5">
                              <img class="imageThumb" src="<?=$uploadPath . $images['image_name'];?>">
                              <br>
                              <a href="delete-product-image.php?del=<?=$images['id'];?>"><span class="remove fas fa-archive"></span></a>
                            </span>
                          <?php }
?>


                          <div class="dropify-wrapper">
                        <div class="dropify-message">
                          <span class="file-icon"></span>
                          <p>Drag and drop a file here or click</p>
                          <p class="dropify-error">Ooops, something wrong appended.</p>
                        </div>
                      </div>
                        </span>
                      </div>
                  </div>
                  <!-- End of product slider -->
                  <div class="col-lg-8 col-md-8 flotleft">
                    <div class="row">
                      <div class="form-wrap form-wrap2">

                          <div class="col-sm-12 col-xs-12">
                            <div class="form-group m-b-15">
                              <label class="control-label text-primary font-12 m-b-5">Product Name</label>
                              <div>
                                <input type="text" name="title" class="form-control font-14" value="<?=$productTitle;?>"  placeholder="Name">
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group m-b-15">
                            <div class="row m-0 m-b-20">
                              <div class="col-md-12 col-xs-12 m-b-5">
                                <label class="control-label font-14 m-b-5">Select Category</label>
                                <div>
                                  <select class="custom-select font-14 m-b-5" name="type" data-style="btn-default btn-outline">
                                    <option  data-tokens="Category"> Type </option>
                                    <option <?=($productType == "import") ? 'selected' : '';?>  data-tokens="Category" value="import"> Import </option>
                                    <option <?=($productType == "export") ? 'selected' : '';?> data-tokens="Category" value="export"> Export </option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group row m-b-15">
                            <div class="col-sm-12">
                              <label class="col-12 p-t-0 m-b-5">Description</label>
                              <div class="col-12">
                                <textarea name="description" class="form-control textarea-lg"><?=$productDescription;?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row m-l-0 m-b-10">
                            <div class="col-md-12  col-xs-12 text-right">
                              <div class="p-l-15 p-r-15">
                                <span class="buttonname">
                                  <!-- <label>Save</label> -->
                                  <input class="inputbut" type="submit" name="submit" value="save">
                                </span>
                              </div>
                            </div>
                          </div>
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
<script type="text/javascript">
  $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip col-md-5\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove fas fa-archive\"></span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });

          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/

        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>