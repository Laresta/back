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

function get_user($cnx , $id){
    $requete = $connect -> prepare("Select * from user where id=?");
    $ok = $requete -> execute([$id]);
    if (!$ok) {
        bdd_erreur($requete);
        return null;
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);  
}

function add_user($connect , $login , $pass , $droit){
    $requete = $connect -> prepare("insert into user values (null, ? , ? , ?)");
    $ok = $requete -> execute([$login , $pass , $droit]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

function suppr_user($con , $id){
    $requete = $con -> prepare("Delete from collection where idu =?");
    $ok = $requete -> execute([$id]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    $requete = $con -> prepare("Delete from user where id =?");
    $ok = $requete -> execute([$id]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

function modif_user(){

}
?>