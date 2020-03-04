<?php

/**
 *
 */
class ContactController
{

  public function index()
  {
    $email = '';
    $text = '';
    $success_message = '';

    if(isset($_POST['submit'])){

      $email = $_POST['email'];
      $text = $_POST['text'];
      //var_dump($text);
      $errors = false;
      if($email == ''){
        $errors[] = "Почта не введена";
      }
      if($text == ''){
        $errors[] = "Сообщение не введено";
      }
      if($errors == false){
        User::sendMessage($email,$text);
        $success_message = "Сообщение отправлено";
      }
    }
    require_once(ROOT.'/views/contact/index.php');
    return true;
  }
}
