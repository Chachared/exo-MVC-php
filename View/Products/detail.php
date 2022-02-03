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
            require 'parts/menu.php';
            ?>
    </header>

    <main>
        <div class="container">
            <h2>fiche produit de <?php echo($product->getName())?></h2>
            <div class="card my-5" style="max-width: 1200px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo($product->getImage())?>" class="img-fluid rounded-start"
                            alt="photo de l'article">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><strong><?php echo($product->getName())?></strong></h3>
                            <p class="card-text"><?php echo($product->getDescription())?></p>
                            <a href="index.php?controller=product&action=list"
                                class="btn btn-dark rounded-pill">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>