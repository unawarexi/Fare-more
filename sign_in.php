<?php
ob_start();

require_once("Linkclass.php");
$obj = new processes();
$reg = new reg();
$pic = new pic_handler();
$login = new login_handler();
$page = new pagination();
$obj->getSessions();

?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" Content="<?php echo $sitename ?> - Login">
    <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="admin,blog,aaaa,ddd,aaa">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $sitename ?> - Login">
    
    <meta itemprop="name" content="<?php echo $sitename ?> - Login">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="https://westcreedswealth.com/secured/assets/images/seo/6113bf323d1171628684082.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="ASAP Codes">
    <meta property="og:description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="https://westcreedswealth.com/secured/assets/images/seo/6113bf323d1171628684082.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://westcreedswealth.com/secured/login">
    
    <meta name="twitter:card" content="summary_large_image">
 <title><?php echo $sitename ?> - Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

   <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/components.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/form-validation.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/page-auth.min.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/color.css">
    <link rel="stylesheet" type="text/css" href="./assets/sweetalert.css">


  </head>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
             <!-- Login v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="#" class="brand-logo center">
           <img src="assets/images/logo.png" width="100px" alt="logo"></a>

        </a>

        <h4 class="card-title mb-1">Welcome back to <?php echo $sitename ?> 🔒</h4>
        <p class="card-text mb-2">If you do not have an account with us, proceed to  register.</p>
        <?php if(isset($_GET['status'])){
          $error = $_GET['status'];
          ?>
          <div class="row " style="margin:0px; padding-top:5px; padding-bottom:5px;">
            <div class="col-md-12 text-center" style="color:green">
              <?php echo $error ?>
            </div>
          </div>
        <?php } ?>
        <p style="color: green" class="text-center">
          <?php
          if(isset($_GET['sucs'])){
            echo $_GET['sucs'];

          }
          ?>
        </p>

        <p style="color:#EF9C0C" class="text-center" >
          <?php
          if(isset($_GET['error'])){
            echo $_GET['error'];

          }
          ?>
        </p>
        <form class="auth-login-form mt-2" action="validator.php" method="post" enctype="multipart/form-data">
          <div class="mb-1">
            <label for="login-email" class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              id="email2"
              name="log_username"
              placeholder="Enter Username"
              aria-describedby="login-email"
              tabindex="1"
              autofocus
            />  
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              <a href="forgot.php">
                <small> Forgot Your Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="pass3"
                name="log_password"
                tabindex="2"
                placeholder="****** "
                aria-describedby="login-password"
              />
              <span class="input-group-text cursor-pointer bg-light text-primary"><i data-feather="eye"></i></span>
            </div>
          </div>

            <div class="mb-1">
            <div class="d-flex justify-content-between">
                        </div>
            </div>
            

          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember"  tabindex="3" />
              <label class="form-check-label" for="remember">  Remember Me </label>
            </div>
          </div>
          <button class="btn btn--primary text-white w-100" tabindex="4" name="log_button">Login</button>
        </form>

        <p class="text-center mt-2">
          <span>Do not have an account with us?</span>
          <a href="sign_up.php">
            <span>Register</span>
          </a>
        </p>

      </div>
    </div>
    <!-- /Login v1 -->
     </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="./assets/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./assets/js/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./assets/js/app-menu.min.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/js/toastr.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./assets/js/page-auth-login.js"></script>

    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>

  
      <script>
        "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">Captcha field is required.</span>';
                return false;
            }
            return true;
        }
    </script>

  
  <link rel="stylesheet" href="./assets/css/iziToast.min.css">
<script src="./assets/js/iziToast.min.js"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>


    <script>

        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://westcreedswealth.com/secured/change/"+$(this).val() ;
            });

        })(jQuery);

    </script>
  <script src="https://westcreedswealth.com/secured/assets/vendor_components/sweetalert/sweetalert.min.js"></script>
  <script src="../js/dili.js"></script>
  </body>
  <!-- END: Body-->
</html>
