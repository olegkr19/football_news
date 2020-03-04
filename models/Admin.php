<?php

class Admin
{

  public static function isLogged($email,$pass)
  {
    $db = DB::getConnection();

    $result = mysqli_query($db,"SELECT * from users WHERE is_admin = 1");
    $row = mysqli_fetch_assoc($result);
    if($row['email'] == $email && $row['password'] == $pass){
      $_SESSION['admin'] = $email;
      return true;
    }else {
      return false;
    }
  }
  public static function logout()
  {
    if(isset($_SESSION['admin'])){
      unset($_SESSION['admin']);
    }
    return true;
  }
}
