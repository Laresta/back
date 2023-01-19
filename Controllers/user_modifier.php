<?php
    
    $connect = bdd_connexion();

    if($connect != null){
        $pass_hash = sha1($pass);
       $ok = modif_user($connect , $iduser , $login , $pass_hash);
       if ($ok){
        header("Location: index.php?action=listage_user");
       }
       else{
        header("Location: erreur.htm");
       }
    }
?>