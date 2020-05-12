<?php

include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\categorieOps.php";

    $C = new categorieOps();

    $C->supprimerCategorie($_GET['idCategorie']);

    header("location: AfficherCategorie.php");
    
?>