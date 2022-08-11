<?php
require_once '../config/bootstrap.php';

$DB->SelectTable('menus');
$menus = $CMS->FetchMenus();

$currentUrlArray = explode('/', $_SERVER['REQUEST_URI']);
$currentUrl = end($currentUrlArray);
?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

        <title>Orafs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!--====>> Favicon icon <<====-->
		<link rel="icon" type="image/png" sizes="16x16" href="<?=VIEWS;?>img/favicon.png">

		<!--====>> Google Fonts <<====-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,600,700" rel="stylesheet">

		<!--====>> Style Template <<====-->
        <link rel="stylesheet" href="<?=VIEWS;?>css/plugins.css">
		<!--====>> Style Template <<====-->
        <link rel="stylesheet" href="<?=VIEWS;?>css/font/flaticon.css">
		<!--====>> Style Template <<====-->
        <link rel="stylesheet" href="<?=VIEWS;?>css/style.css">
		<!--====>> Style Template <<====-->
        <link rel="stylesheet" href="<?=VIEWS;?>css/responsive.css">


    </head>
    <body>
		<!-- ===========================
    	=====>> Start Preloader <<===== -->

<!-- 		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div> -->

		<!-- =====>> END Preloader <<=====
		============================= -->

		<!-- ===========================
    	=====>> Start Navigation <<===== -->

		<nav class="navbar navbar-expand-lg btco-hover-menu">
			<div class="container">
				<div class="heder-logo">
					<!-- Logo -->
					<a class="navbar-brand top-logo" href="index.php">
						<img src="<?=VIEWS;?>img/Logooraf.png" alt="logo" />
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"><i class="fas fa-bars"></i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto" id="my-menu">
						<li class="nav-item <?=($currentUrl == "index.php") ? 'active' : '';?>">
							<a class="nav-link" href="index.php"><?=$menus->home;?></a>
						</li>
						<li class="nav-item <?=($currentUrl == "about-us.php") ? 'active' : '';?>">
							<a class="nav-link" href="about-us.php"><?=$menus->about;?></a>
						</li>
						<li class="nav-item dropdown <?=($currentUrl == "import.php" || $currentUrl == "export.php" || $currentUrl == "ports.php") ? 'active' : '';?>">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkOne" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?=$menus->services;?>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkOne">
								<li ><a class="dropdown-item" href="import.php"><?=$menus->import;?></a></li>
								<li ><a class="dropdown-item" href="export.php"><?=$menus->export;?></a></li>
								<li ><a class="dropdown-item" href="ports.php"><?=$menus->port;?></a></li>
							</ul>
						</li>

						<li class="nav-item <?=($currentUrl == "join-us.php") ? 'active' : '';?>">
							<a class="nav-link" href="join-us.php"><?=$menus->joinus;?></a>
						</li>
						<li class="nav-item <?=($currentUrl == "contact-us.php") ? 'active' : '';?>">
							<a class="nav-link" href="contact-us.php"><?=$menus->contact;?></a>
						</li>
						<li class="nav-item <?=($currentUrl == "convert-rate.php") ? 'active' : '';?>">
							<a class="nav-link" href="convert-rate.php"><?=$menus->convert_rate;?></a>
						</li>

					</ul>
				</div>
			</div>
		</nav>

		<!-- =====>> END Navigation <<=====
		============================= -->