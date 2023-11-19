<?php include '../myaccount/scripts/functions.php'; ?>
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
<title>Business Banking || Checking Account | <?php echo$sitename ?></title>
 
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
     <?php include 'header.php'; ?>
        <!--End Main Header -->


<!--Page Title-->
<section class="page-title" style="background-image:url(../public/Frontend/images/background/8.jpg)">
    <div class="auto-container">
        <div class="content">
            <h1>Checking <span>Account</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="..\index">Home</a></li>
                <li>Business Banking</li>
                <li>Checking Account</li>
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
            <div class="title">WHERE CONVENIENCE MEETS ACCESS</div>
            <h2>BUSINESS CHECKING</h2>
        </div>
        
         <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="image-column col-md-3">
                <div class="inner-column">
                    <div class="blue">
                        <h4>Business Banking</h4>
                        <ul style="font-size: 20px;">
                            <a href="savingsl">
                                <li class=" sidebar-li sidebar2-li">Savings</li>
                            </a>
                            <a href="checkingl">
                                <li class="bg-blue">Checking</li>
                            </a>
                            <a href="lendingl">
                                <li class="sidebar-li sidebar2-li">Lending</li>
                            </a>
                            <a href="cardsl">
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
                            From the ease of our Free Business Checking to the extra features of Analyzed Business Checking, 
                            <?php echo$shortname ?> gives you the power to manage your money with convenience and flexibility. 
                            And for all business accounts, we offer Remote Deposit Capture, which enables your 
                            organization to make bank deposits directly from your office location. 
                            All you need is a compatible scanner and a high-speed internet connection!
                        </p>
                    </div>
                    <div class="text sec-title">
                        <h2>PRODUCTS</h2>
                        <p class="title">CHOOSE THE BEST FOR YOUR BUSINESS.</p>
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
                            <i class="fa fa-credit-card"></i>
                            FREE BUSINESS CHECKING
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            For value and flexibility with no fees, Free Business Checking from <?php echo$shortname ?> combines the most requested business banking features for your convenience. Our Free Business Checking account includes:
                        </p>
                        <ul class="black" style="list-style: circle; margin-left:20px;">
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>500 free Monthly Transactions-</b> Includes deposited items, checks paid and deposits. Transactions above 500 per month are only $0.25 each.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                              <b>No monthly maintenance fees</b> 
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                               <b>No minimum balance requirements</b>
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                               <b>Free Online Banking and Pay Bills-</b> Track your accounts, transfer funds, pay bills and more, all from your computer using Business eBanking. A secure, encrypted internet connection protects your privacy and provides 24/7 access.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                               <b><?php echo$shortname ?> Business Visa® Debit Card</b> with no Annual fee.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Free check safekeeping available</b>
                             </li>
                             <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Remote Deposit Capture available</b>
                             </li>
                             <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Profituity,</b>  a free check representment service that <?php echo$shortname ?> Bank provides for its business and nonprofit customers.
                             </li>
                             <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Only $500 require to Open</b>
                             </li>
                        </ul>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-graph-1"></i>
                            ANALYZED BUSINESS CHECKING
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            Built for larger businesses and bigger deposits, <?php echo$shortname ?> Analyzed Business Checking includes access to <?php echo$shortname ?> cash management 
                            services such as remote deposit capture to save you time and money, plus free online banking. But what makes this business 
                            account stand out is your earnings allowance. Here’s how it works:
                        </p>
                        <ol class="black" style="margin-left:20px;">
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                Your account receives an earnings allowance based on the average 91-day Treasury Bill rate for the previous month times the average daily collected balance.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                The earnings allowance is compared to expenses incurred by the bank in servicing the account for the month.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                If the earnings allowance is greater than the expenses, there is no service charge.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                If expenses exceed the earnings allowance, a service charge equal to total expenses less the earnings allowance is applied to the account as outlined in the account analysis fee schedule.
                            </li>
                        </ol>
                        <p class="black" style="margin-top: 20px;">
                            You can check your earnings with our free reporting tool. And if you have more than one business checking account, 
                            the balances may be combined for the purposes of analysis.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End About Section Four -->


    
<?php include '../footer.php' ?>

