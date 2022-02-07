<?php
class WebsiteController {
    private $productManager;
    public function __construct(){
        $this->productManager = new ProductManager();
    }
    public function customerHomepage(){
        //sélection des données relatives à la homepage
        $products =$this->productManager->findAll();
        //affichage de la vue
        require "View/Website/home.php";
    }

}

?>