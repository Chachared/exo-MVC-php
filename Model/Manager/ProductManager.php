<?php
class ProductManager extends DbManager {
    
    public function findAll(){
        $query=$this->bdd ->prepare('SELECT * FROM product');
        $query->execute();
        $results =$query->fetchAll();

        foreach($results as $result){
            $array[] = new Product($result['id'],$result['name'],$result['description'],$result['image']);
        }
        return $array;
        
    }

    public function findOne($id){
        $object = null;

        $query = $this->bdd->prepare("SELECT * FROM product WHERE id = :id");
        $query-> execute(["id"=>$id]);

        $result= $query->fetch();
        
        if($result){
            $object = new Product($result["id"],$result["name"],$result["description"],$result["image"]);
        }

        return $object;
        
    } 

    public function saveOne(Product $product){

        $query = $this->bdd->prepare("INSERT INTO product (name, description,image) VALUES(:name, :description,:image)");
        $query-> execute([
            "name"=>$product->getName(),
            "description"=>$product->getDescription(),
            "image"=>$product->getImage()
        ]);
    }
}
?>