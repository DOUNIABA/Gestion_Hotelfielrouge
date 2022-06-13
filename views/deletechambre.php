<?php

if (isset($_POST['id'])) {

$existechambre= new ChambreController();
$chambre=$existechambre->deleteChambre();
}

?>
