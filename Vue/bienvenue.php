<?php
ob_start();
$droit = $_SESSION["droits"];
if ($droit == 1){
     $message = "admin!";
}
else {
     $message = "user!";
}
?>

<p> Bienvenue <?= $message ?></p>

<?php
     $contenu = ob_get_clean();
     $titre = "Bienvenue";
     require "template.php";
?>