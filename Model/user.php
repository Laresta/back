<?php

require_once "bdd.php";

function chk_user($connect , $login , $pass){
    $requete = $connect -> prepare("Select id , droits from user where login  = ? && pass = ?");
    $ok = $requete -> execute([$login , $pass]);
    if (!$ok) {
        bdd_erreur($requete);
        return null;
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);    
}

?>