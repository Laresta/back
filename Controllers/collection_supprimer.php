<?php
   
    $connect = bdd_connexion();

    if($connect != null){
       $ok =  suppr_collection($connect , $idc);
       if ($ok){
        header("Location: index.php?action=listage_collections");
       }
       else{
        header("Location: erreur.htm");
       }
    }
?>