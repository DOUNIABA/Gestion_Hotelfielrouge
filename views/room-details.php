
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
    background: #fd7792;;
    color: #fff;
    line-height: 40px;
    display: inline-block;
    padding: 0px 25px;
    font-size: 14px;
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
    letter-spacing: .28px;
    position: relative;
    z-index: 2;
    -webkit-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid #fd7792;}

</style>
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
                                 <li><a href="<?php echo "" ?>"><b><font color="black"size="5px"><ion-icon name="logo-instagram"></ion-icon>
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
                               
                       <img src="img/logo22.png" alt="">
                                <img src="../img/home-slider/logo22.png" alt=""> 
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                               
                                    <li class="dropdown submenu active"><a href="homee.php"> ACCUEIL</a></li>
                                    <li><a href="room.php">CHAMBRES</a></li>
                                    <li><a href="gallery.php">GALLERIES</a></li>
                                  <li><a href="about-us.php">A PROPOS DE NOUS</a></li>
                                <li><a href="contact-us.php">CONTACTEZ NOUS</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">                 
                                <li class="book_btn">
                                    <a class="book_now_btn" href="room.php">Reservez dés maintenant</a>
                                    <a class="connexion" href="signup.php">connexion</a> 
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
                    <h3>Room Details</h3>
                    <ul>
                        <li ><a href="index.html">ACCEUIL</a></li>
                        <li  class="active"><a href="search.html">Rooms Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Search Room Area =================-->
        <section class="room_details_area">
            <div class="container">
                <div class="row room_details_inner">
                    <div class="col-md-8">
                        <div class="room_details_content">
                            <div class="room_d_main_text">
                                <div class="room_details_img owl-carousel">
                                    <div class="item">
                                        <img src="img/resot-2.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/resot-1.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <a href="#"><h4><span>CHAMBRES</span></h4></a>
                              
                                 <font color="red">
                                 <font color="red"></font>
                                <h5><span></span></h5>
                                <p></p>
                            </div>
                            <div class="room_service_list">
                                <h3 class="room_d_title">Room facilities & services</h3>
                                <div class="row room_service_list_inner">
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>24 Hour  Front Desk</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious Breakfast</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Room Service</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Welcome Drink </a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Rain Dance </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Free Parking</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>stunning ocean view</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>4 wheel Drive</a></li>
                                                <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>Camp fire with Dj</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room_details_clients">
                                
                                <div class="clients_slider owl-carousel">
                                
                                    

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search_right_sidebar">
                            <div class="book_room_area">

                             
                                <div class="book_room_box">
                                    <div class="book_table_item">
                                        <h3>check availability</h3>
                                    </div>
                                    <div class="book_table_item">
                                        <div class="input-append date form_datetime">
                                            <form action="function/availability.php?page=room-details.php?id=<?php echo $id; ?>&redirect=room-details.php&id=<?php echo $id;  ?>" method="post" >
                                            <input size="16" type="text" value=""  placeholder="Arrival Date"  name="arrival" readonly>
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true" ></i></span>
                                        </div>
                                    </div>
                                    <div class="book_table_item">
                                        <div class="input-append date form_datetime">
                                            <input size="16" type="text" value=""  placeholder="Departure Date"  name="departure" readonly>
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="book_table_item">
                                        <select class="form-control1"  name="adults"><!--Reserve now-->
                                            <option value="">Adults</option>
                                            <option>1</option>
                                           <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="book_table_item">
                                        <select class="form-control1"  name="children">
                                            <option value="">Children</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>

                                    </div>
                                    <div class="book_table_item">
                                        <a href="booking.html" class="avalibility">Check Availability</a>

                                      
                                        <!-- <input type="submit" class="astext" value="Check Availability" >  </a> -->
                                        </from>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- <div class="book_now_button">
                            <a class="book_now_btn_black2" href="function/addtocart.php?id=<?php echo $id ?>&redirect=room-details.php?id=<?php echo $id ?>">add to cart</a><br>
                            </div>
                           
                            <div class="book_now_button">
                            <a class="book_now_btn_black2" href="function/addtocart.php?id=<?php echo $id ?>&redirect=room-details.php?id=<?php echo $id ?>">add to cart</a><br>
                            </div> -->
                           
                            <!-- <div class="your_book_box">
                            <h4> YOUR CART</h4>
                              
                               
                                    <div style="overflow-x:auto;">
                                    <table>
                                    <tr>
                                    <th>Room</th>
                                    
                                     <th>Days</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                    </tr>
                                  
                                            <td>
                                                <a href="function/removechart.php?id=1&redirect=<?php echo $actual_link; ?>">
                                                    <font color='red'>Remove<font>
                                                </a>
                                             </td>
                                            </font>
                                        </tr>
                             
                                   

                                    <td>
                                    
                                    <a href="function/removechart.php?id=2&redirect=<?php echo $actual_link; ?>">
                                    <font color='red'>Remove <font>
                                    </a>
                                    </td>
                                    </tr>
                             
                               
                                </table>
                                </div>
                               <br>
                               <br>
                            <table>
                                <tr>
                               
                              <b></h5></th>
                                
                                </tr>
                            </table>
                           
                             <center>  <h6><b><font color="red">*</font>NOTE-TAXES MAY BE APPLICABLE</b></h6></center>
                                </div>
                          

                                <div class="book_now_button" >
                                <a class="book_now_btn_black1" href="booking.php" id="next" >complete order</a>
                               

                             </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Search Room Area =================-->
        
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
                                            <h4></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                           <h4> <b>+212 8743987</b></h4>
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
    </body>
</html>