<?php
   include "C:\wamp64\www\Melodyo\Core\config.php";
   include "C:\wamp64\www\Melodyo\Core\categorieOps.php"; 

    $categorie = new categorie($_POST['idCategorie'],$_POST['nomCategorie']);

    $categorieOps = new categorieOps();

    $categorieOps->modifierCategorie($categorie);

    
?>