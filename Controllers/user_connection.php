<?php

$connect = bdd_connexion();
if($connect){
    $pass_hash = sha1($pass);
    $ok = chk_user($connect , $login , $pass_hash);
    if ($ok){      
        $_SESSION['id']= $ok[0] -> id ;
        $_SESSION["droits"] = $ok[0] -> droits ;
        header("Location: index.php?action=bienvenue");
    }
    else {
        header("Location: index.php?action=login");
    }
}
?>