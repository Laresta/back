<?php
ob_start();
?>
        <h1>Suppression</h1>
        <p>
            <a href="index.php?action=supression_item&&iditem=<?=$iditem?>&&idcollec=<?=$idcollec?>">
                <button>
                    OUI
                </button>
            </a>
            <a href="index.php?action=listage_item&&idc=<?=$idcollec?>">
                <button>
                    NON
                </button>
            </a>
        </p>
<?php
$contenu = ob_get_clean();
$titre = "Confirmation de suppression d'un item";
$menu ="";
require "template.php";
?>