<?php
class ReservationController
{
    public function getAllReservations(){
        $resrevrations= Reservation::getAll();
        return $resrevrations;
    }

    public function add(){
        if(isset($_POST['addreservation'])){
          $data = array(   
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'email'=>$_POST['email'],
            'checkin'=>$_POST['checkin'],
            'checkout'=>$_POST['checkout'],
            'montant'=>$_POST['montant'],
            'typechambre'=>$_POST['typechambre'],
          );
        
          $resultat = Reservation::add($data);
        if ( $resultat = 'ok'){
            // var_dump($_POST);
            // var_dump(Reservation::add($data));
            header('location: account');
        
          }else {
            echo "can not add";
          
          }
        }
            }

            public function ModifierReservation(){
              if(isset($_POST['valide'])){
              
                $resultat = Reservation::ValiderReservation($_POST['idreser']);
                if ($resultat ==='OK'){
              
                }else {
                  echo $resultat;
                }
              }     
                  }
    }

?>