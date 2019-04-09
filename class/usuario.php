<?php

class Usuario {

	private $idusuario;
	private $iddeslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario(){
		$this->idusuario = $value;
	}

		public function getIddeslogin(){
		return $this->iddeslogin;
	}

	public function setIddeslogin(){
		$this->iddeslogin = $value;
	}

		public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha(){
		$this->dessenha = $value;
	}

		public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro(){
		$this->dtcadastro = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID ", array(
		));
    if (count($results) > 0) {

    	$row = $results[0];

		$this->setIdusuario($row['idusuario']);
		$this->setDeslogin($row['deslogin']);
		$this->setDesenha($row['dessenha']);
		$this->setDtcadastro(new DateTime($row['dtcadastro']));
    }

	}

	public function __toString(){

     return json_encode(array(
     	"idusuario"=>$this->getIdusuario(),
        "deslogin"=>$this->getDeslogin(),
        "dessenha"=>$this->getDessenha(),
        "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
    ));
	}
}

?>