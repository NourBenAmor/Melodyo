<?php
    class fournisseur{
        private $cinfournisseur;
        private $nomfournisseur;
        private $nomCategorie;
        private $telephonefournisseur;
        private $Mdpfournisseur;
        private $Emailfournisseur;
    
        function __construct($cinfournisseur, $nomfournisseur, $nomCategorie, $telephonefournisseur, $Mdpfournisseur,$Emailfournisseur){
            $this->cinfournisseur = $cinfournisseur;
            $this->nomfournisseur = $nomfournisseur;
            $this->nomCategorie = $nomCategorie;
            $this->telephonefournisseur = $telephonefournisseur;
            $this->Mdpfournisseur = $Mdpfournisseur;
            $this->Emailfournisseur = $Emailfournisseur;
        }

        function setcinfournisseur(){
            $this->cinfournisseur = $cinfournisseur;
        }
    
        function setnomfournisseur(){
            $this->nomfournisseur = $nomfournisseur;
        }

        function setnomCategorie(){
            $this->nomCategorie = $nomCategorie;
        }

        function settelephonefournisseur(){
            $this->telephonefournisseur = $telephonefournisseur;
        }

        function setMdpfournisseur(){
            $this->Mdpfournisseur = $Mdpfournisseur;
        }
        function setEmailfournisseur(){
            $this->Mdpfournisseur = $Mdpfournisseur;
        }
        function getcinfournisseur(){
            return $this->cinfournisseur;
        }
    
        function getnomfournisseur(){
            return $this->nomfournisseur;
        }

        function getnomCategorie(){
            return $this->nomCategorie;
        }

        function gettelephonefournisseur(){
            return $this->telephonefournisseur;
        }

        function getMdpfournisseur(){
            return $this->Mdpfournisseur;
        }
        function getEmailfournisseur(){
            return $this->Emailfournisseur;
        }

    }
?>