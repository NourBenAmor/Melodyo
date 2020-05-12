<?php

include "C:\wamp64\www\Melodyo\Core\PartitionOPS.php";
include "C:\wamp64\www\Melodyo\Core\config.php";




echo $_POST['RefPart'];
    $PartitionOPS = new PartitionOPS();

    $PartitionOPS->supprimerPartition($_GET['RefPart']);
    echo $_POST['RefPart'];
    header("location: AfficherPartition.php");

?>