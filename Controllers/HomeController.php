<?php

class HomeController{
    public function index($show){    
        include('views/'.$show.'.php'); 
    }

}

?>