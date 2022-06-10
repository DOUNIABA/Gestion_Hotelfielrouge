

<!DOCTYPE html>
<html lang="en">
    <head>   
              <style>
.form-control1{
    width: 100%;
    border: none;
    border: 1px solid #dedede;
    height: 46px;
    padding: 0px 18px;
    font-size: 13px;
    font-family: "Montserrat", sans-serif;
    color: #8c8c8c;
    text-transform: uppercase;
}
.astext {
    width: 100%;
    background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
}

</style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Welcome To Kairali Resort. We are the Best resort located at Malappuram (Dist),Kerala. Please visit our website to know more about the different Kerala holiday packages we have on offer. We look forward to having you visit us ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kairali Resort | Home </title>
    
        <!-- <?php require_once'./css_includes.php'?> -->

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
                            <a href=""><font color="black"><ion-icon name="mail-outline"></ion-icon></font></a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href=""><b><font color="black"size="5px"><ion-icon name="logo-facebook"></ion-icon>
                                </font></b></a></li>
                                <li><a href=""><b><font color="black" size="5px"><ion-icon name="logo-youtube"></ion-icon></font></b></a></li>
                                 <li><a href="" ?>"><b><font color="black"size="5px"><ion-icon name="logo-instagram"></ion-icon>
                                 </font></a></b></li>
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
                               
                       <img src="img/logo22.png" alt="">
                                <img src="../img/home-slider/logo22.png" alt=""> 
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                               
                                    <li class="dropdown submenu active"><a href="homee.php"> ACCUEIL</a></li>
                                    <li><a href="room.php">CHAMBRES</a></li>
                                    <li><a href="about-us.php">A PROPOS DE NOUS</a></li>
                                    <li><a href="contact-us.php">CONTACTEZ NOUS</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                            
                                <li class="book_btn">
                                    <a class="book_now_btn" href="room.php">Reservez dés maintenant</a>
                                </li>
                                <li class="book_btn">
                                        <a class="connexion book_now_btn bg-success border-success" href="signup.php">connexion</a> 

                                </li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        <div class="">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><center></center></strong> 
        </div>
       
        </header>

        <!--================Header Area =================-->
        
        <!--================Slider Area =================-->
        <section class="main_slider_area main_s_banner">
            <div class="book_table_area">
                
                <div class="container" style="margin-bottom: 100px;">
                    
                    <h4 class="book_single_one"><font color="#242424" size="5px" >BIENVENUE CHEZ <br> <font color="#242424" size="6px"> KAIRALI RESORT</font></font></h4>
                    <h4 class="book_single_text"><font color="#242424" size="6px">Reserve ta chambre</font></h4>
                    <div class="book_table_inner row m0">
                        <div class="book_table_item">
                            
                            <div class="input-append date form_datetime">
                                <form action="function/availability.php?redirect=room.php&id=true&page=index.php"  method="post">
                                <input size="16" type="text" name="arrival" placeholder="Arrival Date" required readonly>                       
                                <span class="add-on"><ion-icon name="calendar-outline"></ion-icon>
                                </span>
                            </div>
                        </div>

                        <div class="book_table_item">
                            <div class="input-append date form_datetime">
                                <input size="16" type="text" name="departure"  placeholder="Departure Date" required readonly>
                                <span class="add-on"><ion-icon name="calendar-outline"></ion-icon>
                                </span>
                            </div>
                        </div>

                        <div class="book_table_item">
                            <select class="form-control1" type="number" name="adults" placeholder="Adults"  required >
                                <option value="" >Adultes</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="book_table_item">
                            <select class="form-control1" name="children" required >
                                <option value="">Enfant</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="book_table_item">
                            

                           <a type="submit" class="book_now_btn"><input type="submit" class="astext" value="vérifier la disponibilité" ></a>

                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Introduction Area =================-->
        <section class="introduction_area intro_area2">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-6">

                        <div class="introduction_img" style="padding-top:6%; ">

                            <img src="<?php echo getAsset('img/TEST3.png') ?>" alt="">
                            <div class="introduction_left_text">           
                            <h6></h6><br>
                            <h4>LOCATION</h4>
                            <p>Kakkadampoyil is situated in Koodaranhi Panchayat in Kozhikode District. This hill top village is one of the coolest tourist destination in Malabar region. It is about 15 km from Koodaranhi, 19 km from Thiruvambady and 24 km from the Nilambur. Calicut city is about 50 km from here. There are many indigenous tribal groups in this area. 
                                It is set high on the Western Ghats, with altitudes ranging from 700 ft to 2100 ft. Kozhippara waterfalls is situated near by here. 
                                KSRTC Buses are running services from Calicut and have few buses from Thiruvambady and Nilambur towns. There is also a continuous Jeep service from Koodaranhi town to Kakkadampoyil</p>
                            <img src="<?php echo getAsset('img/Safei.png') ?>"alt="">
                        </div>
                        
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Introduction <span>DE </span></h2>
                                <p>After a busy schedule, everybody needs a break and have time for leisure and recreation. Kairali Farm Resort help for  where you can spend time along with your loved ones or family on a holiday trip.</p>
                            </div>
                            <h4>Nous sommes prêts pour vous guider</h4>
                            <p><?php echo  nl2br($fetch_array['resort_features']); ?></p>
                            <p>De nomnreux touristes visite cette ville to Kakkadampoyil to enjoy the cool climate and to stay away from the bustle of the city.
                              On the mountain ranges of Western Ghats bordering Kerala. Kakkadanpoyil village, an unexplored hill station 48 km away from Calicut City. Surrounded by forests, misty hill ranges, deserted roads, untouched waterfalls (Kozhippara waterfalls), make the village worth a visit. Facilities for tourists are available</p>
                            <div class="row intro_box_item_area">
                                <div class="col-xs-4">
                                    <div class="intro_box_item" style="width: 100px;">
                                        <ion-icon name="restaurant-outline" size="large"></ion-icon>
                                        <h4>Restaurant</h4>
                                    </div>
                                </div>
                               
                                <div class="col-xs-4">
                                    <div class="intro_box_item">
                                        <ion-icon name="wifi" size="large"></ion-icon>
                                        <h4>free wifi</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Introduction Area =================-->
        
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
                                <img src="<?php echo getAsset('img/resort-1.png') ?>" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo getAsset('img/resort-2.png') ?>" alt="">
                            </div>
                            <div class="item">
                                <img src=""<?php echo getAsset('img/resort-3.png') ?>" alt="">
                            </div>
                            <div class="item">
                                <img src=""<?php echo getAsset('img/resort-4.png') ?>" alt="">
                            </div>
                            <div class="item">
                                <img src=""<?php echo getAsset('img/resort-5.png') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Resot Area =================-->
        
        <!--================Explor Room Area =================-->
        <section class="explor_room_area explor_slider_area">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="pull-left">
                        <div class="left_wh_title">
                            <h2>Explore Our <span>rooms</span></h2>
                            <p>choose room according to budget</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="about_btn_wh" href="room.html">view all rooms</a>
                    </div>
                </div>
               
                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=1" class="room_image">
                                <img src="<?php echo getAsset('img/room-1.png') ?>" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=1"><h4>Economy</h4></a>
                                <ul>
                                    <li><a>DOUBLE-BED ROOM</a></li>
                                    
                                </ul>
                                <font color="red"></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>DH 3000<span>/ Day</span></h3>
                                    </div>
                                    <div><br><br>
                                        <a class="book_now_btn" href="room-details.php?id=1">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=1" class="room_image">
                                <img src="<?php echo getAsset('img/room-3.png') ?>" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=1"><h4>Economy</h4></a>
                                <ul>
                                    <li><a>DOUBLE-BED ROOM</a></li>
                                    
                                </ul>
                              
                                <font color="red"></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>DH 3000<span>/ Day</span></h3>
                                    </div>
                                    <div><br><br>
                                        <a class="book_now_btn" href="room-details.php?id=1">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
          
                    </div>
                        <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <a href="room-details.php?id=2" class="room_image">
                                <img src="<?php echo getAsset('img/room-.png') ?>" alt="">
                            </a>
                            <div class="explor_text">
                                <a href="room-details.php?id=2"><h4>Standard</h4></a>
                                <ul>
                                    <li><a>DOUBLE-BED ROOM WITH BALCONY </a></li>
                                    
                                </ul>
                                 <font color="red"></font>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>DH 4000<span>/ Day</span></h3>
                                    </div>
                                    <div ><br><br>
                                        <a class="book_now_btn" href="room-details.php?id=2" >View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <section class="discount_area">
            <div class="container">
                <div class="row discount_inner">
                   
                    <div class="col-md-12" align="center">
                        <div class="discount_right_content">
                            
                            <h4>You Are The One  <br /> We Have Been Waiting For </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Discount Area =================-->
        
        <!--================Footer Area =================-->
     <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widgRet">

                                <img src="" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4><b>+05 76934935</b></h4>
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
                                <ul>                               
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
                        <h4>Created by: <a href="https://techzia.in">Techzia</a></h4>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Search Box Area =================-->
        
   <?php require_once'./js_includes.php' ?>
    </body>
</html>