<html>

<head>
    <?php 
        require 'parts/global-stylesheets.php';
    ?>
</head>

<body>

    <header>
        <?php 
        require 'parts/header.php';
        require 'parts/customerMenu.php';
        ?>
    </header>

    <main>

        <div class="container">
            <h2>Tous nos produits</h2>
            <div class="row">
                <?php
        foreach ($products as $product){
            //limiter l'affichage du contenu (content en BDD) à 20 caractères sur la page d'accueil
            
            //Cards produits liées à la BDD
            echo ('<div class="col-lg-3 col-sm-6 mb-3">
                <div class="card player-card">
                <img src="'.$product->getImage().'" height="100%" class="card-img" alt="'.$product->getName().'">
                <div class="card-img d-flex align-items-end justify-content-center">
                    <div class="text-center player-text">
                    <h4 class="card-title">'.$product->getName().'</h4>
                    <p class="card-text">la description limitée à 50 caracteres + revoir la taille des cards et des images</p>
                    </div>
                    
                </div>
            </div>
            </div>');
        }
      ?>
            </div>

    </main>

</body>





</html>