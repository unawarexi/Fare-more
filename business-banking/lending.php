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
<title>Business Banking || Lending | <?php echo$sitename ?></title>
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
         
     <?php include 'footer.php' ?>


<!--Page Title-->
<section class="page-title" style="background-image:url(../public/Frontend/images/background/8.jpg)">
    <div class="auto-container">
        <div class="content">
            <h1>Business <span>Services</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="..\index">Home</a></li>
                <li>Business Banking</li>
                <li>Lending</li>
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
            <div class="title">CAPABLE OF HANDLING ALL YOUR LENDING NEEDS, FROM SMALL TRANSACTIONS TO LARGE, COMPLEX DEALS.</div>
            <h2>LENDING SERVICES</h2>
        </div>
        
         <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="image-column col-md-3">
                <div class="inner-column">
                    <div class="blue">
                        <h4>Business Banking</h4>
                        <ul style="font-size: 20px;">
                            <a href="savings">
                                <li class="sidebar-li sidebar2-li">Savings</li>
                            </a>
                            <a href="checking">
                                <li class="sidebar-li sidebar2-li">Checking</li>
                            </a>
                            <a href="lending">
                                <li class="bg-blue">Lending</li>
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
                        <?php echo$shortname ?> is the financial partner that growing businesses need. We consistently deliver fast service 
                            and a full range of lending programs, building on a tradition of serving the financial needs of local 
                            businesses and individuals since 1839. Lending types include:
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
                        <ul class="black" style="list-style: circle; margin-left:30px;">
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Commercial and Industrial:</b>  We assist with working capital needs or to finance major capital expenditures.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Commercial Real Estate (CRE):</b>  These loans can be used to purchase or refinance an owner-occupied or income producing commercial property, or to expand or remodel an existing facility.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Acquisition and Development:</b>  Loans for acquiring real estate to be used for residential or commercial development.
                            </li>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                               <b>Government Contracting:</b>  We specialize in meeting the dynamic banking needs of companies serving the federal, state and commercial markets.
                            </li>
                        </ul>
                    </div>

                    <div class="" style="margin-bottom: 30px;">
                        <h6 class="black" style="margin-top: 20px;">
                            We deliver a number of lending programs, including:
                        </h6> <br>
                        <ul class="black" style="list-style: circle; margin-left:30px;">
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Term Loans</b>  <br>
                                <?php echo$shortname ?> has the ability to provide a variety of solutions to meet your financing needs.
                            </li> <br>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Lines of Credit</b>  <br>
                                Providing flexibility for short-term working capital needs, and available cash when you need it, our LOCs help optimize cash flow.
                            </li> <br>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Real Estate</b>  <br>  
                                Providing financing for the purchase, refinance, construction, expansion, or remodel of real estate properties.
                            </li> <br>
                            <li style="list-style: circle;font-size:18px;line-height:27px;">
                                <b>Credit Cards</b>  <br>
                                Providing convenient credit for your everyday business spending needs to better manage cash flow.
                            </li> <br>
                        </ul>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End About Section Four -->

<?php include 'footer.php'; ?>