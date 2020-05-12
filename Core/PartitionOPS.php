<?php

    include "C:\wamp64\www\Melodyo\Entities\Partition.php"; 
     //relative path doesn't work for some reason

    class PartitionOPS {
        function AjouterPartition($Partition){
            $sql = "INSERT INTO `partition` (`RefPart`, `NomPart`, `Niveau`, `DispoPart`, `Prix`, `IdCom`) VALUES (:RefPart, :NomPart, :Niveau, :DispoPart, :Prix, :IdCom)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':RefPart',$Partition->getRefPart());
                $req->bindValue(':NomPart',$Partition->getNomPart());
                $req->bindValue(':Niveau',$Partition->getNiveau());
                $req->bindValue(':DispoPart',$Partition->getDispoPart());
                $req->bindValue(':Prix',$Partition->getPrix());
                $req->bindValue(':IdCom',$Partition->getIdCom());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                //if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    //echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        
        function getPartition(){
            $sql="SELECT * FROM `partition`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function getPartitionFromDB ($RefPart){
            $sql="SELECT * FROM `partition` WHERE RefPart = ".$RefPart;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function modifierPartition($Partition){
            $sql = "UPDATE `partition` SET `NomPart` = :NomPart, `Niveau` = :Niveau, `DispoPart` = :DispoPart, `Prix` = :Prix, `IdCom` = :IdCom  WHERE `Partition`.`RefPart` = :RefPart";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':RefPart',$Partition->getRefPart());
                $req->bindValue(':NomPart',$Partition->getNomPart());
                $req->bindValue(':Niveau',$Partition->getNiveau());
                $req->bindValue(':DispoPart',$Partition->getDispoPart());
                $req->bindValue(':Prix',$Partition->getPrix());
                $req->bindValue(':IdCom',$Partition->getIdCom());
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }

        function supprimerPartition($RefPart){
            $sql = "DELETE FROM `partition` WHERE `partition`.`RefPart` = :RefPart";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':RefPart',$RefPart);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
    }

?>