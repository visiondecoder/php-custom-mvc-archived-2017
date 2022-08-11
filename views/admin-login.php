<?php
require_once '../config/bootstrap.php';
$controller = 'app/Controller/AdminController.php';
$formAction = $domainName . $controller;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Javascript -->
    <script src="<?=VIEWS;?>login/js/jquery.min.js"></script>
    <script src="<?=VIEWS;?>login/js/bootstrap.min.js"></script>
    <script src="<?=VIEWS;?>login/js/formplexy-validation.js"></script>
<link rel="icon" type="image/png" href="<?=VIEWS;?>login/img/favicon.png"/>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=VIEWS;?>login/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=VIEWS;?>login/css/formplexy-bootstrap-light.css">
    <link rel="stylesheet" href="<?=VIEWS;?>login/css/iconfont.css">
  </head>
  <body>

    <div class="container formplexy">
      <!-- Logo -->
      <div class="row">
        <div class="col-md-12 logo">
          <img src="<?=VIEWS;?>login/img/Logooraf.png" alt="logo" class="img-responsive">
        </div>
      </div>

      <!-- Form Base -->
      <div class="row">
        <div class="col-md-12">
          <div class="form-base col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 col-xs-12">
          <header>
            <h1>Login</h1>
          </header>

          <!-- Form -->
          <section>
            <form action="<?=$formAction;?>" method="post" id="login-form">
              <input type="hidden" name="formAction" value="login">
              <div class="input-group login-username"><div class="input-group-addon">Username</div>
              <input type="text" placeholder="User name" name="email" id="login-username"><span aria-hidden="true" id="status-username" class="status-icon"></span></div>
              <div class="input-group login-password"><div class="input-group-addon">Password</div>
              <input type="password" placeholder="Password" name="secret" id="login-password"><span aria-hidden="true" id="status-password" class="status-icon"></span></div>
              <input type="hidden" name="submit" value="submit">
              <div class="row section-action floatleft col-md-12">
                <!-- Submit -->
                <div class="col-xs-4">
                  <button class="btn primary pull-right custom-color-back">Login</button>
                </div>
              </div>
            </form>
          </section>

        </div>
        </div>
      </div>

      <!-- Sign Up / Login Switch -->

    </div>

  </body>
</html>
