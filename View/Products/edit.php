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

            <h1 class="mb-3">Edition de : <?php echo($product->getName());?></h1>

            <form method="post" href="index.php?controller=product&action=edit">

                <div class=" mb-3 col-4">
                    <label for="name" class="form-label">Nom du produit</label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="<?php echo($product->getName())?>">
                </div>

                <div class="mb-3 col-4">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="description"
                        value="<?php echo($product->getDescription())?>">
                </div>

                <div class="mb-3 col-4">
                    <label for="image" class="form-label">URL de l'image</label>
                    <input type="text" name="image" class="form-control" id="image"
                        value="<?php echo($product->getImage())?>">
                </div>

                <input type="submit" class="btn btn-secondary rounded-pill mt-3">

            </form>

            <?php
    foreach ($errors as $error){
        echo('<div class="alert alert-danger" role="alert">
  '.$error.'
</div>');
    }
    ?>

        </div>
    </main>
</body>

</html>