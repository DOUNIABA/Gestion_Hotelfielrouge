

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | About-Us</title>
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
    </script></head>
    <body>

        <!--================Header Area =================-->
     <header class="main_header_area">
          <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                           <a ><font color="black"> <ion-icon name="call"></ion-icon><b>+212 08239747</b></font></a>
                            <a href=""><font color="black"><ion-icon name="mail-outline"></ion-icon><b></b></font></a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href=""><b><font color="black"size="5px"><ion-icon name="logo-facebook"></ion-icon></font></b></a></li>
                                <li><a href=""><b><font color="black" size="5px"><ion-icon name="logo-youtube"></ion-icon></font></b></a></li>
                                 <li><a href=""><b><font color="black"size="5px"><ion-icon name="logo-instagram"></ion-icon></font></a></b></li>
                                <li><a href=""><b><font color="black"size="5px"><ion-icon name="logo-whatsapp"></ion-icon></font></a></b></li>                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                              <img src="" alt="">
                                <img src="" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                               
                                    <li ><a href="homee.php"> ACCUEIL </a></li>
                                    <li><a href="room.php">CHAMBRES</a></li>
                                  <li class="dropdown submenu active"><a href="about-us.php">A PROPOS DE NOUS</a></li>
                                <li><a href="contact-us.php">CONTACTEZ NOUS</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                            
                                <li class="book_btn">
                                    <a class="book_now_btn" href="room.php">Reservez dés maintenant</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>A PROPOS DE NOUS</h3>
                    <ul>
                        <li ><a href="index.php">ACCUEIL</a></li>
                        <li class="active"><a href="about-us.html">A PROPOS DE NOUS</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->       
        <!--================Resort Story Area =================-->
        <section class="introduction_area resort_story_area">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-5">
                        <a href="#" class="introduction_img">
                            <img src="../views/assets/img/TEST3.png" alt="">
                        </a>
                       
                        <div class="introduction_left_text">
                            
                            <h6></h6>
                            <h4>LOCATION</h4>
                            <p>Kakkadampoyil is situated in Koodaranhi Panchayat in Kozhikode District. This hill top village is one of the coolest tourist destination in Malabar region. It is about 15 km from Koodaranhi, 19 km from Thiruvambady and 24 km from the Nilambur. Calicut city is about 50 km from here. There are many indigenous tribal groups in this area. It is set high on the Western Ghats, with altitudes ranging from 700 ft to 2100 ft. Kozhippara waterfalls is situated near by here. KSRTC Buses are running services from Calicut and have few buses from Thiruvambady and Nilambur towns. There is also a continuous Jeep service from Koodaranhi town to Kakkadampoyil</p>
                            
                        </div>
                     
                    </div>
                    <div class="col-md-7">
                        <div class="introduction_left_text">
                            <div class="resort_title">
                                <h2>Kairali  <span>resort</span></h2>
                                <h5>give best service to our customers</h5>
                            </div>
                            <h6><?php echo  nl2br($fetch_array['resort_about']); ?></h6>
                            <h4>NOUS SOMMES PRETES POUR VOUS GUIDER</h4>
                            <p><?php echo  nl2br($fetch_array['resort_features']); ?></p>
                            <p>A large number of tourists come to Kakkadampoyil to enjoy the cool climate and to stay away from the bustle of the city.
                            On the mountain ranges of Western Ghats bordering Kerala. Kakkadanpoyil village, an unexplored hill station 48 km away from Calicut City. Surrounded by forests, misty hill ranges, deserted roads, untouched waterfalls (Kozhippara waterfalls), make the village worth a visit. Facilities for tourists are available</p>
                           <center> <a class="about_btn_b" href="contact-us.html">contact us</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Resort Story Area =================-->
        
        <!--================Choose Resot Area =================-->
       <section class="choose_resot_area">
            <div class="container">
                <div class="center_title">
                    <h2>why choose Kairali <span>resort</span></h2>
                    <p></p>
                </div>
                <div class="row choose_resot_inner">
                    <div class="col-md-5">
                        <div class="resot_list">
                            <ul>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Strategic Position</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Great Food</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Family Resort</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious breakfast</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>High customer satisfaction</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Good parking & security</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Clean room service</a></li>
                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>Best atmosphere</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="choose_resot_slider owl-carousel">
                            <div class="item">
                                <img src="../views/assets/img/resot-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../views/assets/img/resot-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../views/assets/img/resot-3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../views/assets/img/resot-4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../views/assets/img/resot-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
     <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">

                                <img src="" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                       
                                        <div class="media-body">
                                            <h4></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>                                        </div>
                                        <div class="media-body">
                                           <h4> <b>+05 8762983</b></h4>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>                                        </div>
                                        <div class="media-body">
                                            <h5>+05 768302</h5>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>                                        </div>
                                        <div class="media-body">
                                            <h5>+05 876429</h5>
                                        </div>
                                    </div>
                                  <div class="media">
                                        <div class="media-left">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="media-body">
                                            <ul class="header_social">
                                <li><a href="<?php echo $fetch_array['resort_fb'] ?>"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="<?php echo $fetch_array['resort_insta'] ?>"><ion-icon name="logo-youtube"></ion-icon></a></li>
                                 <li><a href="<?php echo "" ?><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="<?php echo $fetch_array['resort_whatsapp'] ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
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
                                    
                                    <li><a href=""><img src="../views/assets/img/Credit-Card.jpg" style="width: 70px;"></a></li>
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
                        <h4>Created by: <a href="https://techzia.in">Techzia
</a></h4>
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
        <script src="js/theme.js"></script>
    </body>
</html>