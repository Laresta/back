<?php
    
    $connect = bdd_connexion();

    if($connect != null){
       $ok = modifier_item($connect , $iditem , $titre , $desc , $date_acquisition);
       if ($ok){
        header("Location: index.php?action=listage_item&&idc=$idcollec");
       }
       else{
        header("Location: erreur.htm");
       }
    }
?>