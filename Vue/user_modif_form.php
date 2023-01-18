
        <?php
        ob_start();
       
        $cnx = bdd_connexion();
        $item = get_user($cnx, $iduser);
        ?>
        <form action="index.php" method="post" onsubmit="return verifdefault()">
            <p> ancien login : <?=$item[0]->titre?></p>
            <label for="titre">nouveau titre: </label>
            <input type="text" id="titre" name="login" value="<?=$item[0]->titre?>" />
            <br>
            <p> ancienne mdp: <?=$item[0]->description?></p>
            <label for="description">nouvelle description: </label>
            <input type="text" name="description" id="mdp" value="<?=$item[0]->description?>"/>
            <br>
            <?php
            echo "
            <input type='hidden' value='$iditem' name='iduser'/>"; 
            ?>
            <input type="hidden" name="action" value="modifier_user">
            <br>
            <input type="submit" value="Modifier"/>
        </form>
    </body>
    <script>
        function verifdefault(){
            let fields = {
                    titre: {
                        current: document.getElementById("titre").value,
                        original: <?= json_encode($item[0]->titre) ?>
                    },
                    desc: {
                        current: document.getElementById("desc").value,
                        original: <?= json_encode($item[0]->description) ?>
                    },
                };

                let changed = false;
                for (let field in fields) {
                    if (fields[field].current != fields[field].original) {
                        changed = true;
                        break;
                    }
                }
                return changed;
        }
    </script>

    <?php
    $contenu = ob_get_clean();
    $titre = "Formulaire de modification d'user";
    $menu ="";
    require "template.php";
    ?>
