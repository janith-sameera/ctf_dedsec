<?php
session_start();
if (isset($_SESSION['User'])){
    if ((time()-$_SESSION['start'])>600){
        session_destroy();
        header("location:dedboard/Welcome/login.html");
    }
}else{
    header("location:dedboard/Welcome/login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome To CTF</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="css1/style.css">
    <link rel="icon" href="images/icon/logo.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
      <div class="container-scroller">
          <div class="container-fluid page-body-wrapper full-page-wrapper">

              <div class="content-wrapper d-flex align-items-center auth">

                  <div class="row flex-grow">

                      <div class="col-lg-4 mx-auto">
                          <div class="auth-form-light text-left p-5">
                              <h1>Welcome to the CTF</h1>
                              <h2>Do you want to play....Try This !</h2>
                              <h3 class="font-weight-light">Sign in to continue.</h3>
                              <div class="login">
                                  <div class="alert-light text-danger text-center py-3"></div>
                                  <div class="form-group">
                                      <input type="email" class="form-control form-control-lg" id="email" name="username" placeholder="Username">
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                                  </div>
                                  <span id="result" style="color: red;font-size: 20px;"></span>
                                  <div class="mt-3">
                                      <input type="submit" value="Login" id="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>


              </div>
          </div>
      </div>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="myscript.js" type="text/javascript"></script>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>

    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>

  <script type="text/javascript" src="js/particles.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript">
    $(window).on('scroll', function() {
      if($(window).scrollTop()){
        $('nav').addClass('black');
      }
      else{
        $('nav').removeClass('black');
      }
    })
  </script>

  </body>
</html>
