<?php
ob_start();
?>
<h1>Suppression</h1>
        <p>
            <?php
                $idc = $_GET["idc"];
                ?>
            <a href="./?action=suppression_collection&&idc=<?=$idc?>">
                <button>
                    OUI
                </button>
            </a>
            <a href="./?action=listage_collections">
                <button>
                    NON
                </button>
            </a>
        </p>

<?php
        $contenu = ob_get_clean();
        $titre = "Suppression";
        $menu = "";
        require "template.php";
?>