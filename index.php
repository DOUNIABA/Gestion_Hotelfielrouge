
<?php

include('views/includes/header.php') ;
require_once('app/classes/require.php');
require_once('./autoload.php');
require_once('./controllers/HomeController.php');
$home =new HomeController();
$page=['signup','login','dashboard','home','destination','contact','about','services','client','ajouterClient','chambre','ajouterChambre','reservation','ajouterReservation','update','delete','deletechambre','updatechambre','admin','message','logout'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}
else{
        $home->index('home');
    }

    include('views/includes/footer.php') ;
    