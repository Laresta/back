<?php
ob_start();
?>
        <h1>Suppression</h1>
        <p>
            <a href="index.php?action=suppression_user&&id_user=<?=$iduser?>">
                <button>
                    OUI
                </button>
            </a>
            <a href="index.php?action=listage_user">
                <button>
                    NON
                </button>
            </a>
        </p>
<?php
$contenu = ob_get_clean();
$titre = "Confirmation de suppression d'un user";
require "template.php";
?>