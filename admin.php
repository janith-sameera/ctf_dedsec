<?php
//    session_start();
//    if (isset($_SESSION['User'])){
//        if ((time()-$_SESSION['start'])>600){
//            session_destroy();
//            header("location:login_duplicate.php");
//        }else{
//            $_SESSION['start']=time();
//        }
//    }else{
//        header("location:login_duplicate.php");
//    }
//
//  include_once 'db.php';
//  $databse = new db();
//  $db = $databse->getConnection();
//?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>CTF Main Menu</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css1/style.css">
<!--      <link rel="stylesheet" href="./css/style.css">-->
      <link rel="icon" href="img/Group_white.png" type="image/png">
    <!-- End layout styles -->

  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome To CTF !</h5>
            <a href="admin.php" class="nav-brand"><img src="img/Group%201.png" alt=""></a>
          <ul class="navbar-nav navbar-nav-right ml-auto">


          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">


<!--              <form action="logout.php" method="POST">-->
<!--                <input type="submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Log Out" name="logout">-->
<!--              </form><br><br>-->
<!---->
<!--                <a href="index.php" class="btn btn-primary btn-block btn-lg rounded-0" target="_blank">AGrow Ceylon (Pvt) Ltd</a></li>-->


            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row purchace-popup">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                </div>
              </div>
            </div>

            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Project Details</h5>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a class="nav-link" href="Add_post.php" class="btn px-0"> <i class="icon-user mr-2"></i>Add Post</a>
                    </div>

                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a class="nav-link" href="view_post.php" class="btn px-0"> <i class="icon-user mr-2"></i> View Projects</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Optimize Solutions</a>
                </p>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>