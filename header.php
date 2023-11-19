<?php
session_start();
require_once 'myaccount/vendor/autoload.php';
require_once "myaccount/scripts/connect.php";
//WEBSITE SETTINGS
$query = $conn->query("SELECT * FROM setting WHERE id = 1") or die(mysqli_error($conn));
while ($rows = mysqli_fetch_array($query)) {
    $sitename = $rows["name"];
    $logo = $rows["logo"];
    $tagline = $rows["tagline"];
    $favicon = $rows["favicon"];
    $register = $rows["register"];
    $sitephone = $rows["phone"];
    $siteemail = $rows["email"];
    $siteaddress = $rows["address"];
    $description = $rows["description"];
    $seo = $rows["seo"];
    $darklogo = $rows["darklogo"];
    $rate1 = $rows["stockrate"];
    $rate2 = $rows['stockrate2'];
    $money = $rows["money"];
    $sitecountry = $rows["country"];
    $visa_picture = $rows["visa_picture"];
    $tawk = $rows['tawk'];
    $shortname = $rows['shortname'];
    $blocked_msg = $rows['blocked_msg'];
    $bots = $rows['bots'];
    if ($sitecountry == "United Kingdom") {
        $routine = "Sort code";
    } else {
        $routine = "Routing number";
    }
    if ($rows['stock'] == 1) {
        $stockrate = $rate1;
    } else { $stockrate = $rate2;}
}

///CHECK IF SITE IS BEING INDEXED BY A BOT/CRAWLER VIA HTTP USER AGENT

$n1 = rand(0, 9);
$n2 = rand(0, 9);
$n3 = rand(0, 9);
$n4 = rand(0, 9);
$n5 = rand(0, 9);
$n6 = rand(0, 9);
$captcha = "$n1$n2$n3$n4$n5$n6";

?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from pixner.net/bankio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 23:20:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $sitename ?></title>

    <link rel="shortcut icon" href="../assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- start preloader -->
    <!--<div class="preloader" id="preloader"></div>-->
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
          <div class="container">
            <div class="row d-flex header-area">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                  <img src="myaccount/<?php echo $logo ?>" width="150px" class="logo" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbar-content">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                  <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown main-navbar">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Product</a>
                      <ul class="dropdown-menu main-menu shadow">
                        <li class="dropend sub-navbar">
                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                              data-bs-auto-close="outside">Account</a>
                            <ul class="dropdown-menu sub-menu shadow">
                              <li><a class="nav-link" href="account.php">Account</a></li>
                              <li><a class="nav-link" href="account-details.php">Account Details</a></li>
                            </ul>
                        </li>
                        <li class="dropend sub-navbar">
                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">Loan</a>
                          <ul class="dropdown-menu sub-menu shadow">
                            <li><a class="nav-link" href="business-loan.php">Business Loans</a></li>
                            <li><a class="nav-link" href="educations-loan.php">Educations Loans</a></li>
                            <li><a class="nav-link" href="home-loan.php">Home Loans</a></li>
                            <li><a class="nav-link" href="car-loan.php">Car Loans</a></li>
                            <li><a class="nav-link" href="personal-loan.php">Personal Loans</a></li>
                          </ul>
                        </li>
                        <li><a class="nav-link" href="card.php">Card</a></li>
                      </ul>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                  <div class="right-area header-action d-flex align-items-center">
                    <a href="myaccount/secure" class="cmn-btn">Access Account</a>
                </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
    </header>
    <!-- header-section end -->