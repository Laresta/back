
        <?php
        ob_start();
       
        $cnx = bdd_connexion();
        $item = get_item($cnx, $iditem);
        ?>
        <form action="index.php" method="post" onsubmit="return verifdefault()">
            <p> ancien titre de l'item : <?=$item[0]->titre?></p>
            <label for="titre">nouveau titre: </label>
            <input type="text" id="titre" name="titre" value="<?=$item[0]->titre?>" />
            <br>
            <p> ancienne description de l'item : <?=$item[0]->description?></p>
            <label for="description">nouvelle description: </label>
            <input type="text" name="description" id="desc" value="<?=$item[0]->description?>"/>
            <br>
            <p> ancienne date d'acquisition de l'item : <?=$item[0]->creation?></p>
            <label for="date_acquisition">nouvelle date d'acquisition: </label>
            <input type="date" name="date_acquisition" id="date" value="<?=$item[0]->creation?>"/>
            <?php
            echo "<input type='hidden' value='$id_collec' name='id_collec'/>
            <input type='hidden' value='$iditem' name='id_item'/>"; 
            ?>
            <input type="hidden" name="action" value="modifier_item">
            <br>
            <input type="submit" value="Modifier"/>
        </form>
    </body>
    <!-- Ce script permet d'éviter des bugs de modifications en empechant le formulaire de s'envoyer si il y'a aucune modification. 
    Car si je ne fait pas de verification , même si il ya pas d'erreur dans la requete SQL , cela renverra sur la page d'erreur-->
    <script>
        function verifdefault(){
            /*ici je met les informations dans un objet et dans les attribut de l'objet , je fait un autre objet afin de retenir les informations 
            precedentes et nouvelles du form */
            let fields = {
                    titre: {
                        current: document.getElementById("titre").value,
                        original: <?= json_encode($item[0]->titre) ?>
                    },
                    desc: {
                        current: document.getElementById("desc").value,
                        original: <?= json_encode($item[0]->description) ?>
                    },
                    date: {
                        current: document.getElementById("date").value,
                        original: <?= json_encode($item[0]->creation) ?>
                    }
                };
              /*Ici je vais verifier pour chaque attribut de l objet si il y a un changement*/
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
    $titre = "Formulaire de modification d'item";
    $menu ="";
    require "template.php";
    ?>
