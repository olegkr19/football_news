<?php

class User
{
  public static function sendMessage($email,$text)
  {
    $db = DB::getConnection();

    mysqli_query($db,"INSERT INTO `users` (`id`, `email`, `password`, `message`) VALUES (NULL, '{$email}', '', '{$text}');");
  }
}
