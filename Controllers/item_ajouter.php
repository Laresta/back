
<?php
  
    $connect = bdd_connexion();

    if($connect != null){
       echo "aled";
       $ok =  add_item($connect , $id_collec , $titre , $desc , $date_acquisition);
       if ($ok){
        header("Location: index.php?action=listage_item&&idc=$id_collec");
       }
       else{
        header("Location: erreur.htm");
       }
    }


?>


