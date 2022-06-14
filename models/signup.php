<?php
class User{

    static public function createuser(){
        $stm=DB::connect()->prepare('INSERT INTO utilisateur (name, email,  password) VALUES (name,:email,:password)');

        $stm->bindParam(':name',$data['name']);
        $stm->bindParam(':email',$data['email']);
        $stm->bindParam(':role',$data['role']);
        $stm->bindParam(':password',$data['password']);
        
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