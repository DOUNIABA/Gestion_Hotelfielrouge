<?php
class Reservation{
    static public function getAll(){
        $stm=DB::connect()->prepare('
        SELECT reservation.* FROM reservation WHERE client.id=reservation.id_client AND client.id=chambre.id_client');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->close();
        $stm = null;
    }
    static public function add($data){
        $stm = DB::connect()->prepare("INSERT INTO reservation (name,phone,email,checkin,checkout,id_client,typechambre,status) VALUES (:name,:phone,:email,:checkin,:checkout,:id_client,:typechambre,:status)");
        $stm->bindParam(':name',$data['name']);
        $stm->bindParam(':phone',$data['phone']);
        $stm->bindParam(':email',$data['email']);
        $stm->bindParam(':checkin',$data['checkin']);
        $stm->bindParam(':checkout',$data['checkout']);
        $stm->bindParam(':id_client',$data['id_client']);
        $stm->bindParam(':typechambre',$data['typechambre']);
        $stm->bindParam(':status' ,$data['status']);
        if ($stm->execute()) {
           return 'ok';
        }else{
            return 'Not ok';}
        $stm->close();
        $stm = null; 
       }
       static public function ValiderReservation($id){
        $stm = DB::connect()->prepare("UPDATE reservation SET `status`=1 where id='$id'");   
        if ($stm->execute()) {
           return 'OK';
        }
        else {
           return 'error';
        } 
        $stm->close();
        $stm = null;
       }
       static public function AnnulerReservation($id){
        $stm = DB::connect()->prepare("UPDATE reservation SET `status`=0 where id='$id'");   
        if ($stm->execute()) {
           return 'OK';
        }else {
           return 'error';
        } 
        $stm->close();
        $stm = null;
       }
}
?>