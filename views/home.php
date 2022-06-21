<?php 
session_start();
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;family=Work+Sans:wght@400;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./views/assets/css/style.css" />
    <title>Hotel</title>
</head>
<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="home.html" class="logo m-0 float-start text-white">Hotel</a>
                        </div>
                        <div class="col-8 text-center">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="home">ACCUEIL</a></li>
                                <li><a href="destination">CHAMBRES</a>
                                </li>
                                <li><a href="services">SERVICES</a></li>
                                <li><a href="contact">CONTACT</a></li>
                                <li><button class="btn btn-dark" class="next" data-controls="next"><a href="signup">Connexion</a></button></li>
                            <li> <div class="uuser-name" >
                                    <h1 style="color:white;"> Bonjour
                                        <?php  
                                        echo $_SESSION["name"]; ?> 
                                    </h1></li>

                                    <li><a href="<?php echo "logout"?>"> <?php echo $_SESSION['name']?></li>
                                    
                             </div> 
                             
                            </ul>
                           
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="hero overlay" style="background-image:url(././views/assets/images/backk.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="heading mb-5 text-white">BIENVENUE CHEZ NOUS</h1>
                    <a href="destination" class="btn btn-primary" style="color:black;">Reservez Dés maintenat</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-features bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="heading">Nos Services</h2>
                </div>
                <div class="col-lg-6 text-end">
                </div>
            </div>
        </div>
        <div class="features-slider-wrap">
            <div class="features-slider" id="features-slider">
                <div class="item">
                    <div class="feature bg-color-1">
                        <span class="flaticon-trekking">
                            <ion-icon name="restaurant"></ion-icon>
                        </span>
                        <h3>RESTAURANT</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="feature bg-color-3">
                        <span class="flaticon-suitcase">
                            <ion-icon name="car-sport"></ion-icon>
                        </span>
                        <h3>
                            TRANSPORT</h3>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="feature bg-color-4">
                        <span class="flaticon-suitcase">
                            <ion-icon name="wifi-outline"></ion-icon>
                        </span>
                        <h3>WIFI GRATUIT</h3>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div id="features-slider-nav">
                        <button class="btn btn-primary" class="prev" data-controls="prev"></button>
                        <button class="btn btn-primary" class="next" data-controls="next"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section sec-about">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-lg-6 has-bg" data-aos="fade-right">
                    <img src="././views/assets/images/background1.jpg" alt="Image"
                        class="img-fluid img-box-shadow rounded">
                </div>
                <div class="col-lg-4 align-self-center" data-aos="fade-left" data-aos-delay="100">
                    <h2 class="heading mb-4">A propos de l'Hotell</h2>
                    <p>Cela vous semble peut-être évident, mais commenceons par là. Réserver un séjour en hôtel vous permettra d’avoir un confort que vous n’aurez jamais dans un camping. Même dans un camping cinq étoiles, vous n’aurez pas le même type de confort. Dans un hôtel, vous aurez un lit moelleux, des draps bien propres, des murs et un toit qui ne fait pas de bruit lorsque la pluie tombe dessus. Cela semble élémentaire, mais ce sont des choses que vous n’aurez pas en camping.</p>
                    
                </div>
            </div>
        </div>
    </div>
 
    <div class="section sec-instagram">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-3" data-aos="fade-up">
                    <h2 class="heading">Gallerie</h2>
                </div>
               
            </div>
        </div>
        <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="instagram-slider" id="instagram-slider">
                <div class="item">
                    <a class="instagram-item">
                        <img src="././views/assets/images/ITEM10.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a class="instagram-item">
                        <img src="././views/assets/images/elem3.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a class="instagram-item">
                        <img src="./views/assets/images/ITEM1.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a class="instagram-item">
                        <img src="./views/assets/images/elem2.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a class="instagram-item">
                        <img src="./views/assets/images/elem8.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a class="instagram-item">
                        <img src="./views/assets/images/ITEM8.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a class="instagram-item">
                        <img src="./views/assets/images/elem1.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <img src="./views/assets/images/elem7.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

            </div>
        </div>
    </div>


    
<div class="site-footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>ACCUEIL</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">APROPOS</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Destination</a></li>
                     
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Zone de pratique</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">VOYAGE</a></li>
                            <li><a href="#">Destination</a></li>
                            <li><a href="#">TourS</a></li>
                            <li><a href="#">VACANCES AVEC FAMILLE</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">RESTAURANR</a></li>
                            <li><a href="#">TRANSPORT</a></li>
                            <li><a href="#">WIFI</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class=""><ion-icon name="logo-instagram"></ion-icon></span></a></li>
                            <li><a href="#"><span class=""><ion-icon name="logo-twitter"></ion-icon></span></a></li>
                            <li><a href="#"><span class=""><ion-icon name="logo-facebook"></ion-icon></span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                       
                </div>
            </div>
        </div>
    </div>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <script src="views/js/bootstrap.bundle.min.js"></script>
    <script src="views/js/tiny-slider.js"></script>
    <script src="views/js/flatpickr.min.js"></script>
    <script src="views/js/glightbox.min.js%2baos.js%2bnavbar.js%2bcounter.js%2bcustom.js.pagespeed.jc.oPXsBT0gNp.js"></script>
    <script>
        eval(mod_pagespeed_JkAIZiki3e);
    </script>
    <script>
        eval(mod_pagespeed_t4wOQmRalS);
    </script>
    <script>
        eval(mod_pagespeed__uSXtZ$yB8);
    </script>
    <script>
        eval(mod_pagespeed_7VBtNXU4$J);
    </script>
    <script>
        eval(mod_pagespeed_ZG58KtslWH);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71941e7e4f0cc96d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>