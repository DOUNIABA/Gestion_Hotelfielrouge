

<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="../views/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="../views/assets/css/style.css" rel="stylesheet">
        <link href="../views/assets/css/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../views/assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="../views/assets/css/settings.css" rel="stylesheet">
        <link href="../views/assets/css/layers.css" rel="stylesheet">
        <link href="../views/assets/css/navigation.css" rel="stylesheet">
        <link href="../views/assets/css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="../views/assets/css/magnific-popup.css" rel="stylesheet">
        <link href="../views/assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="../views/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="../views/assets/css/bootstrap-select.css" rel="stylesheet">
        <link href="../views/assets/css/simpleLightbox.css" rel="stylesheet">
        
        <link href="../views/assets/css/style.css" rel="stylesheet">
        <link href="../views/assets/css/responsive.css" rel="stylesheet">
    </head>
    <body>

        <!--================Error Area =================-->
        <section class="error_area">
            <div class="container">
                <div class="error_inner_text_area">
                    <div class="error_inner_text">
                        <h3>404</h3>
                        <h4>Oops! That page can’t be found</h4>
                        <h5>Sorry, but the page you are looking for does not existing</h5>
                        <a class="book_now_btn" href="index.php">Go to home page</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Error Area =================-->
        
        <!--================Footer Area =================-->
     <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">

                                <img src="img/footer-logo.png" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4><?php echo  $fetch_array['resort_address']?></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                           <h4> <b>+91 <?php echo  $fetch_array['resort_phno']; ?></b></h4>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5>+91 9744242048</h5>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5>+91 8592970713</h5>
                                        </div>
                                    </div>
                                  <div class="media">
                                        <div class="media-left">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="media-body">
                                            <ul class="header_social">
                                <li><a href="<?php echo $fetch_array['resort_fb'] ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $fetch_array['resort_insta'] ?>"><i class="fa fa-youtube"></i></a></li>
                                 <li><a href="<?php echo "" ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php echo $fetch_array['resort_whatsapp'] ?>"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                        
                        
                      
                   
                                <div class="book_now_area">
                                    <a class="book_now_btn" href="function/booknow.php">Book now</a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Extra Links</h3>
                                </div>
                                <ul>
                                    <li><a href="room.php">-  Rooms</a></li>
                                    <li><a href="gallery.php">-  Gallery</a></li>
                                    <li><a href="about-us.php">-  About Us</a></li>
                                    <li><a href="contact-us.php">-  Contact Us</a></li>
                                    <li><a href="function/booknow.php">-  Reserve Now</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>our services</h3>
                                </div>
                                <ul>
                                    <li><a>-  Food </a></li>
                                    <li><a>-  Rooms</a></li>
                                    <li><a >-  Travel guide</a></li>
                                    <li><a >-  Tourist packages</a></li>
                                  
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget instagram_widget">
                                <div class="f_title">
                                    <h3>Payments</h3>
                                </div>
                                <ul >
                                    
                                    <li><a href=""><img src="img/Instamojo.jpg"></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="pull-left">
                        <h4>Copyright © Kairali Resort  <script>document.write(new Date().getFullYear());</script>. All rights reserved. </h4>
                    </div>
                    <div class="pull-right">
                        <h4>Created by: <a href="https://techzia.in">Techzia</a></h4>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../views/js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../views/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="../views/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../views/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="../views/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="../views/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../views/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="../views/vendors/counterup/waypoints.min.js"></script>
        <script src="../views/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="../views/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../views/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="../views/vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="../views/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../views/js/theme.js"></script>
    </body>
</html>