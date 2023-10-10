<?php 

class PageController{
    public static function home(){
        $users =App::get('database')->selectAll("users");
        view("index",["users"=>$users]);
    }
    public static function about(){
        view('about');
    }
    public static function createUser(){
        view("add-name");
    }
}