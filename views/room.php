
<?php
require_once('../database/DB.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                            <b>+05 97343769</b></font></a>
                            <a href=""><font color="black"><ion-icon name="mail-outline"></ion-icon><b><></b></font></a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href=""><b><font color="black"size="5px"><ion-icon name="logo-facebook"></ion-icon></font></b></a></li>
                                <li><a href=""><b><font color="black" size="5px"><ion-icon name="logo-youtube"></ion-icon></font></b></a></li>
                                 <li><a href= ""><b><font color="black"size="5px"><ion-icon name="logo-instagram"></ion-icon></font></a></b></li>
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
                               
                                    <li ><a href="homee.php"> ACCUEIL</a></li>
                                    <li class="dropdown submenu active"><a href="room.php">CHAMBRES</a></li>
                                  <li><a href="about-us.php">A PROPOS DE NOUS</a></li>
                                <li><a href="contact-us.php">Contactez nous</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                            
                                <li class="book_btn">
                                    <a class="book_now_btn" href="function/booknow.php">Reservez dés maintenant</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        
            
        <div class="">
            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
            <strong><center></center></strong> 
        </div>
      
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>CHAMBRES</h3>
                    <ul>
                        <li ><a href="index.html">ACCUEIL</a></li>
                        <li class="active"><a href="room.html">CHAMBRES</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Explor Room Area =================-->
        <section class="explor_room_area explore_room_list">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="left_ex_title">
                       <center> <h2>Explorez nos <span>CHAMBRES</span></h2>
                        <p>choisir la chambre en fonction de votre budget</p></center>
                    </div>
                </div>         
                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=1" class="room_image">
                                <img src="views/assets/img/room-2.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=1"><h4>Standard</h4></a>
                                <ul>
                                    <li><a></a></li>
                                    
                                </ul>
                                <font color="red"></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>DH7000<span>/ jour</span></h3>
                                    </div>
                                    <div><br><br>
                                        <a class="book_now_btn" href="room-details.html">Voir les details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=1" class="room_image">
                                <img src="views/assets/img/room-2.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=1"><h4>Economy</h4></a>
                                <ul>
                                    <li><a></a></li>
                                    
                                </ul>
                                <font color="red"></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>DH4000<span>/ jour</span></h3>
                                    </div>
                                    <div><br><br>
                                        <a class="book_now_btn" href="room-details.html">Voir les details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=2" class="room_image">
                                <img src="views/assets/img/room-2.jpg" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=2"><h4>Eco</h4></a>
                                <ul>
                                    <li><a></a></li>
                                    
                                </ul>
                                 <font color="red"></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>DH3000<span>/ jour</span></h3>
                                    </div>
                                    <div ><br><br>
                                        <a class="book_now_btn" href="room-details.html" >Voir les details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--================End Explor Room Area =================-->
        
        <!--================Footer Area =================-->
     <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">

                                <img src="" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4><b>+05 763493</b></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>

                                        </div>
                                        <div class="media-body">
                                           <h4> <b>+05 97273545</b></h4>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>

                                        </div>
                                        <div class="media-body">
                                            <h5>+05 9744242048</h5>
                                        </div>
                                    </div>
                                     <div class="media">
                                        <div class="media-left">
                                            <ion-icon name="call"></ion-icon>

                                        </div>
                                        <div class="media-body">
                                            <h5>+05 8592970713</h5>
                                        </div>
                                    </div>
                                  <div class="media">
                                        <div class="media-left">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="media-body">
                                            <ul class="header_social">
                                <li><a href=""><ion-icon name="logo-facebook"></ion-icon>
                                </a></li>
                                <li><a href=""></a><ion-icon name="logo-youtube"></ion-icon>
                                </a></li>
                                 <li><a href=""><ion-icon name="logo-instagram"></ion-icon>
                                 </a></li>
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
                                    <h3>lien supplémentaire</h3>
                                </div>
                                <ul>
                                    <li><a href="room.php">-  CHAMBRES</a></li>
                                    <li><a href="gallery.php">-  GALLERIE</a></li>
                                    <li><a href="about-us.php">-  A PROPOS DE NOUS</a></li>
                                    <li><a href="contact-us.php">-  Contactez nous</a></li>
                                    <li><a href="function/booknow.php">-  Reservez dés maintenant</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Nos services</h3>
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
                                    
                                    <li><a href=""><img src="img/Credit-Card.jpg" style="width:70px ;"></a></li>
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