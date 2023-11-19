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
<title>Personal Banking || Savings Account | <?php echo$sitename ?></title>
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
            <h1>Savings <span>Account</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="..\index">Home</a></li>
                <li>Personal Banking</li>
                <li>Savings Account</li>
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
            <div class="title">SAVE TODAY. RELAX TOMORROW</div>
            <h2>PERSONAL SAVINGS</h2>
        </div>
        
         <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="image-column col-md-3">
                <div class="inner-column">
                    <div class="blue">
                        <h4>Personal Banking</h4>
                        <ul style="font-size: 20px;">
                            <a href="savings">
                                <li class="bg-blue">Savings</li>
                            </a>
                            <a href="checking">
                                <li class="sidebar-li">Checking</li>
                            </a>
                            <a href="investment">
                                <li class="sidebar-li">Investment & Retirement</li>
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
                            S<?php echo$shortname ?> personal savings account options are designed to help you meet your financial goals.
                             Whether you're choosing a money market account for yourself or setting up savings accounts for your 
                             children, we make it easy to access your funds and help them grow. All savings accounts feature FREE 
                             online banking with bill pay, eStatements and mobile banking with check deposit.
                        </p>
                    </div>
                    <div class="text sec-title">
                        <h2>PRODUCTS</h2>
                        <p class="title">SAVINGS SOLUTIONS TO SUPPORT YOUR GOALS.</p>
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
                            <i class="fa fa-diamond"></i>
                            Platinum Savings Account
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            Starting with a minimum opening deposit of $50, Platinum Savings pays competitive rates while offering 
                            flexibility and easy access to your funds. Best of all, there’s no minimum balance requirement, and no monthly maintenance fee.
                        </p>
                        <h5 class="blue" style="margin-bottom: 10px;">Account Features</h5>
                        <ul class="black" style="list-style: circle; margin-left:20px;">
                            <li style="list-style: circle;font-size:18px;line-height:27px;">Minimum Opening Deposit: $50</li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">Minimum Balance Requirement: None</li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">Six FREE Monthly Withdrawals*</li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">Competitively Tiered Rate Structure</li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">Optional ATM Card</li>
                        </ul>
                        <p class="black" style="font-size: 12px">
                            *There is a $5 per-transaction fee for each withdrawal in excess of 6 per month. 
                            Limited items include transfers by telephone, computer, ACH, wire transfer, or any pre authorized or automatic transfers.
                        </p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-line-chart"></i>
                            Super Money Market
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            Our Super Money Market Account offers a great rate, the liquidity to access your funds easily and free online banking. 
                            This account gives you simple flexibility to keep pace with your daily life.
                        </p>
                        <h6 class="blue" style="margin-bottom: 10px;">Account Features</h6>
                        <ul class="black" style="list-style: circle; margin-left:20px;">
                            <li style="list-style: circle;font-size:18px;">Minimum Opening Deposit: $15,000</li>
                            <li style="list-style: circle;font-size:18px;">Minimum Balance Requirement: $15,000 Daily Ledger Balance</li>
                            <li style="list-style: circle;font-size:18px;">No Monthly Fee for Account Balances of $15,000*</li>
                            <li style="list-style: circle;font-size:18px;">Six FREE Monthly Withdrawals*</li>
                        </ul>
                        <p class="black" style="font-size: 12px">
                            *$15 per-transaction fee for each withdrawal in excess of 6 per month. Limited items include transfers by telephone, computer, ACH, wire transfer, or any pre authorized or automatic transfers.
                            ^$10 monthly fee if balance falls below required minimum.
                        </p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-line-chart-1"></i>
                            CD/CDARS
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            One of our simplest ways to save toward your financial goals, Certificates of Deposit are available in a wide variety of maturities from 
                            3 months to 5 years, and earn a market rate of interest. Accrued interest may be paid monthly, quarterly, semi-annually, 
                            annually or at maturity, and can be automatically credited to a <?php echo$shortname ?> account or delivered to you. 
                            For added convenience with FDIC coverage, you may choose the Certificate of Deposit Account Registry Service (CDARS®) to manage 
                            all of your certificates of deposit through a single bank relationship, on a single statement, without hassle.
                        </p>
                    </div>

                    <div style="margin-bottom: 70px;">
                        <h4 class="bg-blue">
                            <i class="flaticon-chart"></i>
                            IRA
                        </h4>
                        <p class="black" style="margin-top: 20px;">
                            If you’re planning your future retirement, you may choose to invest in a <?php echo$shortname ?> Individual Retirement Account (IRA). 
                            We offer Traditional and Roth IRAs that earn market rate of interest. Additional tax benefits may apply.
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