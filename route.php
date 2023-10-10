<?php 

/*$router->register(
[
  ""=>"controllers/indexController.php"    ,
  "about" =>"controllers/AboutController.php",
  "contactus"=>"controllers/ContactUsController.php",
  "orders" => "controllers/OrdersController.php",
  "name" => "controllers/NameController.php"
]
);*/
$router->get("","PageController@home");
$router->get("about","PageController@about");
$router->post("name","PageController@createUser");
/*$router->get("",         "controllers/IndexController.php");
$router->get("contactus","PageController@contactus")
$router->get("contactus","controllers/ContactUsController.php");
$router->get("orders",   "controllers/OrdersController.php");
$router->post("name",    "controllers/NameController.php");
$router->get("about","controllers/AboutController.php"*/