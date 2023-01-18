<?php
ob_start();
?>
<form action="index.php" method="post">
    <label for="login"> Votre Login</label>
    <input type="text" name="login">
    <br>
    <label for="pass">Votre mot de passe</label>
    <input type="password" name="pass" >
    <br>
    <input type="hidden" name="action" value="connexion">
    <input type="submit" value="se connecter">
</form>
<?php

$contenu = ob_get_clean();
$titre = "Login";
require "template.php";

?>