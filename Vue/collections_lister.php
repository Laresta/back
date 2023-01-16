    <?php
    ob_start();
    $cnx =bdd_connexion();
    $session=$_SESSION['id'];
    echo "<p>$session</p>";
    if(!is_null($cnx))$collections = get_collections($cnx, $_SESSION["id"]);
    
    foreach($collections as $collection){
        echo "<p>
            <a href='./?action=listage_item&&idc=$collection->id'> $collection->titre </a>($collection->id):
            <a href='./?action=suppression_validate_collection&&idc=$collection->id'><button>Suppr</button></a>
            <a href='./?action=modification_form_collection&&idc=$collection->id&&titre=$collection->titre'><button>Modifier</button></a>
            </p>";
    }
    echo "<p> <a href='./?action=creation_form_collection'><button>ajouter une collection</button></a> </p>";
    
$contenu = ob_get_clean();
$titre = "Collections";
$menu = "";

require "template.php";
?>
