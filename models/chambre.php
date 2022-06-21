<?php
 class Chambre {  
    static public function getAll(){
        $stm=DB::connect()->prepare('
        SELECT chambre.* FROM chambre ');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm = null;
    }
    
     static public function add($data){
      $stm=DB::connect()->prepare('INSERT INTO chambre(prix, type, description, num_chambre)
         VALUES (:prix,:type,:description,:num_chambre)');
         $stm->bindParam(':prix',$data['prix']);
         $stm->bindParam(':type',$data['type']);
         $stm->bindParam(':description',$data['description']);
         $stm->bindParam(':num_chambre',$data['num_chambre']);

         if($stm->execute()){
            return 'OK';
         }else {
            return 'erreur';
         }
         $stm = null;   
     }
    static public function getChambre($id){     
      $stm=DB::connect()->prepare('SELECT * FROM chambre where id =?');
      $stm->execute([$id]);
      return $stm->fetch(PDO::FETCH_ASSOC);
      $stm = null;
    }

     static public function update($id,$prix,$type,$description,$num_chambre){
        $stm = DB::connect()->prepare("UPDATE chambre SET prix=?, type=?, description=? , num_chambre= ? WHERE id= ?");   
        $stm->execute([$prix,$type,$description,$num_chambre,$id]);
        return $stm->rowCount()>0;
         
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