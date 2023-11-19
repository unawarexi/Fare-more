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
<title>Personal Banking || Investment &amp; Retirement |<?php echo$sitename ?></title>
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
            <h1>Investments & <span>Retirement</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="..\index">Home</a></li>
                <li>Personal Banking</li>
                <li>Investments & Retirement</li>
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
            <div class="title">FINANCIAL PLANNING FOR TODAY AND TOMORROW.</div>
            <h2>INVESTMENTS AND RETIREMENT</h2>
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
                                <li class="bg-blue">Investment & Retirement</li>
                            </a>
                            <a href="cards">
                                <li class="sidebar-li">Credit Cards</li>
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
                            When it comes to your future, no “one-size-fits-all” solution will do. Through a combination of experience, expertise 
                            and personalized guidance tailored to your goals, we can help you plan for your future – while meeting today’s needs. 
                            Whether you have been investing for years or are a first time investor, we will work with you through every step, 
                            educating you on your available options and future possibilities.
                        </p>
                    </div>
                    <div class="text sec-title">
                        <h2>FINANCIAL PLANNING</h2>
                        <p class="title">PREPARING FOR LIFE'S EVENTS.</p>
                    </div>
                    <style>
                        .blue{
                            color: #012068;
                        }
                        .black{
                            color: #1a1e66;
                        }
                    </style>
                    <div class="" style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-line-chart"></i>
                            PORTFOLIO MANAGEMENT
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            If you’re looking for personal assistance to help design or review your existing financial plan, 
                            our experienced financial advisors can help you prepare for life’s events and walk you through your 
                            available options, such as tax-deferred annuities.
                        </p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-line-chart-1"></i>
                            RETIREMENT PLANNING
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            Whether you’re close to retirement or just starting your career, our experienced financial advisors can help you build a custom plan to keep you on track.
                        </p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-document"></i>
                            INSURANCE PLANNING
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            At <?php echo$shortname ?> Brokerage, it’s our goal to help you plan for the unexpected. Whether its loss of income to 
                            provide for your family, asset protection, or retirement planning, we’ll customize a plan that works for you.
                        </p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="fa fa-graduation-cap"></i>
                            EDUCATION PLANNING
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            At <?php echo$shortname ?>, we’re proud to offer a number of investment options to help you plan and save for college, whether it’s for yourself, your children or your grandchildren. 
                        </p>
                    </div>

                    <a class="bg-blue" style="color: whitesmoke;">OPEN AT A BRANCH</a>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End About Section Four -->
<?php include 'footer.php' ?>