<?php
/**
 * Created by PhpStorm.
 * User: Stéphane
 * Date: 13/01/2019
 * Time: 17:06
 */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand active grandir2 gras" href="index.php">Ophélie Desrousseaux</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active grandir" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active grandir"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mes oeuvres
</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="galerieArt.php">Art</a>
                        <a class="dropdown-item" href="galerieGraphisme.php">Graphisme</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">A venir...</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active grandir" href="about.php">A propos d'Ophélie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active grandir" href="contact.php">Me contacter</a>
                </li>
            </ul>
            <ul class="form-inline my-2 my-lg-0">
        <!--        <form action="accountCreation.php">
                <button class="monBoutonGold my-2 my-sm-0 mr-sm-2"> Se connecter</button>
                </form>-->
<!--                <form>
                <button class="btn btn-outline-danger my-2 my-sm-0"> Se déconnecter</button>
                </form>-->
            </ul>
        </div>
    </nav>