<?php
	
	class Usuario{


	private $id_usuario, $email_usuario, $senha_usuario, $situacao_usuario;

	public function setId_Usuario(){
		return $this->id_usuario;
	}

	public function getId_Usuario($id_usuario){
		$this->id_usuario = $id_usuario;	
	}
	
	public function getEmail_Usuario(){
		return $this->email_usuario;
	}

	public function setEmail_Usuario($email_usuario){
		$this->email_usuario = $email_usuario;	
	}

	public function getSenha_Usuario(){
		return $this->senha_usuario;
	}

	public function setSenha_Usuario($senha_usuario){
		$this->senha_usuario = $senha_usuario;	
	}

    public function getSituacao_usuario(){
		return $this->situacao_usuario;
	}

	public function setSituacao_usuario($situacao_usuario){
		$this->situacao_usuario = $situacao_usuario;	
	}

}
