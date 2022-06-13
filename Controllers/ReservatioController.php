
<?php
class reservationController
{
    public function getAllReservations(){
        $resrevrations= Reservation::getAll();
        return $resrevrations;
    }

    public function add(){
        if(isset($_POST['addreservation'])){
          $data = array(           
            'checkin'=>$_POST['checkin'],
            'checkout'=>$_POST['checkout'],
            'montant'=>$_POST['montant'],
            'id_client'=>$_POST['13'],
            'typechambre'=>$_POST['typechambre'],
          );
        
          $resultat = Reservation::add($data);
        if ( $resultat = Reservation::add($data)){
            var_dump($_POST);
                   var_dump(Reservation::add($data));
        
          }else {
            echo "cant add";
          
          }
        }
            }
    }


