<?php
session_start();
class AdminController{
        public function login()
        {
          if(isset($_POST['login'])){
              $data = array(
                'name'=>$_POST['name'],
                'password' => $_POST['password'],
              );
              $admin = new Admin;
              $data = $admin->getAdmin($data);
              
            //   if(password_verify($_POST['password'],$data['password']))
            //   {
            //     header("location:dashboard");    
            // }else {
            //   echo "faild";
            // } 

            if($_POST['name']=='admin'){
              header("location:dashboard");  
        }else{
          header("location:home"); 

        }
      
      }}}