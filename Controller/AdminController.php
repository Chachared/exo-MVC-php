<?php


abstract class AdminController {
    protected $user;
    
    public function __construct(){
        
        if(!isset($_SESSION['user'])){
            header ('Location: index.php?controller=security&action=login');
        } else {
            $this->user = unserialize($_SESSION["user"]);
        }
        
    }
}
?>