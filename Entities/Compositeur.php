<?PHP
class Compositeur {
	private $IdCom;
	private $NomCom;
	private $Prenom;
	private $Epoque;
	function __construct($IdCom,$NomCom,$Prenom,$Epoque){
		$this->IdCom=$IdCom;
		$this->NomCom=$NomCom;
		$this->Prenom=$Prenom;
		$this->Epoque=$Epoque;
	}
	


	function getIdCom(){
		return $this->IdCom;
	}
	function getNomCom(){
		return $this->NomCom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getEpoque(){
		return $this->Epoque;
	}


	function setIdCom($IdCom){
		$this->IdCom=$IdCom;
	}
	function setNomCom($NomCom){
		$this->NomCom=$NomCom;
	}
	function setPreNomCom($Prenom){
		$this->Prenom;
	}
	function setEpoque($Epoque){
		$this->Epoque=$Epoque;
	}
	
}

?>