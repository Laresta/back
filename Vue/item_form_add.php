
        <?php
        ob_start();
        
        ?>
        <form action="index.php" method="post">
            <label for="titre">titre: </label>
            <input type="text" name="titre"/>
            <br>
            <label for="description">description: </label>
            <input type="text" name="description"/>
            <br>
            <label for="date_acquisition">date d'acquisition: </label>
            <input type="date" name="date_acquisition"/>
         
           <input type='hidden' value=<?=$id_collec?> name='id_collec'/> 
           
            <input type="hidden" name="action" value="creation_item">
            <br>
            <input type="submit" value="ajouter"/>
        </form>
        <?php
        $contenu = ob_get_clean();
        $titre = "Formulaire d'ajout d'item";
        $menu="";
        require "template.php";
        ?>
