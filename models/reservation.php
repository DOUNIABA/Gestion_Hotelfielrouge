<?php

class Reservation{
    static public function getAll(){
        $stm=DB::connect()->prepare('SELECT client.name, client.phone,client.email, checkin,checkoutFROM client');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->close();
        $stm = null;
    }
}
3
?>