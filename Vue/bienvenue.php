<?php
ob_start();
?>

<p> Bienvenue </p>

<?php
     $contenu = ob_get_clean();
     $titre = "Bienvenue";
     require "template.php";
?>