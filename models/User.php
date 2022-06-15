<?php
class User{

    static public function login($data){
		$name = $data['name'];
		try{
			$query = 'SELECT * FROM utilisateur WHERE name=:name';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":name" => $name));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage($data);
		}
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
