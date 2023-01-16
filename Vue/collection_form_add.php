<?php
ob_start();
?>
        <form action='./index.php' method="post">
            <label for="titre">titre: </label>
            <input type="text" name="titre"/>
            <input type='hidden' name ="action" value="creation_collection">
            <input type="submit" value="ajouter"/>
        </form>
<?php
$contenu = ob_get_clean();
$titre = "Formulaire d'ajout de collection";
$menu = "";
require "template.php";
?>
