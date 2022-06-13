<?php

class Reservation{
    static public function getAll(){
        $stm=DB::connect()->prepare('
        SELECT client.name, client.phone,client.email, reservation.checkin,reservation.checkout,reservation.montant FROM client,reservation WHERE client.id=reservation.id_client');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->close();
        $stm = null;
    }

    static public function add($data){
        $stm = DB::connect()->prepare('INSERT INTO reservation (checkin,checkout,montant,id_client,typechambre) VALUES (:checkin,:checkout,:montant,:id_client,:typechambre)');
           $stm->bindParam(':checkin',$data['checkin']);
        $stm->bindParam(':checkout',$data['checkout']);
        $stm->bindParam(':montant',$data['phone']);
        $stm->bindParam(':id_client',13);
        $stm->bindParam(':typechambre',$data['typechambre']);
   var_dump($stm->execute());
        if ($stm->execute()) {
           return $stm->execute();
        }
        $stm->close();
        $stm = null;
   
       }
}

?>