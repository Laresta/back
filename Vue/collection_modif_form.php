<?php
ob_start();
?>
        <form action="index.php" method="post">
            <?php
            $idc = $_GET["idc"];
            $titre = $_GET["titre"];
            ?>
            <p> Ancien titre de la collection : <?=$titre?> </p> <br>
            
            <label for='titre'>nouveau titre: </label>
            <input type='text' name='titre'/>
            <input type='hidden' name='idc' value=<?=$idc?>>
            <input type="hidden" name="action" value="modification_collection">
            <input type='submit' value=modifier />
        </form>
<?php
$contenu = ob_get_clean();
$titre = "Formulaire de modification de collection";
$menu ="";
require "template.php";
?>