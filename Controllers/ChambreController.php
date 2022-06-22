<?php

class ChambreController
{
  public function getAllChambres()
  {
    $chambre = Chambre::getAll();
    return $chambre;
  }

  public function addChambre()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'prix' => $_POST['prix'],
        'type' => $_POST['type'],
        'description' => $_POST['description'],
        'num_chambre' => $_POST['num_chambre'],
      );
      $result = Chambre::add($data);
      if ($result === 'OK') {
        var_dump('$result');
        header('location:chambre');
      } else {
        echo $result;
      }
    }
  }

  public function ModifierChambre()
  {
    return  $resultat = Chambre::update($_POST['id'], $_POST['prix'], $_POST['type'], $_POST['description'], $_POST['num_chambre']);
  }

  public function getOneChambre()
  {
    if (isset($_POST['id'])) {
      $chambres = Chambre::getChambre($_POST['id']);
      return $chambres;
    }
  }
  public function deleteChambre()
  {

    if (isset($_POST['id'])) {
      $data['id'] = $_POST['id'];
      $result = Chambre::delete($data);
      if ($result === 'OK') {
        header('location:chambre');
      } else {
        echo '$result';
      }
    }
  }
}
