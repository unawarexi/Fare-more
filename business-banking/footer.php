
<!-- Begin of Chaport Live Chat code -->
<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
(function(w,d,v3){
w.chaportConfig = {
  appId : '<?php echo$tawk ?>'
};

if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<!-- End of Chaport Live Chat code -->
    <!-- End of Chaport Live Chat code -->

<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                
                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href=""><img src="..\myaccount\footerlogo.png" width="180" alt=""></a>
                                </div>
                                <div class="text">
                                    <?php echo$shortname ?> was designed for those who demand banking that's dramatically better than what they’ve 
                                    experienced in the past. Our innovative methods and products keep pace with your life and your business.
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Links</h4>
                                <ul class="list-link">
                                    <li><a href="..\index">Home</a></li>
                                    <li><a href="..\about">About</a></li>
                                    <li><a href="..\personal-banking\savings">Personal</a></li>
                                    <li><a href="checking">Business</a></li>
                                    <li><a href="..\contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                
                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Support</h4>
                                <ul class="list-link">
                                    <li><a href="..\privacy-policy">Privacy Policy</a></li>
                                    <li><a href="..\careers">Careers</a></li>
                                    <li><a href="..\investors-relation">Investor Relations</a></li>
                                    <li><a href="..\privacy-security">Privacy & Security</a></li>
                                    <li id="google_translate_element"></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h4>Contact</h4>
                                <div class="widget-content">
                                    <ul class="list-style-two">
                                        <li><span class="icon fa fa-phone"></span> <?php echo$sitephone ?></li>
                                        <li><span class="icon fa fa-envelope"></span> <?php echo$siteemail ?></li>
                                        <li><span class="icon fa fa-map-marker"></span>
                                            <?php echo$siteaddress ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Copyright Column -->
                <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright"><?php echo date("Y") ?> &copy; All rights reserved<a href="#"> <?php echo$sitename?></a></div>
                </div>
                
                <!-- Social Column -->
                <!-- <div class="social-column col-lg-6 col-md-6 col-sm-12">
                    <ul>
                        <li class="follow">Follow us: </li>
                        <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-rss-square"></span></a></li>
                    </ul>
                </div> -->
                
            </div>
        </div>
    </div>
</footer>

</div>
<!--End pagewrapper-->

<script src="..\public\Frontend\js\jquery.js"></script>
<script src="..\public\Frontend\js\popper.min.js"></script>
<script src="..\public\Frontend\js\bootstrap.min.js"></script>
<script src="..\public\Frontend\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script src="..\public\Frontend\js\jquery.fancybox.js"></script>
<script src="..\public\Frontend\js\appear.js"></script>
<script src="..\public\Frontend\js\owl.js"></script>
<script src="..\public\Frontend\js\wow.js"></script>
<script src="..\public\Frontend\js\jquery-ui.js"></script>
<script src="..\public\Frontend\js\main.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="..\public\Frontend\js\map-script.js"></script>
<!--End Google Map APi-->

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
    function redirectToBanking(){
         document.getElementsByClassName("preloader").style.display="inline";
         document.getElementsByClassName("preloader").style.opacity = "0.7";
        setTimeout(function(){
       window.location.href='../myaccount';
        }, 4000);
        }
</script>

</body>

</html>
