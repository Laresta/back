<?php

    $connect = bdd_connexion();
    if($connect != null){
       $ok = modifier_collection($connect , $titre  , $idc);
       if ($ok){
       header("Location: index.php?action=listage_collections");
       }
       else{
        header("Location: erreur.htm");
       }
    }
?>