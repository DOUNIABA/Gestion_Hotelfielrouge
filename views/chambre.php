<?php
$data = new ChambreController();
$chambres=$data->getAllChambres();

?>

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
        <div class="bg  " id="sidebar-dashboard" style=" background:#94B49F  ; height: 100vh;">
                <a href="index.html" class="logo my-3   d-flex align-items-center">
                    <img src="" alt="">
                    <span>
                    </span>
                </a>
                <hr class="mb-3 ">
                <div class="list-group  d-flex ">

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
                
                   
                    <a href="index.html"
                        class="list-group-item mx-5 border-0 fw-bold  fs-6  bg-transparent  mt-5 mb-2 ">
                        Deconnexion <i class="fas fa-sign-out-alt"></i> </a>

                    </ul>
                </div>
            </div>
            <div class="container-fluid px-4">
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
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Liste des chambres</h1>
                            <div>
                                <i class="fas fa-sort mx-3  "></i>
                                <a href="./ajouterChambre"> <button type="button" class="btn fw-bold  fs-6"
                                        style="background:#ECB390 ; color: #012970;">Ajouter nouvelle chambre</button></a>
                            </div>
                        </div>
                        <div class=" table-responsive-sm table-responsive-md">
                            <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                                <thead>
                                    <tr>
                                        
                                                <th>Prix</th>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Numéro de chambre</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                    foreach($chambres as $chambre){
                                    ?>                                   
                                    <tr>
                                        <td><?php echo $chambre['prix']?></td>
                                        <td><?php echo $chambre['type']?></td>
                                        <td><?php echo $chambre['description']?></td>
                                        <td><?php echo $chambre['num_chambre']?></td>

                                        <td> <form method="post" class="mr-1" action="updatechambre">
                                            <input type="hidden" name="id" value="<?php echo $chambre['id'];?>"> 
                                            <button class="btn btn-sm ">
                                                <i class="fas fa-pen mx-4 "> </i></button></form>
                                       
                                       <td> <form method="post" class="mr-1" action="deletechambre">
                                            <input type="hidden" name="id" value="<?php echo $chambre['id'];?>"> 
                                            <button class="btn btn-sm ">
                                            <i class="fas fa-trash  "></i></button></form>

                                       </td>
                                    </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
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