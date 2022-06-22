<?php
if (isset($_POST['sendContact'])) {
    $newContact = new ContactController();
    $newContact->addContact();
}
?>
<?php
session_start();
?>
<!Doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;family=Work+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./views/assets/css/style.css" />
    <title></title>

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
                                <li><button class="btn btn-dark" class="next" data-controls="next"><a href="logout">Déconnexion</a></button></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="hero overlay" style="background-image:url(./views/assets/images/ITEM8.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="heading text-white" data-aos="fade-up">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <h2 class="heading">
                        ENTRER EN CONTACT</h2>
                </div>
            </div>
            <form action="" class="row justify-content-between" method="POST">
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="name" class="ps-3 fw-bold mb-2">Name</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="ps-3 fw-bold mb-2">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="message" class="ps-3 fw-bold mb-2">Message</label>
                            <textarea name="msg" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <input type="submit" name="sendContact" class="btn btn-primary text-white py-3" value="Send Message">
                        </div>
                    </div>
                </div>
            </form>
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

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71941e8a1dadc96d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>