<?php include 'header.php';?>

<?php

$DB->SelectTable('sliders');
$sliders = $CMS->FetchCMSContents();

$DB->SelectTable('cms_pages');
$CMS->setPage('about');
$homeCMS = $CMS->FetchCMSPage();

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
          <div class="col-md-12">
            <div class="col-lg-12 col-md-12">
                  <div class="card ">
                    <div class="card-body panel-wrapper">
                      <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Slider</h5>
                      </div>
                      <div class="clearfix"></div>

                      <!-- slider1 -->
                      <form enctype="multipart/form-data" method="post" action="<?=$cmsApi;?>">
                        <input type="hidden" name="formAction" value="homeslider">
                      <div class="col-md-4 flotleft">
                        <div class="d-flex m-b-10 no-block">
                          <h6 class="card-title m-b-0 align-self-center titlehome">Image 1</h6>
                        </div>

                        <div class="contect m-t-20">
                          <div class="hedlogo card-title m-b-0 align-self-center">
                            <img src="../uploads/<?=$sliders->slider1;?>" alt="">
                          </div>
                        </div>

                         <div class="clearfix"></div>
                         <div class="contect m-t-20">
                          <div class="field flotleft comologo" align="left">
                          <span class="return">
                            <input type="file" id="files" name="homesliders[]" multiple="">
                            <div class="dropify-wrapper">
                          <div class="dropify-message hosli">
                            <span class="file-icon"></span>
                            <p>Drag and drop a file here or click</p>
                            <p class="dropify-error">Ooops, something wrong appended.</p>
                          </div>
                        </div>
                          </span>
                        </div>
                        <div class="slidercontain">
                          <input type="text" name="slider_text1" value="<?=$sliders->slider_text1;?>" placeholder="Cycle into a real ">
                        </div>
                          <div class="ml-auto titlehome">
                            <span class="buttonname">
                              <!-- <label>Save</label> -->
                              <input class="inputbut" type="submit" name="submit" value="save"></span>
                          </div>
                        </div>
                      </div>
                    </form>

                      <!-- slider2 -->
                                            <form enctype="multipart/form-data" method="post" action="<?=$cmsApi;?>">
                        <input type="hidden" name="formAction" value="homeslider">
                      <div class="col-md-4 flotleft">
                        <div class="d-flex m-b-10 no-block">
                          <h6 class="card-title m-b-0 align-self-center titlehome">Image 2</h6>
                        </div>

                        <div class="contect m-t-20">
                          <div class="hedlogo card-title m-b-0 align-self-center">
                            <img src="../uploads/<?=$sliders->slider2;?>" alt="">
                          </div>
                        </div>

                         <div class="clearfix"></div>
                         <div class="contect m-t-20">
                          <div class="field flotleft comologo" align="left">
                          <span class="return">
                            <input type="file" id="files" name="homesliders[]" multiple="">
                            <div class="dropify-wrapper">
                          <div class="dropify-message hosli">
                            <span class="file-icon"></span>
                            <p>Drag and drop a file here or click</p>
                            <p class="dropify-error">Ooops, something wrong appended.</p>
                          </div>
                        </div>
                          </span>
                        </div>
                        <div class="slidercontain">
                          <input type="text" name="slider_text2" value="<?=$sliders->slider_text2;?>" placeholder="Cycle into a real ">
                        </div>
                          <div class="ml-auto titlehome">
                            <span class="buttonname">
                             <!-- <label>Save</label> -->
                             <input class="inputbut" type="submit" name="submit" value="save"></span>
                          </div>
                        </div>
                      </div>
                    </form>

                      <!-- slider3 -->
                      <form enctype="multipart/form-data" method="post" action="<?=$cmsApi;?>">
                        <input type="hidden" name="formAction" value="homeslider">
                      <div class="col-md-4 flotleft">
                        <div class="d-flex m-b-10 no-block">
                          <h6 class="card-title m-b-0 align-self-center titlehome">Image 3</h6>
                        </div>

                        <div class="contect m-t-20">
                          <div class="hedlogo card-title m-b-0 align-self-center">
                            <img src="../uploads/<?=$sliders->slider3;?>" alt="">
                          </div>
                        </div>

                         <div class="clearfix"></div>
                         <div class="contect m-t-20">
                          <div class="field flotleft comologo" align="left">
                          <span class="return">
                            <input type="file" id="files" name="homesliders[]" multiple="">
                            <div class="dropify-wrapper">
                          <div class="dropify-message hosli">
                            <span class="file-icon"></span>
                            <p>Drag and drop a file here or click</p>
                            <p class="dropify-error">Ooops, something wrong appended.</p>
                          </div>
                        </div>
                          </span>
                        </div>
                        <div class="slidercontain">
                          <input type="text" name="slider_text3" value="<?=$sliders->slider_text3;?>" placeholder="Cycle into a real ">
                        </div>
                          <div class="ml-auto titlehome">
                            <span class="buttonname">
                             <!-- <label>Save</label> -->
                              <input class="inputbut" type="submit" name="submit" value="save"></span>
                          </div>
                        </div>
                      </div>
                    </form>

                    <span class="col-md-12 note flotright m-t-20">Image Size <span class="green">width 1200</span> * <span class="green">height 400</span></span>


                    </div>
                  </div>
            </div>
          </div>
        </div>
<!-- slider end -->

<!-- abou star -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body panel-wrapper">
              <div class="d-flex m-b-10 no-block">
                <h5 class="card-title m-b-0 align-self-center">Home About</h5>
              </div>
              <div class="clearfix"></div>

              <div class="col-md-5 flotleft">
                  <div class="contect m-t-20">
                    <div class="hedlogo card-title m-b-0 align-self-center">
                      <img src="../uploads/<?=$homeCMS->image1;?>" alt="">
                    </div>
                  </div>

                   <div class="clearfix"></div>

   <form enctype="multipart/form-data" method="post" action="<?=$cmsApi;?>">
                        <input type="hidden" name="formAction" value="homeabout">

                   <div class="contect m-t-20">
                    <div class="field " align="left">
                    <span class="return">
                      <input type="file" id="files" name="aboutImage[]" multiple="">
                      <div class="dropify-wrapper">
                    <div class="dropify-message hosli">
                      <span class="file-icon"></span>
                      <p>Drag and drop a file here or click</p>
                      <p class="dropify-error">Ooops, something wrong appended.</p>
                    </div>
                  </div>
                    </span>
                  </div>

                  </div>
              </div>
              <div class="col-md-5 flotleft">
                <div class="homeabouttitle m-b-10 slidercontain">
                  <label>About Title</label>
                  <input type="text" name="title" value="<?=$homeCMS->title;?>" placeholder="World Build Your Layout With Flexible Elements">
                </div>
                <div class="homeabcontet slidercontain">
                  <label>About Content</label>
                  <!-- <input class="m-b-10" type="text" value="<?=$homeCMS->content1;?>" name="content1" placeholder=""> -->
                  <textarea  class="m-b-10 hv" type="text" name="content1" placeholder=""><?=$homeCMS->content1;?></textarea>
                  <!-- <input class="m-b-10" type="text" value="<?=$homeCMS->content2;?>" name="content2" placeholder=""> -->
                </div>

              </div>

               <div class="ml-auto flotright">
                      <span class="buttonname">
                        <!-- <label>Save</label> -->
                        <input class="inputbut" type="submit" name="submit" value="save"></span>
                    </div>

                    <span class="col-md-12 note flotright m-t-20">Image Size <span class="green">width 530</span> * <span class="green">height 350</span></span>
            </div>
          </div>
        </div>
      </div>
<!-- about end -->

<!-- services start -->
      <div class="row"></div>
<!-- services end -->

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