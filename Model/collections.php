<?php

require_once "bdd.php";

function get_collections($con , $idu){
    $requete = $con -> prepare("Select * from collection where idu=?");
    $ok = $requete -> execute([$idu]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);
}

function suppr_collection($con, $id){
    $requete = $con -> prepare("Delete from collection where id =?");
    $ok = $requete -> execute([$id]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

function add_collection($con, $titre){
    $requete = $con -> prepare("insert into collection values (null, ?)");
    $ok = $requete -> execute([$titre]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}
function modifier_collection($con, $titre , $id){
    $requete = $con -> prepare("update collection set titre = ? where id = ?");
    $ok = $requete -> execute([$titre , $id]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

function search_collections($con , $idc){
    $requete = $con -> prepare("Select * from collection where id = ?");
    $ok = $requete -> execute([$idc]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);
}
?>