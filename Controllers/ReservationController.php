<?php
class ReservationController
{
  public function getAllReservations()
  {
    $resrevrations = Reservation::getAll();
    return $resrevrations;
  }
  public function add()
  {
    $data = array(
      'name' => $_POST['name'],
      'phone' => $_POST['phone'],
      'email' => $_POST['email'],
      'checkin' => $_POST['checkin'],
      'checkout' => $_POST['checkout'],
      'typechambre' => $_POST['typechambre'],
    );
    return Reservation::add($data);
  }
  public function ModifierReservation()
  {
    if (isset($_POST['valide'])) {

      $resultat = Reservation::ValiderReservation($_POST['idreser']);
      if ($resultat === 'OK') {
      } else {
        echo $resultat;
      }
    }
  }
  public function RefuserReservation()
  {
    if (isset($_POST['refuse'])) {

      $resultat = Reservation::AnnulerReservation($_POST['reserve']);
      if ($resultat === 'OK') {
      } else {
        echo $resultat;
      }
    }
  }
  function getChambreData($id)
  {
    $chambreModel = new Chambre();
    return $chambreModel->getChambre($id);
  }

  public function getcountReservation(){
    $reservation=Reservation::getcountReservation();
    return $reservation;
  }
}
