<?php
	
	class Livro{


	private $nome,$codigo,$url;

	public function getNome(){
		return $this->titulo;
	}

	public function setNome($titulo){
		$this->nome = $titulo;	
	}
	
	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;	
	}

	public function getUrl(){
		return $this->url;
	}

	public function setUrl($url){
		$this->url = $url;	
	}

}