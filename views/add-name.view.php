<?php 
    App::get('database')->delete(["name"=>request('name')],"users");
    redirect("/");