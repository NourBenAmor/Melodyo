<?php
    
    include "C:\wamp64\www\Melodyo\Entities\Compositeur.php"; 

    class CompositeurOPS {

        function ajouterCompositeur($Compositeur){
            $sql = "INSERT INTO `compositeur` (`IdCom`,`NomCom`, `Prenom`, `Epoque`) VALUES (:IdCom,:NomCom, :Prenom, :Epoque)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':IdCom',$Compositeur->getIdCom());
                $req->bindValue(':NomCom',$Compositeur->getNomCom());
                $req->bindValue(':Prenom',$Compositeur->getPrenom());
                $req->bindValue(':Epoque',$Compositeur->getEpoque());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                //if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    //echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }
        function getCom(){
            $sql="SELECT * FROM `compositeur`";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function modifierCompositeur($Compositeur){
            $sql = "UPDATE `compositeur` SET `NomCom` = :NomCom, `Prenom` = :Prenom, `Epoque` = :Epoque WHERE `compositeur`.`IdCom` = :IdCom";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':IdCom',$Compositeur->getIdCom()); 
                $req->bindValue(':NomCom',$Compositeur->getNomCom());
                $req->bindValue(':Prenom',$Compositeur->getPrenom());
                $req->bindValue(':Epoque',$Compositeur->getEpoque());
                $req->execute();   
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
                //if(strpos($e->getMessage(), 'SQLSTATE[23000]') != false)
                    //echo '<script>alert("Echec, ce criminel existe déjà.");</script>';
            }    
        }

        function supprimerCompositeur($IdCom){
            $sql = "DELETE FROM `compositeur` WHERE `compositeur`.`IdCom` = :IdCom";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':IdCom',$IdCom);
                $req->execute();
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
    }
?>