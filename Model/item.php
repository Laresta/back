<?php

require_once "./Model/bdd.php";
function get_items($con , $idc){
    $requete = $con -> prepare("Select * from item where idc = ?");
    $ok = $requete -> execute([$idc]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);
}

function get_item($con, $id){
    $requete = $con -> prepare("Select * from item where id = ?");
    $ok = $requete -> execute([$id]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> fetchAll(PDO::FETCH_CLASS);
}

function add_item($con, $idcollec , $titre , $desc , $date_acquisition){
    $requete = $con -> prepare("insert into item values (null, ? , ? , ? , ? ,?)");
    $ok = $requete -> execute([$idcollec , $titre , $desc , date("Y-m-d") , $date_acquisition]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

function suppr_item($con, $id){
    $requete = $con -> prepare("Delete from item where id =?");
    $ok = $requete -> execute([$id]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

function modifier_item($con, $idcollec , $titre , $desc , $date_acquisition){
    $requete = $con -> prepare("update item set titre = ? ,  description = ?  , creation = ? where id = ?");
    $ok = $requete -> execute([$titre , $desc , $date_acquisition , $idcollec]);
    if (!$ok) {
        bdd_erreur($requete);
    }
    return $requete -> rowCount();
}

?>