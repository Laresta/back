<?php
session_start();
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else {
    $action="bienvenue";
}
if (!isset($_SESSION['id'])){
    $_SESSION['id'] ="";
}




switch ($action){ 
    case "login":
        require "Vue/login.php";
        break;
    case "connexion":
        $pass = $_POST["pass"];
        $login = $_POST["login"];  
        require_once "Model/user.php"; 
        require "Controllers/user_connection.php";
        break;
    case "deconnexion":
        require "Controllers/user_deconnect.php";
        break;
    
    case "listage_user":
        require_once "Model/user.php"; 
        require "Vue/user_lister.php";
        break;
    case "creation_de_compte":
    case "suppression_user":
    case "modification_user":

    case "creation_form_collection":
        require "Vue/collection_form_add.php";
        break;
    case "creation_collection":
        require_once "Model/collections.php";
        $titre = $_POST["titre"];
        require "Controllers/collection_ajouter.php";
        break;
    case "suppression_validate_collection":
        require "Vue/collection_confirm_supprimer.php";
        break;
    case "suppression_collection":
        $idc = $_GET["idc"];
        require_once "Model/collections.php";
        require "Controllers/collection_supprimer.php";
        break; 
    case "modification_form_collection":
        require "Vue/collection_modif_form.php";
        break;
    case "modification_collection":
        $idc = $_POST["idc"];
        $titre = $_POST["titre"];
        require_once "Model/collections.php";
        require "Controllers/collection_modifier.php";
        break;
    case "listage_collections":
        require "Model/collections.php";
        require "Vue/collections_lister.php";
        break;
    case "creation_form_item":
        $id_collec = $_GET["idcollec"];
        require "./Vue/item_form_add.php";
        break;
    case "creation_item":
        require_once "./Model/item.php";    
        $titre = $_POST["titre"];
        $desc = $_POST["description"];
        $date_acquisition = $_POST["date_acquisition"];
        $id_collec = $_POST["id_collec"];  
        require "Controllers/item_ajouter.php";
        break;
    case "suppression_validate_item":
        $iditem = $_GET["iditem"];
        $idcollec = $_GET["idcollec"];
        require "Vue/item_confirm_supprimer.php";
        break;
    case "supression_item":
        $idcollec = $_GET["idcollec"];
        $iditem = $_GET["iditem"];
        require_once "Model/item.php";
        require "Controllers/item_supprimer.php";
        break;   
    case "modification_form_item":
        require_once "Model/item.php";
        $id_collec = $_GET["id_collec"];
        $iditem = $_GET["iditem"];
        require "Vue/item_form_modif.php";
        break;
    case "modifier_item":
        $iditem = $_POST["id_item"];
        $titre = $_POST["titre"];
        $desc = $_POST["description"];
        $date_acquisition = $_POST["date_acquisition"];
        $idcollec = $_POST["id_collec"];
        require_once "Model/item.php";
        require "Controllers/item_modif.php";
        break;
    case "listage_item":
        require_once "./Model/item.php";
        require_once "./Model/collections.php";
        $idc = $_GET["idc"];
        require "./Vue/item_lister.php";
        break;
    case "bienvenue":
        require "Vue/bienvenue.php";
        break;
    default:
}
?>