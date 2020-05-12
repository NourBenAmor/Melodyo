<?php
    include "C:\wamp64\www\Melodyo\Core\CompositeurOPS.php";
    include "C:\wamp64\www\Melodyo\Core\config.php";
    
    
    //if (!isset($_POST['NomCom']) && !isset($_POST['Prenom']) && !isset($_POST['Epoque']) ){
    $Compositeur = new Compositeur($_POST['IdCom'],$_POST['NomCom'],$_POST['Prenom'],$_POST['Epoque']);

    $CompositeurOPS = new CompositeurOPS();
    $CompositeurOPS->modifierCompositeur($Compositeur);
    header("location: AfficherComp.php");
    /*  }
      else{
       echo "vérifier les champs <br/>";
      }*/

?>