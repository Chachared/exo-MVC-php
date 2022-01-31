<?php
class DefaultController {

    public function __construct()
    {
    
    }

    public function homePage() {
        //consulter les données
        //afficher une vue
        require 'View/homepage.php';
    }
}