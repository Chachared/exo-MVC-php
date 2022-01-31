<?php
abstract class DbManager {
    protected $bdd;

    public function __construct(){
        $bdd = new PDO("mysql:dbname=exo-mvc-php;host=localhost", "root", "wHTG9Bdfk752Y3m");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}