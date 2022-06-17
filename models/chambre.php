<?php
 class Chambre {  
    static public function getAll(){
        $stm=DB::connect()->prepare('SELECT * FROM chambre WHERE client.id=chambre=id_client');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->close();
        $stm = null;
    }

     static public function add($data){
      $stm=DB::connect()->prepare('INSERT INTO chambre(prix, type, description, num_chambre,id_client)
         VALUES (:prix,:type,:description,:num_chambre,:id_client)');
         $stm->bindParam(':prix',$data['prix']);
         $stm->bindParam(':type',$data['type']);
         $stm->bindParam(':description',$data['description']);
         $stm->bindParam(':num_chambre',$data['num_chambre']);
         $stm->bindParam(':id_client',$data['id']);


         if($stm->execute()){
            return 'OK';
         }else {
            return 'erreur';
         }
         $stm->close();
         $stm = null;   
     }

    static public function getChambre($id){     
      $stm=DB::connect()->prepare('SELECT * FROM chambre where id =?');
      $stm->execute([$id]);
      return $stm->fetch(PDO::FETCH_ASSOC);
      $stm->close();
      $stm = null;
    }

     static public function update($id,$name,$prix,$type,$description,$num_chambre){
        $stm = DB::connect()->prepare("UPDATE chambre SET `name`=? , prix=?, type=?, description=? , num_chambre= ? WHERE id= ?");   
        if ($stm->execute([$name,$prix,$type,$description,$num_chambre,$id])) {
           return 'OK';
        }else {
           return 'error';
        } 
        $stm->close();
        $stm = null;
         
       }
             
       static public function delete($data){
        $id =$data['id'];     
       try{
        $query = 'DELETE FROM chambre WHERE id=:id';
        $stm=DB::connect()->prepare($query);
        $stm->execute(array(":id"=> $id));
        if ($stm->execute()) {
            return 'OK';
         }else {
            return 'error';
         }
     }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }

 }
 }
?>