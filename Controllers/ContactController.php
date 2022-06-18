<?php
class contactController{

    public function addContact(){
        if(isset($_POST['contact'])){
          $data = array(
            'name'   => $_POST['name'],
            'email'    => $_POST['email'],
            'message'    => $_POST['message'],
        );
            
            $result = contact::add($data);
              if($result == 'Message envoyé'){
                header('location: home');
              }
              else{
                echo $result;
              }              
        }
}
    public function getAllContat(){
            
        $contact = contact::getAll();
        return $contact; 
    }
    
    public function deleteContact(){
        if(isset($_POST['id'])){
          $data = $_POST['id'];
          $result = contact::deleteContact($data);
          if($result == 'ok'){
            header('location: contact');
          }
          else{
            echo $result;
          }
        }
      }  
}
?>