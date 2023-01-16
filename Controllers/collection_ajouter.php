<?php
    
    $connect = bdd_connexion();
    $idu = $_SESSION["id"];

    if($connect != null){
       $ok =  add_collection($connect , $titre, $idu);
       if ($ok){
        header("Location: index.php?action=listage_collections");
       }
       else{
         header("Location: erreur.htm");
       }
    }

?>