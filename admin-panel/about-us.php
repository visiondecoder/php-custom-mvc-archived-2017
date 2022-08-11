<?php include 'header.php';?>

<?php

$DB->SelectTable('cms_pages');
$CMS->setPage('about');
$aboutCMS = $CMS->FetchCMSPage();

$cmsApi = $domainName . 'cms.api.php';
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
    float: left;
    width: 100%;
    position: relative;
}
.previewimg {
    float: left;
    width: 100%;
    margin-bottom: 10px;
}
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


 <div class="col-lg-6 col-md-12">
     <form enctype="multipart/form-data" method="post" action="<?=$cmsApi;?>">
                        <input type="hidden" name="formAction" value="homeabout">

            <div class="card panel-main o-income panel-refresh">
              <div class="card-body panel-wrapper">
                <div class="d-flex m-b-10 no-block">
                  <h5 class="card-title m-b-0 align-self-center">About Contect</h5>
                  
                </div>

        <div class="contect">
          <div class="heading col-12 m-b-15 m-t-15">
            <input type="text" name="title" value="<?=$aboutCMS->title;?>" class="form-control font-14" placeholder="Heading">
          </div>
          <div class="col-12 m-b-15">
            <textarea class="form-control textarea-lg m-b-10" name="content1" placeholder="Paragraph 1"><?=$aboutCMS->content1;?></textarea>
          </div>
          <div class="col-12 m-b-15">
            <textarea class="form-control textarea-lg m-b-10" name="content2" placeholder="Paragraph 1"><?=$aboutCMS->content2;?></textarea>
          </div>
<!--           <div class="col-12">
            <textarea class="form-control textarea-lg" placeholder="Paragraph 1"></textarea>
          </div> -->
        </div>

         <div class=" flotright"> <span class="buttonname">
                    <!-- <label>Save</label> -->
                    <input class="inputbut" type="submit" name="submit" value="save" /></span> </div>

 </div>

            </div>


          </form>
          </div>






 <div class="col-lg-6 col-md-12">
       <form enctype="multipart/form-data" method="post" action="<?=$cmsApi;?>">
                        <input type="hidden" name="formAction" value="homeabout">
            <div class="card panel-main o-income panel-refresh">
              <div class="card-body panel-wrapper">
                <div class="d-flex m-b-10 no-block">
                  <h5 class="card-title m-b-0 align-self-center">About Image</h5>
                  <div class="ml-auto"> <span class="buttonname">
                    <!-- <label>Save</label> -->
                    <input class="inputbut" type="submit" name="submit" value="save" /></span> </div>
                </div>


                <div class="heading col-12 m-b-15 m-t-15">

                  <div class="previewimg">
                    <img src="../uploads/<?=$aboutCMS->image1;?>">
                  </div>
                    <div class="field" align="left">
                        <span class="return">
                          <input type="file" id="files" name="aboutImage[]" />
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
<span class="col-md-12 note flotright m-t-20">Image Size <span class="green">width 530</span> * <span class="green">height 350</span></span>

        </div>
            </div>
          </form>


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