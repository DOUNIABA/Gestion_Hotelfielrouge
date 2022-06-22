<?php
class Client
{
   static public function getAll()
   {
      $stm = DB::connect()->prepare('SELECT * FROM client');
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      $stm = null;
   }

   static public function add($data)
   {
      $stm = DB::connect()->prepare('INSERT INTO client (name,email,genre,phone,adress) VALUES (:name,:email,:genre,:phone,:adress)');
      $stm->bindParam(':name', $data['name']);
      $stm->bindParam(':email', $data['email']);
      $stm->bindParam(':genre', $data['genre']);
      $stm->bindParam(':phone', $data['phone']);
      $stm->bindParam(':adress', $data['adress']);
      if ($stm->execute()) {
         return 'OK';
      } else {
         return 'error';
      }
      $stm = null;
   }

   static public function getClient($id)
   {
      $stm = DB::connect()->prepare('SELECT * FROM client where id =?');
      $stm->execute([$id]);
      return $stm->fetch(PDO::FETCH_ASSOC);
      $stm = null;
   }

   static public function update($id, $name, $email, $genre, $phone, $adr)
   {
      $stm = DB::connect()->prepare("UPDATE client SET `name`=? , email=?, genre=?, phone=? , adress= ? WHERE id= ?");
      if ($stm->execute([$name, $email, $genre, $phone, $adr, $id])) {
         return 'OK';
      } else {
         return 'error';
      }
      $stm = null;
   }
   static public function delete($data)
   {
      $id = $data['id'];
      try {
         $query = 'DELETE FROM client WHERE id=:id';
         $stm = DB::connect()->prepare($query);
         $stm->execute(array(':id' => $id));
         if ($stm->execute()) {
            return 'OK';
         } else {
            return 'error';
         }
      } catch (PDOException $ex) {
         echo 'erreur' . $ex->getMessage();
      }
   }
   static public function loginClient($id)
   {
      $stm = DB::connect()->query("SELECT * FROM client where email='$id'");
    
      return $stm->fetch();
   }

   static public function getcountClient(){
      $stm = DB::connect()->prepare('SELECT COUNT(*) as clientes FROM client ');
      $stm->execute();
      return $stm->fetch(PDO::FETCH_ASSOC);

   }
}
