<?php
class ProductController extends AdminController{

    private $productManager;
    
    public function __construct()
    {
        parent::__construct();
        $this->productManager = new ProductManager();

    }

    public function list() {
      
        $products = $this->productManager->findAll();

        require 'View/Products/list.php';
    }

    public function showOne($id){

        $product = $this->productManager->findOne($id);
        require 'View/Products/detail.php';
        
    }
}
?>