
<?php
class User{
    public function getUser($data){
        $stmt = DB::connect()->prepare('SELECT * FROM utilisateur WHERE email =:email');
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();
        return $stmt->fetch();
    }
    static public function createuser($data){
        $stm=DB::connect()->prepare('INSERT INTO utilisateur (name, email,  password) VALUES (:name,:email,:password)');
        $stm->bindParam(':name',$data['name']);
        $stm->bindParam(':email',$data['email']);
        $stm->bindParam(':password',$data['password']);
        if ($stm->execute()) {
        header('location:login');
         }else {
            return 'error';
         }
         $stm->close();
         $stm = null;   
        }
    }
?>
