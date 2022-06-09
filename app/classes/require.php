<?php

require_once("./database/DB.php");

if( basename($_SERVER['REQUEST_URI'])=="Acceuille" || basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/voyage.php');
}