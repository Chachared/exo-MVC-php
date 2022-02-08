<?php
class DefaultController extends AdminController{

    public function __construct()
    {
        parent::__construct();
    }

    public function homePage() {

        //afficher une vue
        require 'View/homepage.php';
    }
}
?>