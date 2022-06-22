<?php
$chambresController = new ChambreController();
$chambres = $chambresController->getAllChambres();
?>
<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;family=Work+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
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
                                <li><button class="btn btn-dark" class="next" data-controls="next"><a href="login">Connexion</a></button></li>
                                <li><button class="btn btn-dark" class="next" data-controls="next"><a href="logout">Déconnexion</a></button></li>

                                
                        </div>
                         </ul>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>


    <div class="hero overlay" style="background-image:url(./views/assets/images/backk.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                    <a href="ajouterReservation" class="btn btn-primary " style="color:black;">Reservez Dés maintenant</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="heading">Des Chambres spéciales</h2>

                </div>
            </div>
            <div class="row">
                <?php foreach ($chambres as $chambre) { ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-5">
                        <form action="ajouterReservation" method="POST" class="media-1">
                            <input type="hidden" name="idChambre" value="<?= $chambre['id'] ?>">
                            <span href="" class="d-block mb-3">
                                <img src="./views/assets/images/ITEM10.jpg" alt="Image" class="img-fluid">
                            </span>
                            <div class="d-flex flex-column align-items-center gap-1">
                                <div>
                                    <h3 class="d-flex flex-column gap-2">
                                        <span>
                                            <?= getChambreTypeText($chambre['type']) ?>
                                        </span>
                                        <input type="submit" class="btn btn-primary" value="Réserver" style="margin-top: 44px; color: black;">
                                    </h3>
                                </div>
                                <div class="price ms-auto">
                                    <sup>DH</sup>
                                    <span><?= $chambre['prix'] ?></span>
                                </div>
                            </div>

                            </a>
                    </div>
                <?php } ?>
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
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/ITEM10.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/elem3.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/ITEM1.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/elem2.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/elem8.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/ITEM8.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/elem1.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>

                            <div class="item">
                                <a class="instagram-item">
                                    <span class="icon-instagram"></span>
                                    <img src="views/assets/images/elem7.jpg" alt="Image" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


           
                <script src="views/js/bootstrap.bundle.min.js"></script>
                <script src="views/js/tiny-slider.js"></script>
                <script src="views/js/flatpickr.min.js"></script>
                <script src="views/js/glightbox.min.js%2baos.js%2bnavbar.js%2bcounter.js%2bcustom.js.pagespeed.jc.oPXsBT0gNp.js">
                </script>
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

                <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71941e7e4f0cc96d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</html>