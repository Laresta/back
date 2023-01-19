        <?php
        ob_start();    
        $cnx = bdd_connexion();
        $user = get_user($cnx, $iduser);
        ?>
        <form action="index.php" method="post">
            <p> ancien login : <?=$user[0]->login?></p>
            <label for="titre">nouveau login: </label>
            <input type="text" id="login" name="login"/>
            <br>
            <label for="description">nouvelle mdp: </label>
            <input type="password" name="pass" id="mdp"/>
            <br>
            <?php
            echo "
            <input type='hidden' value='$iduser' name='id_user'/>"; 
            ?>
            <input type="hidden" name="action" value="modifier_user">
            <br>
            <input type="submit" value="Modifier"/>
        </form>
    </body>
    <?php
    $contenu = ob_get_clean();
    $titre = "Formulaire de modification d'user";
    require "template.php";
    ?>
