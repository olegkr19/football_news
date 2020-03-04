<?php

class AdminController
{

  public function index()
  {
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $pass = $_POST['password'];

      $errors = false;

      if(Admin::isLogged($email,$pass) && $errors == false){
        require ROOT.'/views/admin/index.php';
        die();
      }else {
        $errors[] = 'Неправильный email или пароль';
      }
    }
    require_once(ROOT.'/views/admin/login.php');
    return true;
  }
  public function logout()
  {
    Admin::logout();

    header("Location: /admin/login");
    return true;
  }
}
