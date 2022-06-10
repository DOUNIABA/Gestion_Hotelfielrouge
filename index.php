
<?php
// if(basename($_SERVER['REQUEST_URI'])=="client" || basename($_SERVER['REQUEST_URI'])=="chambre" || basename($_SERVER['REQUEST_URI'])==" reservation"
// ||basename($_SERVER['REQUEST_URI'])==" "||basename($_SERVER['REQUEST_URI'])==" "){
//     include('views/includes/sidebar.php') ;
// }
require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home =new HomeController();
$page=['dasboard','homee','','','','',''];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}
else{
        $home->index('signup');
    }
