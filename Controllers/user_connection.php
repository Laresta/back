<?php

$connect = bdd_connexion();
echo "<script> console.log('".$pass."') </script>";
if($connect){
    $pass_hash = sha1($pass);
    echo "<script> console.log('".$pass_hash."') </script>";
    $ok = chk_user($connect , $login , $pass_hash);
    if ($ok){      
        $_SESSION['id']= $ok ;
        header("Location: index.php?action=bienvenue");
    }
    else {
        header("Location: index.php?action=login");
    }
}
?>