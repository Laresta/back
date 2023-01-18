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

function get_users($connect){
    $requete = $connect -> prepare("Select * from user where droits=2");
    $ok = $requete -> execute();
    if (!$ok) {
        bdd_erreur($requete);
        return null;
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);  
}

function add_user(){

}

function suppr_user(){

}

function modif_user(){

}
?>