<?php 
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}
function view($name,$data  = []){
    //example: [a=>1] to a=1
    extract($data);
    return require "views/$name.view.php";
}

function redirect($url){
    header("Location:$url");
}
function request($name){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        return $_POST[$name];
    }
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        return $_GET[$name];
    }
}