<?php
if (isset($_SESSION["droits"])){
    $droit = @$_SESSION["droits"];
}
else{
    $droit = 0;
}

if ($droit == 2 ){
?>
    <ul>
        <li> <a href="./index.php?action=listage_collections"> Lister mes collections</a></li>
        <li><a href="./index.php?action=deconnexion"> Se deconnecter</a></li>
    </ul>
<?php }
elseif ($droit == 1)
{ ?>
    <ul>
        <li><a href="./index.php?action=listage_user"> Lister les users</a></li>
        <li><a href="./index.php?action=deconnexion"> Se deconnecter</a></li>
    </ul>
<?php
}
else if ($droit == 0) {
?>
    <p> Connectez-vous pour avoir accés au site !! </p> 

<?php } ?>
