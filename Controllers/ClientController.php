<?php
session_start();
class ClientController
{
    public function Addclient()
    {
      if(isset($_POST['submit'])){
          $data = array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
          );
          $user = new client;
          $data = $user->getUser($data);
          if(password_verify($_POST['password'],$data['password'])==true)
          {
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['email'] = $data['email'];
            if($data['role'] == "admin")
            {
                header("location: dashboard");
            }
            else if($data['role'] == "etudiant")
            {
                header("location: AcueilleEtudiant");  
            }
        
        }


    } 
 
  }
}

?>