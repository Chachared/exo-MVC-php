<html>

    <head>
        <?php 
        require 'parts/global-stylesheets.php';
        ?>
    </head>


    <body class="bg-dark text-light">
        <header>
            <?php 
                require 'parts/menu.php';
                ?>

        </header>

        <div class="container">

            <h2 class="text-center my-4">Espace connexion</h2>
            <p>Veuillez renseigner vos identifiants pour accéder à votre espace</p>


            <form method="post" action="index.php?controller=security&action=login">
                <label for="username">Utilisateur</label>
                <input id="username" type="text" name="username" class="form-control mt-2 mb-4">

                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" placeholder="Veuillez saisir votre mot de passe" class="form-control mt-2 mb-4">

                <input type="submit" class="btn btn-secondary rounded-pill">

                <a class="btn btn-secondary rounded-pill  mx-2" href="index.php?controller=security&action=register">S'enregistrer</a>
            </form>     

            <?php
            if(!is_null($errors)){
                foreach($errors as $error){
                echo('<div class="alert alert-danger" role="alert">'.$error.'</div>');
            }
            }
            
            ?>
        </div>
        
    </body>

</html>

