<?php include 'header.php'; ?>


    <!-- banner-section start -->
    <section class="banner-section inner-banner business-loan">
        <div class="overlay">
            <div class="banner-content d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-7 col-md-10">
                            <div class="main-content">
                                <h1>Business Loan</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="product.html">Product</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Loan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Business Loans</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- About Business loan In start -->
    <section class="features-section about-business-loan">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="top-section">
                            <div class="section-text">
                                <h5 class="sub-title">Business loan – without hidden fees & charges</h5>
                                <h2 class="title">A business Loan, Just as You Need It</h2>
                                <p>Get business loans approved within days with transparent lending criteria and
                                    transparent processes.</p>
                                <ul class="list">
                                    <li class="list-item d-flex align-items-center">
                                        <span class="check d-flex align-items-center justify-content-center">
                                            <img src="assets/images/icon/check.png" alt="icon">
                                        </span>
                                        <span>Same day approval and multiple funding options</span>
                                    </li>
                                    <li class="list-item d-flex align-items-center ">
                                        <span class="check d-flex align-items-center justify-content-center">
                                            <img src="assets/images/icon/check.png" alt="icon">
                                        </span>
                                        <span>Access loans without origination fees</span>
                                    </li>
                                    <li class="list-item d-flex align-items-center ">
                                        <span class="check d-flex align-items-center justify-content-center">
                                            <img src="assets/images/icon/check.png" alt="icon">
                                        </span>
                                        <span>Borrow up to $250,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-area">
                                <a href="#business-loan-form" class="cmn-btn">Apply for a business loan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="img-area">
                            <img src="assets/images/about-business-loan-Illus.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Business loan In end -->

    <!-- Business loan In start -->
    <section class="business-loan-section">
        <div class="img-area">
            <img src="assets/images/business-loan-section-left.png" alt="image">
        </div>
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h5 class="sub-title">A business loan innovator at your service</h5>
                            <h2 class="title">An inexpensive and flexible business loan on your own terms</h2>
                            <p class="top-para">We understand entrepreneurs and the corporate world with its many
                                challenges and opportunities.We don’t waste time on unnecessary paperwork and do most
                                things electronically. It’s no wonder that we are among the most popular business loan
                                providers in the <?php echo $sitename ?>.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="section-text">
                                <h3 class="title">Loan Calculator</h3>
                                <p>Choose the business loan amount that you need ($1,000 to $250,000) and the payment
                                    period (6–18 months) that suits you best.</p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <div class="range-amount">
                                        <h4 class="d-flex align-items-center justify-content-center">
                                            <label>Business Loan Amount : </label>
                                            <input type="text" disabled id="loan-amount">
                                        </h4>
                                    </div>
                                    <div id="loan-slide"></div>
                                </div>
                                <ul class="nav nav-tabs justify-content-between" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="active cmn-btn second" id="months6-tab" data-bs-toggle="tab" data-bs-target="#months6" type="button"
                                            role="tab" aria-controls="months6" aria-selected="true">6 Months</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="cmn-btn second" id="months12-tab" data-bs-toggle="tab" data-bs-target="#months12" type="button"
                                            role="tab" aria-controls="months12" aria-selected="false">12 Months</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="cmn-btn second" id="months18-tab" data-bs-toggle="tab" data-bs-target="#months18" type="button"
                                            role="tab" aria-controls="months18" aria-selected="false">18 Months</button>
                                    </li>
                                </ul>
                                <div class="bottom-area pt-120 d-xl-flex align-items-center justify-content-between">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="months6" role="tabpanel" aria-labelledby="months6-tab">
                                            <h5>Monthly instalment of <span>$9.00</span></h5>
                                        </div>
                                        <div class="tab-pane fade" id="months12" role="tabpanel" aria-labelledby="months12-tab">
                                            <h5>Monthly instalment of <span>$18.00</span></h5>
                                        </div>
                                        <div class="tab-pane fade" id="months18" role="tabpanel" aria-labelledby="months18-tab">
                                            <h5>Monthly instalment of <span>$36.00</span></h5>
                                        </div>
                                    </div>
                                    <a href="#business-loan-form" class="cmn-btn">Apply for a business loan</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Business loan In end -->

    <!-- Security Area In start -->
    <section class="security-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-area">
                            <img src="assets/images/security-area-left.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-right">
                            <h5 class="sub-title">Security is our top priority</h5>
                            <h2 class="title">You're safe with us</h2>
                            <p>Your business data is important to get financing. We keep your data safe with bank-level security and 256-bit encryption.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Security Area In end -->

    <!-- Apply for a loan In start -->
    <section class="apply-for-loan business-loan" id="business-loan-form">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="title">Apply for a loan today. Your new car is waiting for you</h2>
                            <p>Get business loans approved within days with transparent lending criteria and transparent processes.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="form-content">
                            <div class="section-header text-center">
                                <h2 class="title">Apply for a loan</h2>
                                <p>Please fill the form below. We will get in touch with you within 1-2 business days, to request all necessary details</p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="What's your name?">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" placeholder="What's your email?">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="phone">Phone</label>
                                            <input type="text" id="phone" placeholder="(123) 480 - 3540">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="state">State</label>
                                            <input type="text" id="state" placeholder="California">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="amount">Loan amount</label>
                                            <input type="text" id="amount" placeholder="Ex. $8,000 USD">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="term">Loan term</label>
                                            <input type="text" id="term" placeholder="Ex. 12 months">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <button class="cmn-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Apply for a loan In end -->

    <!-- Counter In start -->
    <section class="counter-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 cus-ord">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="single-box">
                                    <h4>1,000,000+</h4>
                                    <p>Business owners across all 50 states</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-box">
                                    <h4>3.5x</h4>
                                    <p>More likely to get approved with <?php echo $sitename ?></p>
                                </div>
                                <div class="single-box">
                                    <h4>110,000+</h4>
                                    <p>Approvals for small businesses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h5 class="sub-title">Numbers said more than words</h5>
                            <h2 class="title">We know how to help businesses like yours</h2>
                            <p>Business loan options of all shapes and sizes.we don't believe in surprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter In end -->

    <!-- How it works In start -->
    <section class="financial-planning how-works-business">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 wow fadeInUp">
                        <div class="section-header">
                            <h5 class="sub-title">A Better Way to Get Loan</h5>
                            <h2 class="title">How it works</h2>
                            <p>It's easier than you think. Follow the following simple easy steps</p>
                        </div>
                        <div class="mb-60">
                            <div class="row cus-mar">
                                <div class="col-md-6 col-sm-6">
                                    <div class="plan-box">
                                        <div class="thumb">
                                            <img src="assets/images/icon/how-works-1.png" alt="icon" class="active">
                                            <img src="assets/images/icon/how-works-11.png" alt="icon" class="alt">
                                        </div>
                                        <h5>1. Fill the form</h5>
                                        <p>Fill basic information for us to get in touch with you.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="plan-box">
                                        <div class="thumb">
                                            <img src="assets/images/icon/how-works-2.png" alt="icon" class="active">
                                            <img src="assets/images/icon/how-works-22.png" alt="icon" class="alt">
                                        </div>
                                        <h5>2. Get pre-qualified</h5>
                                        <p>Verify your ID and get on a quick video call with a loan specialist.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="plan-box">
                                        <div class="thumb">
                                            <img src="assets/images/icon/how-works-3.png" alt="icon" class="active">
                                            <img src="assets/images/icon/how-works-33.png" alt="icon" class="alt">
                                        </div>
                                        <h5>3. Send documents</h5>
                                        <p>Upload your documents on the <?php echo $sitename ?> app and get approved in</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="plan-box">
                                        <div class="thumb">
                                            <img src="assets/images/icon/how-works-4.png" alt="icon" class="active">
                                            <img src="assets/images/icon/how-works-44.png" alt="icon" class="alt">
                                        </div>
                                        <h5>4. Get a loan</h5>
                                        <p>Make smart spending decisions on the spot. Our budgeting too</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area">
                            <a href="#business-loan-form" class="cmn-btn">Apply for a business loan</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="right-box">
                            <img src="assets/images/how-works-business.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it works In end -->

   

    <!-- Get Start In start -->
    <section class="get-start wow fadeInUp">
        <div class="overlay">
            <div class="container">
                <div class="col-12">
                    <div class="get-content">
                        <div class="section-text">
                            <h3 class="title">Ready to get started?</h3>
                            <p>It only takes a few minutes to register your FREE <?php echo $sitename ?> account.</p>
                        </div>
                        <a href="sign_up.php" class="cmn-btn">Open an Account</a>
                        <img src="assets/images/get-start.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Start In end -->

   <?php include 'footer.php'; ?>