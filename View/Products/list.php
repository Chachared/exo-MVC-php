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

        <div class="container text-center">
            <h3 class="mt-2">Les produits en vente</h3>
            <a class="btn btn-dark rounded-pill mx-2" href="index.php?controller=product&action=add">Ajouter un
                produit</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($products as $product){
                            echo('  <tr>
                                    <th scope="row">'.$product->getId().'</th>
                                        <td>'.$product->getName().'</td>
                                        <td>'.$product->getDescription().'</td>
                                        <td><img src="'.$product->getImage().'" class="img-list"></td>
                                        <td><a href="index.php?controller=product&action=show&id='.$product->getId().'" class="btn btn-dark rounded-pill mb-2">Détail</a>
                                            <a href="index.php?controller=product&action=edit&id='.$product->getId().'"
                                            class="btn btn-secondary rounded-pill mb-2">Edition</a>
                                            <a href="index.php?controller=product&action=delete&id='.$product->getId().'"
                                            class="btn btn-danger rounded-pill mb-2">Supprimer</a></td>
                                    </tr>');
                        }
                    ?>
                </tbody>
            </table>

        </div>

    </main>

</body>

</html>