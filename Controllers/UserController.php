<?php
class UserController{

    public function registrer(){

        if (isset($_POST['submits'])) {
            $options = [
                'cost' => 12
            ];

            $password=password_hash($_POST['password'],
            PASSWORD_BCRYPT,$options);

            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['emial'],
                'password' => $_POST['password']
            
            );

            $resultat = User :: createuser($data);
            if($resultat === 'ok'){

            }else{
                echo $resultat;
            }
        }
    }

}

?>