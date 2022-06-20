<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="views/css/dashboard.css" />
    <title>Dashboard</title>
</head>

<body>
    <main>
        <div class="d-flex" id="dashboard">
            <div class="bg  " id="sidebar-dashboard" style="background: #94B49F;height: 100vh;">
                <a href="index.html" class="logo my-3   d-flex align-items-center">
                    <img src="" alt="">
                    <span>
                    </span>
                </a>
                <hr class="mb-3 ">
                <div class="list-group d-flex ">

                    <a href="dashboard" class="list-group-item mx-2 p-2 border-0 my-2  rounded-3  fw-bold  fs-6">
                        <img src="views/img/home.png"> Accueil</a>                   
                    <a href="client" class="list-group-item mx-2 p-2 fw-bold  fs-6  border-0 my-2">
                        <img src="views/img/user.png">Client</a>
                    <a href="chambre" class="list-group-item mx-2 border-0 fw-bold  fs-6 my-2 p-2 ">
                        <img src="views/img/chambre.png">CHAMBRE</a>
                    <a href="reservation" class="list-group-item mx-2 fw-bold  fs-6   border-0 my-2  rounded-3 p-2 ">
                        <img src="views/img/booking.png">Réservation</a>
                    <a href="message" class="list-group-item mx-2 fw-bold  fs-6  border-0 my-2  rounded-3 p-2  ">
                        <img src="views/img/message.png"> Messages</a>
                
                    <a href="#" class="list-group-item mx-2 border-0 fw-bold  fs-6 my-2 p-2 ">
                        <img src="views/img/user.png"> Profile</a>
                    <a href="login"
                        class="list-group-item mx-5 border-0 fw-bold  fs-6  bg-transparent  mt-5 mb-2 ">
                        Logout <i class="fas fa-sign-out-alt"></i> </a>

                    </ul>
                </div>
            </div>
            <div id="page-content-dashboard" class="bt">
                <nav class="navbar navbar-expand-lg   py-1 px-4 cont ">
                    <div class="d-flex align-items-center">

                        <i class="fa fa-bars me-3 " id="menu-toggle"></i>
                        <h5>Accueil</h5>
                    </div>

                    <div class="navbar-nav ms-auto">
                        <div class="nav-item ">
                            <form class="d-flex  justify-content-end mt-3 ">
                                <input class="form-control me-2 " type="search" placeholder="Search..."
                                    aria-label="Search">
                                <a href="./profile" class="mx-3 "> <img src="views/img/user (1).png"
                                        class="mx-3 w-75"></a>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid px-4">
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-lg-4 col-md-5 mb-4 ">
                            <div class="p-3 d-flex justify-content-around align-items-center card_client ">
                                <div>
                                <img src="views/img/user.png">
                                    <p class="fs-5 mb-5 Secondary-text">Clients</p>
                                </div>
                                <h1 class="fs-5 mt-5">243</h1>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-5  mb-4 ">
                            <div class="p-3  d-flex justify-content-around align-items-center card_chambre ">
                                <div>
                                    <img src="views/img/chambre.png">
                                    <p class="fs-5 mb-5 Secondary-text">Chambres</p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white">13</h1>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-5  mb-4">
                            <div class="p-3   d-flex justify-content-around align-items-center card_reservation ">
                                <div>
                                    <img src="views/img/bookingCart.png">

                                    <p class="fs-5 mb-5 Secondary-text">Réservations</p>
                                </div>
                                <h1 class="fs-5 mt-5">556</h1>
                            </div>
                        </div>
                       
                    </div>
                 
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("dashboard");
                var toggleButton = document.getElementById("menu-toggle");
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
    </main>

</body>

</html>