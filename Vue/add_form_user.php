<?php
ob_start();
?>
        <form action='./index.php' method="post">
            <label for="login">login: </label>
            <input type="text" name="login"/>
            <br>
            <label for="pass">mdp: </label>
            <input type="password" name="pass"/>
            <br>
            <label for="droit">Admin</label>
            <input type="radio" name="droit" value=1>
            <label for="droit">User</label>
            <input type="radio" name="droit" value =2 checked>
            <br>
            <input type='hidden' name ="action" value="creation_user">
            <input type="submit" value="ajouter"/>
        </form>
<?php
$contenu = ob_get_clean();
$titre = "Formulaire d'ajout de collection";
require "template.php";
?>
