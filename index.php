<?php
require 'loader.php';

if(!isset($_GET["controller"]) && !isset($_GET["action"])){
    header("Location: index.php?controller=default&action=homepage");
}

 if($_GET["controller"] == "default"){
    $controller = new DefaultController();

    if($_GET["action"] == "homepage"){
        $controller->homePage();
 }
 }

 if($_GET["controller"] == "security"){
     $controller = new SecurityController();
     if($_GET["action"] == 'login'){
        $controller -> login();
     } else if ($_GET["action"] == 'register'){
        $controller -> register();
     }
 }


