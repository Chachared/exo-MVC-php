<?php
session_start();

ini_set("display_errors",1);
$displayErrors=ini_get("display_errors");

require 'loader.php';

// Affichage du mode developpeur ou production (dev = avec affichage erreurs, prod = sans affichage erreurs)
if($displayErrors ==1){
    echo ('<div class="alert alert-success" role="alert">Je suis en mode développement</div>');
} else {
    echo ('<div class="alert alert-danger" role="alert">Je suis en mode production</div>');
}

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
     } else if($_GET["action"] == 'logout'){
        $controller -> logout();
     }
 }

if($_GET["controller"] == "product"){
    $controller = new ProductController();

    if($_GET["action"] == "list"){
        $controller->list();
    }

    if($_GET["action"] == "show" && isset($_GET["id"])){
        $controller->show($_GET["id"]);
    }

    if($_GET["action"] == "add"){
        $controller->add();
    }

    if($_GET["action"] == "edit" && isset($_GET["id"])){
        $controller->edit($_GET["id"]);
    }

    if($_GET["action"] == "delete" && isset($_GET["id"])){
        $controller->delete($_GET["id"]);
    }
 }

?>