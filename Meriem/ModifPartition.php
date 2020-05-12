<?php
    include "C:\wamp64\www\Melodyo\Core\PartitionOPS.php";
    include "C:\wamp64\www\Melodyo\Core\config.php";
    
    
    //if (!isset($_POST['RefPart']) && !isset($_POST['NomPart']) && !isset($_POST['Niveau']) && !isset($_POST['DispoPart']) && !isset($_POST['prix']) && !isset($_POST['IdCom']) && !isset($_POST['ImagePart']) ){
    $Partition = new Partition($_POST['RefPart'],$_POST['NomPart'],$_POST['Niveau'],$_POST['DispoPart'],$_POST['Prix'],$_POST['IdCom']);

    $PartitionOPS = new PartitionOPS();

    $PartitionOPS->modifierPartition($Partition);
    header("location: AfficherPartition.php");
    /*  }
      else{
       echo "vérifier les champs <br/>";
      }*/


?>