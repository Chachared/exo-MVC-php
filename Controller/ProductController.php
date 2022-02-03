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

    public function show($id){

        $product = $this->productManager->findOne($id);
        require 'View/Products/detail.php';
        
    }

    private function validForm(){
        $errors = [];
        if(empty($_POST["name"])){
                $errors[]='Veuillez entrer un nom de produit';
            }
            if(empty($_POST["description"])){
                $errors[]='Veuillez entrer une description';
            }
            if(empty($_POST["image"])){
                $errors[]='Veuillez entrer une adresse d\'image';
            }
        return $errors;
    }

    public function add(){
        $errors=[];
        
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            //verif des erreurs
            
            $errors= $this->validForm();
            
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

    public function edit($id){

        $errors=[];

        $product = $this->productManager->findOne($id);
        
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            //verif des erreurs
            $errors= $this->validForm();
            
            // modification des données
            if (count($errors) == 0){
                $product->setName($_POST["name"]);
                $product->setDescription($_POST["description"]);
                $product->setImage($_POST["image"]);
            
                //mise à jour dans la base de données
                $this->productManager->editOne($product);

                //redirection de l'utilisateur
                header("Location:index.php?controller=product&action=list");
            }
        }

        require 'View/Products/edit.php';
    }

    public function delete($id){

        $product = $this->productManager->deleteOne($id);

        header("Location:index.php?controller=product&action=list");
        
        require 'View/Products/list.php';
        
    }

}
?>