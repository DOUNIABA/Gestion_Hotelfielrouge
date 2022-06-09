
<?php 
class ReservationController{
    public function getALL(){
        $resrevration= Reservation::getAll();
        return $resrevration;
    }
}

?>