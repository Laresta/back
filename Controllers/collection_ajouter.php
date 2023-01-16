<?php
    
    $connect = bdd_connexion();

    if($connect != null){
       $ok =  add_collection($connect , $titre);
       if ($ok){
        header("Location: index.php?action=listage_collections");
       }
       else{
         header("Location: erreur.htm");
       }
    }

?>