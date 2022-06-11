<?php 

class Personne extends Connection{

public $id;
public $Nom;
public $Genre;
public $Adresse;
public $phone;


public  function getMatricule(){
    return $this-> id;
}

public function getNom(){
    return $this->Nom;
}

public function getGenre(){
    return $this->Genre;
}

public function getAdresse(){
    return $this->Adresse;
}

public function getPhone(){
    return $this->phone;

}

public function setid( $id){
    $this->id=$id;
}

public function setNom($Nom){
    $this->Nom=$Nom;
}

public function setGenre($Genre){
    $this->Genre=$Genre;
}

public function setAdresse($Adresse){
    $this->Adresse=$Adresse;
}


public function setPhone($phone){
    $this->phone=$phone;
}

}
?>