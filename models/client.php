<?php

 class Client {

    static public function getAll(){
        $stm=DB::connect()->prepare('SELECT * FROM client');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->close();
        $stm = null;
    }

    static public function add($data){
     $stm = DB::connect()->prepare('INSERT INTO client (name,email,genre,phone,adress) VALUES (:name,:email,:genre,:phone,:adress)');
     $stm->bindParam(':name',$data['name']);
     $stm->bindParam(':email',$data['email']);
     $stm->bindParam(':genre',$data['genre']);
     $stm->bindParam(':phone',$data['phone']);
     $stm->bindParam(':adress',$data['adress']);

     if ($stm->execute()) {
        return 'OK';
     }else {
        return 'error';
     }

     $stm->close();
     $stm = null;


    }

    static public function getClient($data){

        $id = $data['id'];
        try{
            $query = 'SELECT * FROM client WHERE id=:id';
            $stm=DB::connect()->prepare($query);
            $stm->execute(array(":id"=> $id));
            $client = $stm->fetch(PDO::FETCH_OBJ);
            return $client;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

       static public function update($data){
        
        $stm = DB::connect()->prepare('UPDATE client SET name=:name ,email=:email ,genre=:genre ,phone=phone ,adress= :adress WHERE id=:id');
        $stm->bindParam(':id',$data['id']);
        $stm->bindParam(':name',$data['name']);
        $stm->bindParam(':email',$data['email']);
        $stm->bindParam(':genre',$data['genre']);
        $stm->bindParam(':phone',$data['phone']);
        $stm->bindParam(':adress',$data['adress']);
   
        if ($stm->execute()) {
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
        $query = 'DELETE FROM client WHERE id=:id';
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