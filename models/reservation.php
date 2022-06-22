<?php
class Reservation
{
   static public function getAll()
   {
      $stm = DB::connect()->prepare('
        SELECT reservation.* FROM reservation');
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      $stm = null;
   }
   static public function add($data)
   {

      $stm = DB::connect()->prepare("INSERT INTO reservation (name,phone,email,checkin,checkout,typechambre,montant) VALUES (:name,:phone,:email,:checkin,:checkout,:typechambre,:montant)");
      $montant = self::getDiffrence() * $_POST['prix'];
      $stm->bindParam(':name', $data['name']);
      $stm->bindParam(':phone', $data['phone']);
      $stm->bindParam(':email', $data['email']);
      $stm->bindParam(':checkin', $data['checkin']);
      $stm->bindParam(':checkout', $data['checkout']);
      $stm->bindParam(':typechambre', $data['typechambre']);
      $stm->bindParam(':montant', $montant);
      $stm->execute();
      return $stm->rowCount() > 0;
   }
   static public function ValiderReservation($id)
   {
      $stm = DB::connect()->prepare("UPDATE reservation SET `status`=1 where id='$id'");
      if ($stm->execute()) {
         return 'OK';
      } else {
         return 'error';
      }
      $stm = null;
   }
   static public function AnnulerReservation($id)
   {
      $stm = DB::connect()->prepare("UPDATE reservation SET `status`=0 where id='$id'");
      if ($stm->execute()) {
         return 'OK';
      } else {
         return 'error';
      }
      $stm = null;
   }
   private static function getDiffrence()
   {
      $datetime1 = date_create($_POST['checkin']);
      $datetime2 = date_create($_POST['checkout']);
      // Calculates the difference between DateTime objects
      $interval = date_diff($datetime1, $datetime2);
      return $interval->d;
   }
}
