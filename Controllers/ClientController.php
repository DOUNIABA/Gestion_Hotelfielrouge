<?php

class ClientController
{

    public function getAllClients(){
      $clients=Client::getAll();
      return $clients;
    }

    public function AjouterClient(){
if(isset($_POST['submit'])){
  $data = array(
    'name'=>$_POST['name'],
    'email'=>$_POST['email'],    
    'genre'=>$_POST['genre'],
    'phone'=>$_POST['telephone'],
    'adress'=>$_POST['adress'],
  );

  $resultat = Client::add($data);
  if ($resultat ==='OK'){
    header('location:../client');

  }else {
    echo $resultat;
  }
}

    }

    public function getOneClient()
    {
      if (isset($_POST['id'])) {
       $data = array(
        'id'=>$_POST['id']
       );
      
        $client = Client::getClient($data);
        return $client;
   }
}


public function ModifierClient(){
  if(isset($_POST['submit'])){
    $data = array(
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],    
      'genre'=>$_POST['genre'],
      'phone'=>$_POST['telephone'],
      'adress'=>$_POST['adress'],
    );
  
    $resultat = Client::update($data);
    if ($resultat ==='OK'){
      header('location:../client');
  
    }else {
      echo $resultat;
    }
  }
  
      }

      public function deleteClient(){

        if (isset($_POST['id'])) {
          $data['id']= $_POST['id'];
          $result=Client::delete($data);
          if ($result==='OK') {
           header('loction:../client')  ;
        }else{
            echo '$result';
          }
        }
      }


}
?>