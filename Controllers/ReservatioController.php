<?php 
class ReservationController{
    public function getAllreservation(){
        $resrevration= Reservation::getAll();
        return $resrevration;
    }
}
?> 