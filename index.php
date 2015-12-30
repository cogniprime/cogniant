<!DOCTYPE html>
<?php
error_reporting(0);
// print_r($_SERVER['REMOTE_ADDR']);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR'],
    CURLOPT_USERAGENT => 'Cogniant restriction'
));
$response = curl_exec($curl);
curl_close($curl);
$json = json_decode($response);
$countryCode = $json->country_code;
if($countryCode==='US'||$countryCode==='GB'||$countryCode==='CA')
{
    echo "<b><center><h1>ERROR 404,page not found</h1></center></b>";
    exit;
}
?>
<html>
    <head>
        <title>Mental Health Therepy | Depression | CBT | Anxiety Disorders | Patient enablement Solution</title>
        <meta name="description" content=" Innovative patient enablement solution for psychological therapy, depression, anxiety disorders and personalised condition management using quantified self and big data">
        <meta name="keywords" content="mental health technology,depression,anxiety disorders,PHQ9,beck scale,mobile sensing,quantified self,australia,depression medicine,behaviour health,mobile behavior,suicide prevention,behaviour analytics,clinician dashboards,patient enablement,patient empowerment,personalized delivery,personalization,mental health,big data health,australia mental health,mental health perth,mental health singapore,mental health adelaide,mental health sydney,mental health melbourne,mental health brisbane,mental health canberra,mental health tasmania,mental health darwin,mental health gold coast,mental health new zealand,behaviour health perth,behaviour health singapore,behaviour health adelaide,behaviour health sydney,behaviour health melbourne,behaviour health brisbane,behaviour health canberra,behaviour health tasmania,behaviour health darwin,behaviour health gold coast,behaviour health new zealand,Psychology,Psychology tools,Psychology technology,Psychiatry,Counseling,Therapy,CBT,Cognitive Behavior Therapy ">
        <meta charset="utf-8">
        <meta name="author" content="Mangesh Jadhav">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- ================ Favicon's ================ -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <!-- Apple Touch Icon 72x72 -->
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <!-- Apple Touch Icon 114x114 -->
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

        <!-- ================ CSS Files ================ -->


        <!-- ================ Essential Styles = Required in All Pages ================ -->
        <!-- Bootstrap min-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- Animate-->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- YTPlayer-->
        <link rel="stylesheet" href="assets/css/YTPlayer.css">
        <!-- OWL Carousel-->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- Magnific Popup-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Main Style-->
        <link rel="stylesheet" href="style.css">
        <!-- Margin & Padding-->
        <link rel="stylesheet" href="assets/css/m-p.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="assets/css/style-responsive.css">
        <!-- ========================================================================= -->

        <!-- ==== Additional = Required on demand [ EX: when using Revolution Slider link his files ] ========= -->
        
        <!-- ================================================================================ -->

        <!-- ==== Header JS  [ some pages need to load js file before loading] ========= -->
        <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- ================================================================================ -->

        <style type="text/css">
            a.follow-button.profile {
                display:none !important;
            }

            .successMsg{
                display: none;
            }
            .successMsg h1{
                color: #fff;
                text-align: center;
                font-size: 20px; 
            }
        </style>

    </head>
    <body class="appear-animate agency-v dosis">

        <!-- Page Loader -->        
        <div class="bo-loading">
            <div class="loader-w loader-1"></div>
        </div>
        <!-- End Page Loader -->
        
        <!--Page Wrap -->
        <main class="page" id="top">

             <section class="home-section bg-dark parallax-4" data-background="assets/demo/mockups/cogniant-banner.jpg">
                <div class="force-height-full">
                    <div class="home-content container">
                        <div class="cover-text">
                             <div class="container">
                                <div class="row">
                                    <div class="welcome-intro col-sm-7 col-md-7  mt--80" data-wow-delay="0.1s" data-wow-duration="2s">
                                         <h1>Cogniant.co</h1>
                                         <p class="cover-excerpt">Behaviour Health | Patient Enablement | Big Data</p>
                                    </div><!--End Intro-->
                                 </div><!--End Row-->
                             </div><!--End container-->
                         </div><!--End Cover Text-->
                     </div><!--End Home Content-->
                 </div><!--End Height Full-->
             </section><!-- End Cover Section -->

            <nav class="liomenu main-nav mini-nav dark transparent white-border stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <div class="container">
                        <div class="nav-logo-wrap local-scroll">
                            <div class="logo-container">
                                <a href="#top" class="logo">
                                    <img src="assets/images/logo.png" alt="" class="large-logo">
                                    <img src="assets/images/small-logo.png" alt="" class="small-logo">
                                </a>
                            </div><!--End Logo Container-->
                        </div>
                        <!-- <div class="mobile-nav">
                            <i class="fa fa-bars"></i>
                        </div> -->
                        <!-- Main Menu -->
                       <!--  <div class="header-search pull-right ml-30">
                            <div class="option searchnav"><span class="showsearch"><i class="fa fa-search"></i></span></div>
                        </div> --><!--End Header Search-->
                        <div class="inner-nav desktop-nav pull-right">
                            <ul class="clearlist fontweight-600">
                               

                                
                            </ul>
                        </div><!--End desktop-nav-->
                    </div><!--End Container-->
                </div><!--End full-wrapper-->
            </nav><!-- End Navigation panel -->

          <!--   <div class="searchoverlay">
                    <i class="pe-7s-close closesearch"></i>
                    <form  method="get" class="searchform" action="javascript:void(0)">
                        <input type="text" value="" name="s" class="query" placeholder="Enter Search Query...">
                        <i class="pe-7s-search"></i>
                    </form>
            </div> --><!-- End searchoverlay -->


            <!-- services Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    <div class="section-services">
                        <div class="alt-service-grid">
                            <div class="row multi-columns-row">

                                <div class="col-sm-6 col-md-4 col-lg-4 mb-0">
                                    <div class="alt-features-item align-center">
                                        <div class="alt-features-icon">
                                            <img src="assets/demo/icons/1.png" alt="">
                                        </div>
                                        <h3 class="alt-features-title">Patient Mobile App</h3>
                                        <div class="alt-features-descr align-center">
                                        <p class="fontsize-sm mb-0">Cogniant Patient ​enablement app for personalized condition management​.</p>
                                        </div>
                                    </div>
                                </div><!-- End Features Item -->

                                <div class="col-sm-6 col-md-4 col-lg-4 mb-0">
                                    <div class="alt-features-item align-center">
                                        <div class="alt-features-icon">
                                            <img src="assets/demo/icons/2.png" alt="">
                                        </div>
                                        <h3 class="alt-features-title">Clinical dashboard</h3>
                                        <div class="alt-features-descr align-center">
                                        <p class="fontsize-sm mb-0">Interactive dashboards with continuous updates on patient condition.</p>
                                        </div>
                                    </div>
                                </div><!-- End Features Item -->

                                <div class="col-sm-6 col-md-4 col-lg-4 mb-0">
                                    <div class="alt-features-item align-center">
                                        <div class="alt-features-icon">
                                            <img src="assets/demo/icons/3.png" alt="">
                                        </div>
                                        <h3 class="alt-features-title">Evidence Based Decisions</h3>
                                        <div class="alt-features-descr align-center">
                                        <p class="fontsize-sm mb-0">Epidemiological view of patient condition to provider and deep learning of patient behavior.</p>
                                        </div>
                                    </div>
                                </div><!-- End Features Item -->

                            </div><!--End Row-->
                        </div><!-- End Service Grid -->
                    </div><!--Section services-->
                </div><!--End Container-->
            </section><!-- End Services Section -->

            <!-- Contact Section -->
            <!-- End Google Map -->
           




            <!-- fooetr -->
            <section class="small-section bg-dark bg-tumblr border-bottom-w">
                <div class="container footer-widgets">
                

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="widget twitter-widget wow fadeIn">
                                <a class="twitter-timeline" href="https://twitter.com/CogniantHealth" data-widget-id="677057416144400384" data-chrome="nofooter noborders">Tweets by @CogniantHealth</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                <!--End Widget Content-->
                            </div><!--End Widget-->
                            
                        </div><!--End Col-->
                        <div class="col-sm-6 col-md-6">
                            <div class="widget widget_portfolio">
                                <h4 class="widget-title">Get in touch with us.</h4>
                                    <div class="home-footer-contact">
                                        <form class="form contact-form" id="top-contactform" name="top-contactform" action="include/sendemail.php" method="post">
                                            <div class="clearfix">
                                                
                                                <div class="cf-left-col">
                                                    <input type="hidden" name="nameHide" value="1">
                                                    <!-- Name -->
                                                        <div class="form-group" id="top-contactform">
                                                            <input type="text" name="name" id="top-contactform-name" class="input-md round form-control name-fiels" placeholder="Name" pattern=".{3,100}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" name="lastname" id="top-contactform-lastName" class="input-md round form-control last-name-fiels" placeholder="Last Name" pattern=".{3,100}" required >
                                                        </div>
                                                    
                                                    <!-- Email -->
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="top-contactform-email" class="input-md round form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                                        </div>
                                                    
                                                </div>
                                                
                                                <div class="cf-right-col">
                                                    
                                                    <!-- Message -->
                                                    <div class="form-group">                                            
                                                        <textarea name="message" id="top-contactform-message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="clearfix">
                                                
                                                <div class="pull-left">
                                                    
                                                    <!-- Inform Tip -->                                        
                                                    <div class="form-tip pt-20">
                                                        <i class="fa fa-info-circle"></i> All the fields are required
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="pull-right">
                                                    
                                                    <!-- Send Button -->
                                                    <div class="align-right pt-10">
                                                        <button  type="submit" class="submit_btn btn btn-mod btn-mod-defult btn-medium btn-round m-0" id="top-contactform-submit">Submit Message</button>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            
                                            <div id="result"></div>
                                        </form>
                                        <div class="successMsg">
                                            <h1>We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.</h1>
                                        </div>
                                    </div>
                                
                            </div><!--End Widget-->
                            <div class="clear"></div>
                        </div><!--End Col-->
                        
                        <div class="col-md-12 pt-30 pb-0">
                            <div class="get-in-touch">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="social-btns borderd">
                                            <h5 class="copyright">Copyright ©2015, Cogniant.co <a href="mailto:info@cogniant.co"><span class="et-envelope"></span></a> <div class="clearfix"></div></h5>
                                             
                                             
                                                
                                        </div>
                                    </div><!--End Col-->
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                            <h5 class="designedBy">Website designed by <a href="http://www.cbil360.com/in/" target="_blank" style="color:#28a8d3;border:none">CBIL360</a></h5>
                                    </div><!--End Col-->
                                </div><!--End Row-->
                            </div><!--End Touch-->
                        </div><!--End Col-->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->
            <!-- fooetr -->



        </main><!-- End Page Wrap -->

        <!-- ========================================== JS ========================================== -->

        <!-- ========================= Essential JS = Required in All Pages ========================= -->
        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
        <!-- jQuery.easing -->
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <!-- jQuery Bootstrap -->
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- jQuery.scrollTo -->
        <script type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- jQuery.localScroll -->
        <script type="text/javascript" src="assets/js/jquery.localScroll.min.js"></script>
        <!-- jQuery.viewport -->
        <script type="text/javascript" src="assets/js/jquery.viewport.mini.js"></script>
        <!-- jQuery.appear -->
        <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
        <!-- Sticky Plugin -->
        <script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
        <!-- Parallax -->
        <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
        <!-- FitVids -->
        <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
        <!-- imagesLoaded -->
        <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- Magnific Popup -->
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <!-- Masonry PACKAGED -->
        <script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
        <!-- Isotope -->
        <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
        <!-- WOW -->
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <!-- jQuery countTo -->
        <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
        <!-- Basic jQuery Functions -->
        <script type="text/javascript" src="assets/js/custom-scripts.js"></script>
        <!-- jQuery Media Player YTPlayer -->
        <script type="text/javascript" src="assets/js/jquery.mb.YTPlayer.js"></script>
        <!-- jQuery extended placeholder plugin -->
        <!--[if lt IE 10]><script type="text/javascript" src="assets/js/placeholder.js"></script><![endif]-->
        <!-- =============================================================================================== -->

        <!-- ========================= Additional JS File  = Required When needed ========================= -->
        <!-- modernizr.custom -->
        <script type="text/javascript" src="assets/js/modernizr.custom.25376.js"></script>
        <!-- classie -->
        <script type="text/javascript" src="assets/js/classie.js"></script>
        <!-- jQuery Background video plugin for jQuery -->
        <script type="text/javascript" src="assets/js/jquery.backgroundvideo.min.js"></script>
        
        <!-- forms -->
        <script src="js/form/jquery.form.min.js"></script>
        <!--<script src="js/form/jquery.validate.min.js"></script>-->

        <script type="text/javascript">

            $(document).ready(function() { 
                // bind 'myForm' and provide a simple callback function 
                $('#top-contactform').ajaxForm(function() { 
                    
                    $('.contact-form').fadeOut(1000);
                    $('.successMsg').fadeIn(1000);
                    $("#top-contactform").addClass('submited');

                }); 
            }); 
            

            </script>


        
        <!-- =============================================================================================== -->

        <!-- ==== Additional Scripts  [ Here scripts that can not be replicated ] ==== -->
        
        <!-- ================================================================================================= -->

    </body>
</html>
