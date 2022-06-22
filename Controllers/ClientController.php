<?php

class ClientController
{
  public function getAllClients()
  {
    $clients = Client::getAll();
    return $clients;
  }

  public function AjouterClient()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'genre' => $_POST['genre'],
        'phone' => $_POST['telephone'],
        'adress' => $_POST['adress'],
      );

      $resultat = Client::add($data);
      if ($resultat === 'OK') {
        header('location:client');
      } else {
        echo $resultat;
      }
    }
  }

  public function ModifierClient()
  {
    if (isset($_POST['update'])) {

      $resultat = Client::update($_POST['id'], $_POST['name'], $_POST['email'], $_POST['genre'], $_POST['telephone'], $_POST['adress']);
      if ($resultat === 'OK') {
        header('location:client');
      } else {
        echo $resultat;
      }
    }
  }

  public function getOneClient()
  {
    if (isset($_POST['id'])) {
      $cliente = Client::getClient($_POST['id']);
      return $cliente;
    }
  }
  public function deleteClient()
  {

    if (isset($_POST['id'])) {
      $data['id'] = $_POST['id'];
      $result = Client::delete($data);
      if ($result === 'OK') {
        header('location:client');
      } else {
        echo '$result';
      }
    }
  }
  public function login()
  {
    if (isset($_POST['Client'])) {    
      $client = new client;
      $client = $client->loginClient($_POST['email']);

      if (password_verify($_POST['password'], $client['password'])==true) {
          header("location:destination");}
        else {
          header("location:login ");

          } 
     
    }
  }
}
