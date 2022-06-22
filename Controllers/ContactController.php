<?php
class ContactController
{

  public function addContact()
  {
    if (isset($_POST['sendContact'])) {
      $data = array(
        'name'   => $_POST['nom'],
        'email'    => $_POST['email'],
        'message'   => $_POST['msg'],
      );

      $result = contact::add($data);
      if ($result == 'Message envoyé') {
      } else {
        echo $result;
      }
    }
  }
  public function getAllContat()
  {

    $contact = contact::getAll();
    return $contact;
  }

  public function deleteContact()
  {
    if (isset($_POST['id'])) {
      $data = $_POST['id'];
      $result = contact::deleteContact($data);
      if ($result == 'ok') {
        header('location: contact');
      } else {
        echo $result;
      }
    }
  }
}
