<?php
ob_start();
$droit = @$_SESSION["droits"];
if ($droit == 1){
     $message = "admin!";
}
else if ($droit = 2){
     $message = "user!";
}
else{
     $message = ", pour avoir accés au site , connectez-vous";
}
?>

<p> Bienvenue <?= $message ?></p>

<?php
     $contenu = ob_get_clean();
     $titre = "Bienvenue";
     require "template.php";
?>