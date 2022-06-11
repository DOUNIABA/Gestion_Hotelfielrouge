<?php

if (isset($_POST['id'])) {

$existeClients = new ClientController();
$clients=$existeClients->deleteClient();
}

?>
