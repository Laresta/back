    <?php
    ob_start();
   
    $cnx = bdd_connexion();
    $collection = search_collections($cnx, $idc);
    $collectitre ="";


    foreach($collection as $col){
        $collectitre = $col->titre;
        echo "<p> $col->titre </p> 
            <a href='index.php?action=creation_form_item&&idcollec=$idc'<button> ajouter un item </button></a>            
        ";
    }
    if(!is_null($cnx)){
        $items = get_items($cnx , $idc);
    }
    echo "<h1> </h1>";
    foreach($items as $item) {
        echo "<p> $item->titre : $item->description </p>
        <a href='index.php?action=suppression_validate_item&&iditem=$item->id&&idcollec=$idc'><button>Suppr</button></a>
        <a href='index.php?action=modification_form_item&&id_collec=$idc&&iditem=$item->id'><button> modifier </button></a>";
    }
    $contenu = ob_get_clean();
    $menu = "";
    $titre = "Liste de la collection ".$collectitre;
    require "template.php";
    ?>
