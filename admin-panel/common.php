<?php include 'header.php';?>

<?php

// cms contents
$DB->SelectTable('cms_contents');
$cmsContents = $CMS->FetchCMSContents();

// cms menus
$DB->SelectTable('menus');
$cmsMenus = $CMS->FetchMenus();

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



          <div class="col-lg-6 col-md-12">

            <!-- logo -->
            <div class="col-lg-12 col-md-12">
                  <div class="card ">
                    <div class="card-body panel-wrapper">
                      <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">logo</h5>
                        <!-- <div class="ml-auto"> <span class="buttonname"> <label>Save</label><input class="inputbut" type="submit" name="submit"></span> </div> -->
                      </div>
                      <div class="clearfix"></div>

                      <div class="contect m-t-20">
                        <div class="hedlogo card-title m-b-0 align-self-center flotleft col-md-6">
                          <img src="../uploads/<?=$cmsContents->website_logo;?>" alt="">
                        </div>
                      </div>

                       <div class="clearfix"></div>
                       <form action="<?=$cmsApi;?>" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="formAction" value="website_logo">
                       <div class="contect m-t-20">
                        <div class="field flotleft comologo" align="left">
                        <span class="return">
                          <input type="file" id="files" name="website_logo[]">
                          <div class="dropify-wrapper">
                        <div class="dropify-message">
                          <span class="file-icon"></span>
                          <p>Drag and drop a file here or click</p>
                          <p class="dropify-error">Ooops, something wrong appended.</p>
                        </div>
                      </div>
                        </span>
                      </div>
                        <div class="ml-auto flotright">
                          <span class="buttonname">
                            <!-- <label>Save</label> -->
                            <input class="inputbut" type="submit" name="submit" value="Upload"></span>
                        </div>
                      </div>
                    </form>
                    <span class="col-md-12 note flotright m-t-20">Image Size <span class="green">width 200</span> * <span class="green">height 50</span></span>
                    </div>
                  </div>
            </div>

            <!-- top menu -->

            <?php
// $menus = $CMS->FetchMenus();
// echo count($menus);
?>
            <div class="col-lg-12 col-md-12">
                  <div class="card ">
                    <div class="card-body panel-wrapper">
                      <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Top Menu</h5>
                      </div>
                      <div class="clearfix"></div>
<form action="<?=$cmsApi;?>" method="post">
  <input type="hidden" name="formAction" value="top_menu">
                       <div class="contect m-t-20">
                        <div class="menuedit">
                          <ul>
                            <li><input type="text" name="home" value="<?=$cmsMenus->home;?>" placeholder="Home"></li>
                            <li><input type="text" name="about" value="<?=$cmsMenus->about;?>" placeholder="About Us"></li>
                            <li><input type="text" name="services" value="<?=$cmsMenus->services;?>" placeholder="Services">
                              <ul>
                                <li><input type="text" name="import" value="<?=$cmsMenus->import;?>" placeholder="Import"></li>
                                <li><input type="text" name="export" value="<?=$cmsMenus->export;?>" placeholder="Export"></li>
                                <li><input type="text" name="port" value="<?=$cmsMenus->port;?>" placeholder="Ports"></li>
                              </ul>
                            </li>
                            <li><input type="text" name="joinus" value="<?=$cmsMenus->joinus;?>" placeholder="Join Us"></li>
                            <li><input type="text" name="contact" value="<?=$cmsMenus->contact;?>" placeholder="Contact Us"></li>
                            <li><input type="text" name="convert_rate" value="<?=$cmsMenus->convert_rate;?>" placeholder="Convert Rate"></li>
                          </ul>
                        </div>
                        <div class="ml-auto flotright">
                          <span class="buttonname">
                            <!-- <label>Save</label> -->
                            <input class="inputbut" type="submit" name="submit" value="Save"></span>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
            </div>

            <!-- detail compamy -->
            <div class="col-lg-12 col-md-12">
                  <div class="card ">
                    <div class="card-body panel-wrapper">
                      <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Down Contact</h5>
                      </div>
                      <div class="clearfix"></div>

  <form action="<?=$cmsApi;?>" method="post">
  <input type="hidden" name="formAction" value="footer_contact">
                       <div class="contect m-t-20">
                        <div class="menuedit">
                          <ul>
                            <li><input type="text" name="footer_contact" placeholder="Contact No" value="<?=$cmsContents->footer_contact;?>"></li>
                            <li><input type="text" name="footer_email" placeholder="Email Id" value="<?=$cmsContents->footer_email;?>"></li>
                          </ul>
                        </div>
                        <div class="ml-auto flotright">
                          <span class="buttonname">
                           <!-- <label>Save</label> -->
                           <input class="inputbut" type="submit" name="submit" value="Save"></span>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
            </div>

          </div>




          <div class="col-lg-6 col-md-12">

            <!-- social icon -->

            <div class="col-lg-12 col-md-12">
                  <div class="card ">
                    <div class="card-body panel-wrapper">
                      <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Social link</h5>
                        <!-- <div class="ml-auto"> <span class="buttonname"> <label>Save</label><input class="inputbut" type="submit" name="submit"></span> </div> -->
                      </div>
                      <div class="clearfix"></div>

                <form action="<?=$cmsApi;?>" method="post">
  <input type="hidden" name="formAction" value="social_link">
                       <div class="contect m-t-20">
                        <div class="socialicon menuedit">
                           <ul>
                            <li><input type="text" name="facebook_link" value="<?=$cmsContents->facebook_link;?>" placeholder="Facebook"></li>
                            <li><input type="text" name="twitter_link" value="<?=$cmsContents->twitter_link;?>" placeholder="Twiter"></li>
                            <li><input type="text" name="linkedin_link" value="<?=$cmsContents->linkedin_link;?>" placeholder="linkedin"></li>
                          </ul>
                        </div>
                        <div class="ml-auto flotright">
                          <span class="buttonname">
                            <!-- <label>Save</label> -->
                            <input class="inputbut" type="submit" name="submit" value="Save"></span>
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
<script src="plugins/vendors/datatables/jquery.dataTables.min.js"></script>
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
