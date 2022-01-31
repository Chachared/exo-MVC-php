<html>
<head>
    <head>
        <?php 
        require 'parts/global-stylesheets.php';
        ?>
    </head>
</head>

<body class="bg-dark text-light">

    <header>
        <?php 
        require "parts/menu.php"
        ?>
    </header>

    <main>
        <div class="container">

            <h2 class="text-center my-4">S'enregistrer</h2>
            <p>Veuillez renseigner vos identifiants</p>

            <form method="post" action="index.php?controller=security&action=register">
                <label for="username">Utilisateur</label>
                <input id="username" type="text" name="username" class="form-control mt-2 mb-4">

                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" class="form-control mt-2 mb-4">

                <input type="submit" class="btn btn-secondary rounded-pill">
                <a class="btn btn-secondary rounded-pill  mx-2" href="index.php?controller=security&action=login">J'ai déjà un compte</a>

            <?php

            ?>  
        </div>
    </main>
</body>

</html>