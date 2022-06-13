
<?php 
class ReservationController{
    public function getAllReservations(){
        $resrevrations= Reservation::getAll();
        return $resrevrations;
    }

    public function addReservation(){
        if(isset($_POST['submit'])){
          $data = array(           
            'checkin'=>$_POST['gecheckinnre'],
            'checkout'=>$_POST['checkout'],
            'montant'=>$_POST['montant'],
          );
        
          $resultat = Reservation::add($data);
          if ($resultat ==='OK'){
            header('location:reservation');
        
          }else {
            echo $resultat;
          }
        }
            }

}
