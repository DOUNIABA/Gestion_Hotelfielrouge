<?php
class UserController{

    public function auth(){
		if(isset($_POST['add'])){
			$data['name'] = $_POST['name'];
			$result = User::login($data);
			if($result->name === $_POST['name'] && password_verify($_POST['password'],$result->password)){

				$_SESSION['logged'] = true;
				$_SESSION['username'] = $result->username;
				Redirect::to('home');

			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('login');
			}
		}
	}
    public function registrer(){

        if (isset($_POST['ajouter'])) {

            // $password=password_hash($_POST['password'],
            // PASSWORD_BCRYPT);

            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            
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
