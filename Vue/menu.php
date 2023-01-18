<?php
if ($_SESSION["droits"] == 2 ){
?>
    <ul>
        <li> <a href="./index.php?action=listage_collections"> Lister mes collections</a></li>
        <li><a href="./index.php?action=deconnexion"> Se deconnecter</a></li>
    </ul>
<?php }
elseif ($_SESSION["droits"] == 1)
{ ?>
    <ul>
        <li><a href="./index.php?action=listage_user"> Lister les users</a></li>
        <li><a href="./index.php?action=deconnexion"> Se deconnecter</a></li>
    </ul>
<?php
}
?>