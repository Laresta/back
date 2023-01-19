<?php
   
    $connect = bdd_connexion();

    if($connect != null){
       $ok =  suppr_user($connect , $iduser);
       if ($ok){
        header("Location: index.php?action=listage_user");
       }
       else{
        header("Location: erreur.htm");
       }
    }
?>