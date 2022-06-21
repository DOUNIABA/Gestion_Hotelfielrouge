<?php
session_start();
class AdminController
{
  public function login()
  {
    if (isset($_POST['Admin'])) {
      $data = array(
        'name' => $_POST['name'],
        'password' => $_POST['password'],
      );
      $admin = new Admin;
      $data = $admin->loginAdmin($data);

      if (password_verify($_POST['password'], $data['password'])) {
        if ($_POST['name'] == 'admin') {
          header("location:dashboard");
        } else {
          header("location:home");
        }
      }
    }
  }

  
}
