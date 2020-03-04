<?php


class Router
{

  private $roots;

  public function __construct()
  {
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);
  }

  private function getUri()
  {
    if(!empty($_SERVER['REQUEST_URI'])){
      return trim($_SERVER['REQUEST_URI'],'/');
    }
  }
  public function run()
  {
    $uri = $this->getUri();

    foreach($this->routes as $alias => $path)
    {
      if(preg_match("~$alias~",$uri)){
        $internalRoute = preg_replace("~$alias~",$path,$uri);
        $segments = explode('/',$internalRoute);

        $controllerName = array_shift($segments) .'Controller';

        $actionName = ucfirst(array_shift($segments));
        $parameters = $segments;

        $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
        if(file_exists($controllerFile)){
          require_once($controllerFile);
        }
        $controllerObject = new $controllerName;
        if(!method_exists($controllerObject,$actionName)){
          require_once(ROOT.'/views/404/errorfile.php');
          break;
        }
        $result = call_user_func_array(array($controllerObject,$actionName),$parameters);
        if($result != null){
          break;
        }
      }
    }
  }
}
