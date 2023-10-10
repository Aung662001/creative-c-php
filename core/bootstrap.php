<?php
/*include "core/Request.php";
include "core/Router.php";
include "core/database/Connection.php";
include "core/database/QueryBuilder.php";*/  
include "core/function.php";

//$config=include "config.php";
//add config.php to service container (dependicy injection)
App::bind("config",require "config.php");
App::bind("database",new QueryBuilder(Connection::make(App::get("config")['database'])));
//$database = new QueryBuilder(Connection::make(App::get("config")['database']));