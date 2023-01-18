<?php

ob_start();
$cnx = bdd_connexion();

if(!is_null($cnx)){
    $users = get_users($cnx);
}

foreach($users as $user){
    echo "$user->login
    <a href='index.php?action='><button>modifier l'user</button></a>
    <a href='index.php?action='><button>supprimer l'user</button></a>
    <br>";
}

$contenu = ob_get_clean();
$menu = "";
$titre = "Liste d'users";
require "template.php";

?>