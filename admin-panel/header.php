<?php
require_once '../config/bootstrap.php';
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon.png">
<title>Admin Panel</title>

   <!-- page css -->
   <!--  <link href="css/google-vector-map.css" rel="stylesheet"> -->


<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- <link href="css/animate.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/spinners.css" rel="stylesheet"> -->

<!-- pluging -->
<link href="plugins/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css">
<link href="plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="plugins/vendors/c3-master/c3.min.css" rel="stylesheet">
<link href="plugins/vendors/calendar/dist/fullcalendar.css" rel="stylesheet" />
<link rel="stylesheet" href="plugins/vendors/dropify/dist/css/dropify.min.css">
<link href="plugins/vendors/jsgrid/jsgrid.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/vendors/jsgrid/jsgrid-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/vendors/morrisjs/morris.css" rel="stylesheet">
<link href="plugins/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugins/vendors/product-slider/product-slider.css">
<link href="plugins/vendors/summernote/dist/summernote.css" rel="stylesheet" />
<link href="plugins/vendors/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="plugins/vendors/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="plugins/vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="plugins/vendors/toast-master/css/jquery.toast.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


<!-- page css -->
<link href="css/pages/chat-app-page.css" rel="stylesheet">
<link href="css/pages/custom-pills.css" rel="stylesheet">
<link href="css/pages/dashboard-server.css" rel="stylesheet">
<link href="css/pages/easy-pie-chart.css" rel="stylesheet">
<link href="css/pages/email.css" rel="stylesheet">
<link href="css/pages/file-upload.css" rel="stylesheet">
<link href="css/pages/footable.core.css" rel="stylesheet">
<link href="css/pages/google-vector-map.css" rel="stylesheet">
<link href="css/pages/icon-page.css" rel="stylesheet">
<link href="css/pages/order-page.css" rel="stylesheet">
<link href="css/pages/pricing-page.css" rel="stylesheet">
<link href="css/pages/tab-page.css" rel="stylesheet">
<link href="css/pages/timeline-vertical-horizontal.css" rel="stylesheet">
<link href="css/pages/to-do.css" rel="stylesheet">


</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<div id="main-wrapper">
  <!-- ============================================================== -->
  <!-- Container1140px -->
  <!-- ============================================================== -->

  <!-- ============================================================== -->
  <header class="topbar">
    <div Class="container">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header"> <a class="navbar-brand" href="index.php">
          <!-- Logo icon -->
          <b>
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="imgs/logo-icon.png" alt="homepage" class="dark-logo" />
          <!-- Light Logo icon -->
          <img src="imgs/logo-light-icon.png" alt="homepage" class="light-logo" /> </b>
          <!--End Logo icon -->
          <!-- Logo text -->
          <span>
          <!-- dark Logo text -->
          <img src="imgs/logo-text.png" alt="homepage" class="dark-logo dark-logo2" />
          <!-- Light Logo text -->
          <img src="imgs/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="top-bar-main">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <div class="float-left">
            <ul class="navbar-nav">
              <li class="nav-item "><a class="nav-link navbar-toggler sidebartoggler waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
              <!-- ============================================================== -->
            </ul>
          </div>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          <div class="float-right pr-3">
            <ul class="navbar-nav my-lg-0 float-right">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect" href="<?=$domainName;?>logout.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fab fa-bity"></i>
                <span class="heartbit">loug out </span> <span class="point"></span>
                </a>
              </li>

            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </nav>
    </div>
  </header>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->