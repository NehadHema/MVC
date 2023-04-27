<?php 
namespace Vision\Mvc;
class App{
    private $request , $controller, $method;
    public function __construct($request){
     $this->request = $request->queryString();
     $this->parseUrl();
     $this->callMethod();
}

public function parseUrl(){
    // $this->request= $request->queryString();
    $segments = explode("/",$this->request);
    $this->controller = ucfirst($segments[0])."Controller";
    $this->method = $segments[1];
    // echo $controller, $method ;
}


public function callMethod(){
 
$controllerName= "Vision\Mvc\Controller\\".$this->controller;
if(class_exists($controllerName)){
    $controllerObject = new $controllerName;
    // echo $controllerName;
    if(method_exists($controllerObject,$this->method)){
        call_user_func([$controllerObject,$this->method]);
    }else{
        die("method not found");
    }
}else{
    die("class not found");
}

}
}



?>