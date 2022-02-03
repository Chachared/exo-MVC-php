<html>
    <head>
        <?php 
        require 'parts/global-stylesheets.php';
        ?>
    </head>

    
    <body>

        <?php 
        require 'parts/header.php';
        require 'parts/menu.php';
        ?>

    <div class="container text-center">
        <h3 class="mt-2">Bonjour <?php if($this->user){echo($this->user->getUsername());} ?>, vous êtes sur la page d'accueil</h3>
    </div>

    </body>

</html>
