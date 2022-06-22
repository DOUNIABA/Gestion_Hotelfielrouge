<?php
session_start();
class AdminController
{
  public function login()
  {
    if (isset($_POST['Admin'])) {
     
      $email=$_POST['email'];
      $admin = new Admin;

    if($admin->loginAdmin($email,$_POST['password'])){
        header("location:dashboard");}
      else {
        header("location:login");
        } 

    }
  }
}

