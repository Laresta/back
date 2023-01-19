<?php

ob_start();
$cnx = bdd_connexion();

if(!is_null($cnx)){
    $users = get_users($cnx);
}

foreach($users as $user){
    echo "$user->login
    <a href='index.php?action=modifier_form_user?iduser=$user->id'><button>modifier l'user</button></a>
    <a href='index.php?action=suppression_validate_user&&id_user=$user->id'><button>supprimer l'user</button></a>
    <br>";
}

echo "<br><a href='index.php?action=add_form_user'> <button>ajouter un user </button> </a>";

$contenu = ob_get_clean();
$titre = "Liste d'users";
require "template.php";

?>