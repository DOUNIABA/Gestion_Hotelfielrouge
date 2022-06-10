
<?php
require_once('../database/DB.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | Contactez Nous</title>

        <?php require_once'./css_includes.php'?>
</head>
    <body>

        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                           <a ><font color="black"><ion-icon name="call"></ion-icon>
                            <b>+05 86373873 </b></font></a>
                            <a href="mailto:<?php echo $fetch_array['resort_email'] ;  ?>"><font color="black"><ion-icon name="mail-outline"></ion-icon></font></a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href="<?php  echo $fetch_array['resort_fb'] ?>"><b><font color="black"size="5px"><ion-icon name="logo-facebook"></ion-icon>
                                </font></b></a></li>
                                <li><a href="<?php echo $fetch_array['resort_insta'] ?>"><b><font color="black" size="5px"><ion-icon name="logo-youtube"></ion-icon></font></b></a></li>
                                 <li><a href="<?php echo "" ?><b><font color="black"size="5px"><ion-icon name="logo-instagram"></ion-icon>
                                 </font></a></b></li>
                                <li><a href="<?php echo $fetch_array['resort_whatsapp'] ?>"><b><font color="black"size="5px"><ion-icon name="logo-whatsapp"></ion-icon></font></a></b></li>
                         
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
                               
                                    <li ><a href="homee.php"> ACCUEIL</a></li>
                                    <li><a href="room.php">CHAMBRES</a></li>
                                  <li><a href="about-us.php">A PROPOS DE NOUS</a></li>
                                <li class="dropdown submenu active"><a href="contact-us.php">Contactez Nous</a></li>
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
           
            
        <div class="<?php echo $_SESSION['notification_type'];?>">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><center></center></strong> 
        </div>
    
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contactez Nous</h3>
                    <ul>
                        <li ><a href="index.php">ACCUEIL</a></li>
                        <li class="active"><a href="contact-us.php">Contactez Nous</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get Contact Area =================-->
        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-6">
                        <div class="left_ex_title">
                            <h2>Veuillez saisir <span>touch</span></h2>
                        </div>
                        <form class="contact_us_form row m0" action="function/contact.php" method="post" id="contactForm" >
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom Complet" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="number" class="form-control" id="number" name="number" placeholder="Phone no." required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Envoyer</button>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="right_contact_info">
                            <div class="contact_info_title">
                                <h3>Contact info</h3>
                                <p></p>
                            </div>
                            <div class="contact_info_list">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Location</h4>
                                        <p><br /><a href=""> <font color ='#1177d0'> In Google Map</font></a></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <ion-icon name="mail-outline"></ion-icon>                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <a href="#"></a>
                                       
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <ion-icon name="call"></ion-icon>                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <a href="#">+212 2345678</a>
                                    </div>
                                   
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get Contact Area =================-->
        
        
        
        <!--================Footer Area =================-->
     <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">

                                <img src=".png" alt="">
                                <div class="ab_wd_list">
                                  
                                    <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="mail-outline"></ion-icon>                                        <div class="media-body">
                                           <h4> <b>+212 98746523</b></h4>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>                                        </div>
                                        <div class="media-body">
                                            <h5>+212 87687332</h5>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>                                        
                                        </div>
                                        <div class="media-body">
                                            <h5>+212 876362</h5>
                                        </div>
                                    </div>
                                  <div class="media">
                                        <div class="media-left">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="media-body">
                                            <ul class="header_social">
                                <li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href=""><ion-icon name="logo-youtube"></ion-icon></a></li>
                                 <li><a href=""></a><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href=""><ion-icon name="logo-whatsapp"></ion-icon></a></li>
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
       
    
        <?php require_once'./js_includes.php' ?>

    </body>
</html>