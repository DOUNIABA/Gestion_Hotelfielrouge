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
             'id_client'=>$_SESSION['id'],
            // 'id_client'=>6,
            'typechambre'=>$_POST['typechambre'],
            'status'=>11                  
          );     
          $resultat = Reservation::add($data);
        if ( $resultat = 'ok'){
            // var_dump(Reservation::add($data));
            // header('location: account');      
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
                  public function RefuserReservation(){
                    if(isset($_POST['refuse'])){
                    
                      $resultat = Reservation::AnnulerReservation($_POST['reserve']);
                      if ($resultat ==='OK'){
                      }else {
                        echo $resultat;
                      }
                    }     
                        }
    }

?>