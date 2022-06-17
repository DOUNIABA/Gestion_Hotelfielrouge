
<?php
session_start();
$newReservation = new ReservationController();
$newReservation->add()
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
                <div class="container px-4">
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Séction de Réservation</h1>
                        </div>
                        <div>
                            <article class="entry">
                                <div class="card bg-light shadow p-4" style="display:flex;">
                                    <form action="" method="POST" class="php-email-form">
                                        <div class="row gy-4">
                  
                                          <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Nom Complet" value="">
                                          </div>

                                          <div class="col-md-6">
                                            <input type="text" name="phone" class="form-control" placeholder="Telephone">
                                          </div>

                                          <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="votre addresse email" value="" >
                                          </div>

                                          <div class="col-md-6">
                                          <select class="form-select form-select-sm" aria-label="form-select-lg example" name="typechambre"  value="">
                                            <option selected>Choisir votre chambre</option>
                                            <option value="single">single</option>
                                            <option value="double">Double</option>
                                            <option value="twins">Twins</option>
                                            <option value="twidens">Deluxe</option>
                                          </select>                                  
                                         </div> 
                  
                                          <div class="col-md-6 ">
                                            <input type="date" class="form-control" name="checkin" placeholder="Check In" >
                                            <label>Check-in</label>
                                          </div>
                                            
                                          <div class="col-md-6">
                                            <input type="date" class="form-control" name="checkout" placeholder="Check Out" >
                                            <label>Check-Out</label>
                                          </div>                                                                                                                      

                                          <div class="col-md-12 text-center">
                                            <button type="submit" name ="addreservation" class="btn  w-20" style="background:#ECB390 ; color: #012970; ">Submit
                                            </button>
                                          </div>
                  
                                        </div>
                                      </form>
                                      
                                      <div class="account mb-5" >
                                      <div class="card text-dark bg-light mb-5" style="max-width: 18rem;">
                                        <div class="card-header " >Tarif des chambres</div>
                                        <div class="card-body ">
                                          <ul>
                                              <li><h5>Single:</h5>400.00/jour</li>
                                              <li><h5>Double:</h5>800.00/jour</li>
                                              <li><h5>Deluxe:</h5>1000.00/jour</li>
                                              <li><h5>Twin:</h5>8000.00/jour</li>

                                          </ul>
                                        </div>
                                      </div>
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
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
    </main>

</body>

</html>