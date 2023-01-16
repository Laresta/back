<?php
  
    $connect = bdd_connexion();

    if($connect != null){
       $ok =  suppr_item($connect , $iditem);
       if ($ok){
        header("Location: index.php?action=listage_item&&idc=$idcollec");
       }
       else{
        header("Location: erreur.htm");
       }
    }
?>