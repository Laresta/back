<?php

$connect = bdd_connexion();
if($connect){
    $pass_hash = sha1($pass);
    $ok = chk_user($connect , $login , $pass_hash);
    if ($ok){      
        $_SESSION['id']= $ok[0] -> id ;
        header("Location: index.php?action=bienvenue");
    }
    else {
        header("Location: index.php?action=login");
    }
}
?>