<?php
$users =App::get('database')->selectAll("users");
//$users = $database->selectAll("users");
view("index",["users"=>$users]);