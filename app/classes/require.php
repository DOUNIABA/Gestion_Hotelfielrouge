<?php

require_once("./database/DB.php");

if( basename($_SERVER['REQUEST_URI'])=="ajouterReservation" || basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('Controllers/ReservatioController.php');
}