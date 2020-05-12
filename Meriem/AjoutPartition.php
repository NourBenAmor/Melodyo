<?php
    include "C:\wamp64\www\Melodyo\Core\PartitionOPS.php";
    include "C:\wamp64\www\Melodyo\Core\config.php";
    
    
    //if (!isset($_POST['RefPart']) && !isset($_POST['NomPart']) && !isset($_POST['Niveau']) && !isset($_POST['DispoPart']) && !isset($_POST['prix']) && !isset($_POST['NomCom']) && !isset($_POST['ImagePart']) ){
    if (preg_match('#^[0-7]{1}$#',$_POST['Niveau'])){
      $Partition = new Partition($_POST['RefPart'],$_POST['NomPart'],$_POST['Niveau'],$_POST['DispoPart'],$_POST['Prix'],$_POST['IdCom']);

    $PartitionOPS = new PartitionOPS();
    echo $_POST['RefPart'];
    $PartitionOPS->AjouterPartition($Partition);
    }
      else{
       echo "Niveau entre 0-7 <br/>";
      }
      header("location: AfficherPartition.php");

?>