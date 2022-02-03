<nav class="navbar navbar-expand-lg navbar-light bg-secondary px-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="navbar-brand text-light">Bonjour
                <?php if(isset($_COOKIE["username"])){echo($_COOKIE["username"]);}?></li>
            <li class="nav-item active">
                <a class="btn btn-dark rounded-pill  mx-2" href="index.php">Accueil</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-dark rounded-pill  mx-2" href="index.php?controller=security&action=login">Se
                    connecter</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-dark rounded-pill  mx-2" href="index.php?controller=security&action=logout">Se
                    déconnecter</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-dark rounded-pill  mx-2" href="index.php?controller=product&action=list">Tous nos
                    produits</a>
            </li>
        </ul>
    </div>
</nav>