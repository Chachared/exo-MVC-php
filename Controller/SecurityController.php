<?php
class SecurityController {

    private $userManager;

    public function __construct(){
        $this->userManager = new UserManager();
    }

    public function login(){
    
       $errors= null;

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            //effectuer les traitement sur mon formulaire

            //vérifier les erreurs
            $errors = $this -> isValidLoginForm();

            if(count($errors) == 0){
                //vérifier en BDD
                $user = $this->userManager->getOneByUsername($_POST["username"]);

                if(!is_null($user) && password_verify($_POST["password"], $user->getPassword())){
                    $_SESSION['user']= serialize($user);
                   header("Location: index.php?controller=default&action=homepage");
                } else {
                    $errors[] = "Identifiants incorrects";
                }

            }
        }
        //afficher une vue
        require 'View/Security/login.php';
        
    }

    public function register(){
        //afficher une vue
        require 'View/Security/register.php';
    }

    public function logout(){
        setcookie("username");
        session_destroy();
        header("Location: index.php?controller=security&action=login");
    }



    private function isValidLoginForm(){
        $errors = [];

        if(empty($_POST["username"])){
            $errors[] = "Veuillez saisir un nom d'utilisateur";
        } else {
            setcookie("username", $_POST["username"]);
            $newCookie = $_POST["username"];
        }

        if(empty($_POST["password"])){
            $errors[] = "Veuillez saisir un mot de passe";
        }

        return $errors;
    }
}
?>