<?php include '../myaccount/scripts/functions.php' ?>
<!DOCTYPE html>
<html>

<head>
<meta name="theme-color" content="#465ba9">
<meta name="msapplication-navbutton-color" content="#465ba9">
<meta name="apple-mobile-web-app-status-bar-style" content="#465ba9">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title>Personal Banking || Credit Cards | <?php echo$sitename ?></title>
<!-- Google Meta tag -->
 
<!-- Stylesheets -->
<link href="..\public\Frontend\css\bootstrap.css" rel="stylesheet">
<link href="..\public\Frontend\css\style.css" rel="stylesheet">
<link href="..\public\Frontend\css\responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="..\myaccount/images/favicon.png" type="image/x-icon">
<link rel="icon" href="..\myaccount/images/favicon.png" type="image/x-icon">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>

    <div class="page-wrapper">
         
        <!-- Preloader -->
        <div class="preloader"></div>
         
        <!-- Main Header-->
       <?php include 'header.php' ?>
        <!--End Main Header -->


<!--Page Title-->
<section class="page-title" style="background-image:url(../public/Frontend/images/background/8.jpg)">
    <div class="auto-container">
        <div class="content">
            <h1>Credit <span>Card</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="..\index">Home</a></li>
                <li>Personal Banking</li>
                <li>Credit Card</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- About Section Four -->
<section class="about-section-four">
    <div class="auto-container">
        
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">OFFERS BOTH CONVENIENCE AND FLEXIBILITY TO FIT YOUR LIFESTYLE</div>
            <h2><?php echo$shortname ?> VISA PLATINUM</h2>
        </div>
        
         <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="image-column col-md-3">
                <div class="inner-column">
                    <div class="blue">
                        <h4>Personal Banking</h4>
                        <ul style="font-size: 20px;">
                            <a href="savings">
                                <li class="sidebar2-li sidebar-li">Savings</li>
                            </a>
                            <a href="checking">
                                <li class="sidebar-li sidebar2-li">Checking</li>
                            </a>
                            <a href="investment">
                                <li class="sidebar-li sidebar2-li">Investment & Retirement</li>
                            </a>
                            <a href="cards">
                                <li class="bg-blue">Credit Cards</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Skills Column -->
            <div class="skills-column  col-md-9 col-sm-12">
                <div class="inner-column">
                    <div class="text" style="margin-top:0">
                        <p>
                            With a low Annual Percentage Rage, low or no annual fees and a range of rewards, <?php echo$shortname ?>’s VISA® Platinum is an excellent 
                            choice. The <?php echo$shortname ?> VISA® Platinum Card pays you to use it, with a 1% rebate on all purchases made within the continental <?php echo$shortname ?> States. It also offers:
                        </p>
                    </div>
                    
                    <style>
                        .blue{
                            color: #012068;
                        }
                        .black{
                            color: #1a1e66;
                        }
                    </style>
                    <div class="" style="margin-bottom: 30px;margin-top:20px;">
                        <ul class="black" style="list-style: circle; margin-left:20px;">
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                An introductory 5.99% Annual Percentage Rate, good for 6 months, after which your Annual Percentage Rate will be 8.25% and will vary with the market based on the prime rate.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                No Annual Fee – A cash advance fee of $5 or 1.50%, whichever is less, applies on each cash advance. An over-the-credit limit fee of $10 or 2.00% of your credit limit, whichever is less, will apply.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                Personal Identity Theft Coverage* – Reimbursement for up to $1,000 for costs incurred such as lost wages, costs incurred to obtain credit reports, notarization of affidavits, long distance calls, postage and certain legal fees.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                Fraud Monitoring System*
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                Travel Accident Insurance* – Automatic enrollment in accidental death and dismemberment coverage of up to $250,000.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                Purchase Security and Extended Protection* – Protects most purchases for the first 90 days from the date of purchase in the event of loss, theft, damage or fire.
                            </li>
                        </ul>
                        <p style="margin-top: 20px;">
                            Cardholder Agreement
                        </p>
                        <p class="black" style="font-size: 12px">
                            * Insurance Product
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End About Section Four -->


   <?php include 'footer.php' ?>