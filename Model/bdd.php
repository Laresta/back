<?php
 
require_once "config.php";

function bdd_connexion(){
    global $bdd_server , $bdd_name , $bdd_login , $bdd_mdp, $debug;
    try {
        $dsn = "mysql:host=$bdd_server;dbname=$bdd_name;charset=UTF8";
        $connect = new PDO($dsn, $bdd_login , $bdd_mdp);
        return $connect;
    } catch (PDOException $e) {
        if ($debug){           
            echo $e->getMessage();
        }
        else{
            echo "<p>une couille est dans le paté</p>"; 
        }
    }
    return null;        
}    

function bdd_erreur($requete){
    global $debug;
    if($debug){
        echo "<p>" .$requete->errorInfo()[2]. "</p>";
    }
    else {
        echo "<p> erreur de merde ptn </p>";
    }
}
?>