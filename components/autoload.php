<?php

//funtion for autoloading classes from paths
spl_autoload_register(function($class_name){
  $array_path = array(
    '/models/',
    '/components/'
  );
  //Passing by paths include file
foreach ($array_path as $path) {
    $path = ROOT.$path.$class_name.'.php';
    //If we have such path require it
    if(is_file($path)){
      require_once $path;
    }
}
});
