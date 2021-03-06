<?php
$client = new ClientController();
$client = $client->getOneClient();
if (isset($_POST['update'])) {
    $existeClient = new ClientController();
    $cliente = $existeClient->ModifierClient();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="views/css/dashboard.css" />
    <title>Dashboard</title>
</head>

<body>
    <main>
        <div class="d-flex" id="dashboard">
            <div class="bg  " id="sidebar-dashboard">

                <hr class="mb-3 ">
                <div class="list-group  d-flex ">
                    <a href="dashboard" class="list-group-item mx-2 p-2 border-0 my-2  rounded-3  fw-bold  fs-6  " style="background:#ECB390 ;">
                        <img src="views/img/home.png"> Accueil</a>
                    <a href="client" class="list-group-item mx-2 p-2 fw-bold  fs-6  border-0 bg-transparent my-2   ">
                        <img src="views/img/user.png">Client</a>
                    <a href="chambre" class="list-group-item mx-2 border-0 fw-bold fs-6 bg-transparent my-2 p-2 ">
                        <img src="views/img/chambre.png">CHAMBRE</a>
                    <a href="reservation" class="list-group-item mx-2 fw-bold  fs-6   border-0 my-2  rounded-3 p-2 ">
                        <img src="views/img/booking.png">Réservation</a>
                    <a href="#" class="list-group-item mx-2 fw-bold  fs-6  border-0 my-2  rounded-3 p-2  ">
                        <img src="views/img/message.png"> Messages</a>
                    <a href="#" class="list-group-item mx-2 border-0 fw-bold  fs-6   bg-transparent my-2 p-2 ">
                        <img src="views/img/settings (1).png"> profile</a>
                    <a href="index.html" class="list-group-item mx-5 border-0 fw-bold  fs-6  bg-transparent  mt-5 mb-2 ">
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
                                <input class="form-control me-2 " type="search" placeholder="Search..." aria-label="Search">
                                <a href="./profile" class="mx-3 "> <img src="views/img/user (1).png" class="mx-3 w-75"></a>

                            </form>
                        </div>
                    </div>

                </nav>
                <div class="container-fluid px-4">
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">modifier un Client</h1>
                        </div>
                        <div>

                            <article class="entry">
                                <div class="card bg-light shadow p-4">
                                    <form action="" method="POST" class="php-email-form">
                                        <div class="row gy-4">
                                            <input type="hidden" name="id" class="form-control" placeholder="Votre nom" value=<?php echo $client['id']; ?> required>

                                            <div class="col-md-6">
                                                <input type="text" name="name" class="form-control" placeholder="Votre nom" value=<?php echo $client['name']; ?> required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <input type="email" class="form-control" name="email" placeholder="Votre e-mail" value=<?php echo $client['email']; ?> required>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="telephone" placeholder="Numéro téléphone" value=<?php echo $client['phone']; ?> required>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="genre" placeholder="" value=<?php echo $client['genre']; ?> required>
                                            </div>

                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="adress" rows="6" placeholder="Votre Adresse" value=<?php echo $client['adress']; ?> required>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <button type="submit" name="update" class="btn  w-25" style="background:#ECB390 ; color: #012970; ">Submit
                                                </button>
                                            </div>


                                        </div>
                                    </form>
                                </div>

                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("dashboard");
                var toggleButton = document.getElementById("menu-toggle");
                toggleButton.onclick = function() {
                    el.classList.toggle("toggled");
                };
            </script>
    </main>

</body>

</html>