<?php 

class Router {
    public $routes = [];
    public function register($routes){
        $this->routes = $routes;
    }
    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$controller;
    }
    public function post($uri,$controller){
        $this->routes['POST'][$uri]=$controller;
    }
    public function delete($uri,$controller){
        $this->routes['DELETE'][$uri]=$controller;
    }
    public static function load($filename){
        $router = new Router();
        require $filename;
        return $router;
        //$router is used in route.php
    }
    
    public function direct($uri,$method){
        if(!array_key_exists($uri,$this->routes[$method])){
            dd("404 page");
        }
        [$class,$page] = explode("@",$this->routes[$method][$uri]);
        $this->callAction($class,$page);
       //return $this->routes[$method][$uri];
    }
public function callAction($class,$page)
{
    $ControllerClass = new $class;
    $ControllerClass->$page();
}
 
}