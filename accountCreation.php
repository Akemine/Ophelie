<?php
/**
 * Created by PhpStorm.
 * User: Stéphane
 * Date: 13/01/2019
 * Time: 17:09
 */
include_once("headerConnection.php");
if(isset($_POST['pseudo']) && isset($_POST['pass'])){
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['pass'];
    if($pseudo == "test" && $pass == "test"){

    }
}

?>
<form action="index.php">
<button class="monBoutonGold" href="index.php">Revenir au site sans créer de compte</button>
</form>
<p class="black"> Créer un compte </p>
<form action="accountCreation.php" method="post">
    Votre pseudo : <input type="text" id="pseudo" name="pseudo">
    Votre mot de passe : <input type="password" id="pass" name="pass">
    <input class="monBoutonGold" type="submit" value="Me connecter"></input>
</form>

<?php


include_once("footer.php");

