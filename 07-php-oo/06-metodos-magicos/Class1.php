<?php 

class Class1{


	private $nome;
	private $idade;

	// Método que não precisa procurar, já existe assim que instancia a classe
	public function __construct($nome, $idade){
		$this->nome = $nome;
		$this->idade = $idade;
	} // construct

	public function getNome(){
		return $this->nome;
	}

	public function getIdade(){
		return $this->idade;
	}


}// Class1

 ?>