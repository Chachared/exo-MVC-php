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

    public function add(){
        $errors=[];
        
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            //verif des erreurs
            if(empty($_POST["name"])){
                $errors[]='Veuillez entrer un nom de produit';
            }
            if(empty($_POST["description"])){
                $errors[]='Veuillez entrer une description';
            }
            if(empty($_POST["image"])){
                $errors[]='Veuillez entrer une adresse d\'image';
            }

            // enregistrement du produit
            if (count($errors) == 0){
                $product = new Product(null,$_POST["name"], $_POST["description"], $_POST["image"]);
                
                //mettre le produit en bdd grâce au productManager
                $this->productManager->saveOne($product);

                //redirection de l'utilisateur
                header("Location:index.php?controller=product&action=list");
            }
        }
        require 'View/Products/form.php';
    }

    public function delete($id){

        $product = $this->productManager->delete($id);
        require 'View/Products/detail.php';
        
    }

}
?>