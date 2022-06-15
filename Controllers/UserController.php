<?php
session_start();
class UserController{
        public function login()
        {
          if(isset($_POST['login'])){
              $data = array(
                'email' => $_POST['email'],
                'password' => $_POST['password'],
              );
              $user = new User;
              $data = $user->getUser($data);
              if(password_verify($_POST['password'],$data['password']))
              {
                header("location:home");     
            }
        }    
      }
    
    public function registrer(){
        if (isset($_POST['ajouter'])) {
            $password=password_hash($_POST['password'],
            PASSWORD_BCRYPT);
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $password
            );
            $resultat = User :: createuser($data);
            if($resultat === 'ok'){
            echo ('bien ajouté');

            }else{
                echo $resultat;
            }
        }
    }

}
?>