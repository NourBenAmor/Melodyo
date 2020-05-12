<?PHP
class Partition {
	private $RefPart;
	private $NomPart;
	private $Niveau;
	private $DispoPart;
    private $prix;
	private $IdCom;
	private $ImagePart;
	function __construct($RefPart,$NomPart,$Niveau,$DispoPart,$nb,$IdCom){
		$this->RefPart=$RefPart;
		$this->NomPart=$NomPart;
		$this->Niveau=$Niveau;
		$this->DispoPart=$DispoPart;
        $this->prix=$nb;
		$this->IdCom=$IdCom;
	}
	
	function getRefPart(){
		return $this->RefPart;
	}
	function getNomPart(){
		return $this->NomPart;
	}
	function getNiveau(){
		return $this->Niveau;
	}
	function getprix(){
		return $this->prix;
	}
	function getDispoPart(){
		return $this->DispoPart;
    }
    function getIdCom(){
		return $this->IdCom;
	}

	function setNomPart($NomPart){
		$this->NomPart=$NomPart;
	}
	function setNiveau($Niveau){
		$this->Niveau;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setDispoPart($DispoPart){
		$this->DispoPart;
    }
    function setRefPart($RefPart){
		$this->RefPart;
    }
    function setIdCom($IdCom){
		$this->IdCom;
    }

}

?>