<?php

class DB
{
  //connection to database
  public static function getConnection()
  {
    $paramsPath = ROOT.'/config/db_params.php';
    $parameters = include($paramsPath);

    $db = new mysqli($parameters['host'],$parameters['user'],$parameters['pass'],$parameters['db_name']);
    $db->set_charset("utf8");
    return $db;
  }
}
