<?php
    
    $connect = bdd_connexion();

    if($connect != null){
       $pass_hash = sha1($pass); 
       $ok =  add_user($connect , $login, $pass , $droit);
       if ($ok){
        header("Location: index.php?action=listage_user");
       }
       else{
         header("Location: erreur.htm");
       }
    }

?>
