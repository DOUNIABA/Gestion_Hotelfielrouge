<pre>
<?php
session_start();
$newReservation = new ReservationController();
$chambre=null;
if(isset($_POST['addreservation'])){ 
$success=$newReservation->add();
}else if(isset($_POST['idChambre'])){
  
    $chambre =$newReservation->getChambreData($_POST['idChambre']);
  
}else{
  header('location:destination');
  exit;
}

?>
</pre>
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
                            <?php if(isset($_POST['addreservation'])){?>
                              <?php if($success){ ?>
                                  <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                      <h5 class="card-title">Opération réussite</h5>
                                      <p class="card-text">
                                        <div class="alert alert-success">
                                        Votre réservation est bien enregestrée
                                        </div>
                                      </p>
                                      <a href="destination" class="btn btn-primary">Retourner à la liste des chambres</a>
                                    </div>
                                  </div>
                              <?php }else{?>
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                      <h5 class="card-title">Opération echouée</h5>
                                      <p class="card-text">
                                        <div class="alert alert-danger">
                                        Echec d'enregistrement
                                        </div>
                                      </p>
                                      <a href="destination" class="btn btn-primary">Retourner à la liste des chambres</a>
                                    </div>
                              

                                <?php }?>
                              <?php }else{
                                ?>
                            <article class="entry">
                                <div class="card bg-light shadow p-4" style="display:flex;">
                                    <form action="" method="POST" >
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
                                          <input class="form-control" aria-label="form-select-lg example" type="hidden" name="typechambre"  value="<?= $chambre['type']?>">
                                          <input class="form-control" aria-label="form-select-lg example"  value="<?= getChambreTypeText($chambre['type'])?>" disabled>  
                                        </div> 
                  
                                          <div class="col-md-6 ">
                                            <input type="date" class="form-control" name="checkin" min="<?=date("Y-m-d") ?>" value="<?=date("Y-m-d") ?>" placeholder="Check In" >
                                            <label>Check-in</label>
                                          </div>
                                            <input type="hidden" name="prix" value="<?= $chambre['prix']?>">
                                          <div class="col-md-6">
                                            <input type="date" class="form-control" name="checkout" placeholder="Check Out" value="<?= (new DateTime('tomorrow'))->format("Y-m-d") ?>">
                                            <label>Check-Out</label>
                                          </div>                                                                                                                      
                                          <div class="badge badge-primary prix-total text-light bg-success w-25 mx-auto"><?= $chambre['prix']?> DH</div>
                                          <div class="col-md-12 text-center">
                                            <button type="submit" name="addreservation" class="btn  w-15" style="background:#F4BFBF ; color: black; ">Confirmer
                                            </button>
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
                            <?php }?>
                            
                        </div>
                        
                    </div>
                </div>
            </div>  
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("dashboard");
                var toggleButton = document.getElementById("menu-toggle");
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
            <script>
              const checkingDateEl=document.getElementsByName('checkin')[0];
              const checkoutDateEl=document.getElementsByName('checkout')[0];
              function inputChanged() {
                let prix=<?= $chambre['prix']?>;
                document.querySelector('.prix-total').innerText=prix*getDiffrence();
              }
              checkingDateEl.addEventListener('change',inputChanged);
              checkoutDateEl.addEventListener('change',inputChanged);
              //validate form on submit
              document.querySelector('form').addEventListener('submit',function(e){
                if(!getDiffrence()>0){
                  //diffrence is 0 or less
                  e.preventDefault();
                  Swal.fire({
                    icon: 'error',
                    text: 'Les dates selectionner sont pas valide!',
                  })
                }


              })

              //get diffrence betwwen checking and checkout
              function getDiffrence(){
                let checkingDate=new Date(checkingDateEl.value);
                let checkoutDate=new Date(checkoutDateEl.value);
                return checkoutDate.getDate()-checkingDate.getDate();
              }
              
            </script>

    </main>

</body>

</html>