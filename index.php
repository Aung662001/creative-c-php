<?php
include "vendor/autoload.php";
include "core/bootstrap.php";
Router::load('route.php')->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);