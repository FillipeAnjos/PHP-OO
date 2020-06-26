<?php

namespace App\Model;

abstract class Pessoa {

	private $idPessoa;
	private $nome;
	private $sobreNome;
	private $idade;
	private $sexo;
	private $telefone;

	private $rua;
	private $bairro;
	private $cidade;
	private $estado;

	//class Usuario ---- private $email;
	//class Usuario ---- private $senha;
	//class Usuario ---- private $confirmarSenha;

	public function getIdPessoa() {
		return $this->idPessoa;
	}
	public function setIdPessoa($idPessoa){
		$this->idPessoa = $idPessoa;
	}

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSobreNome() {
		return $this->sobreNome;
	}
	public function setSobreNome($sobreNome){
		$this->sobreNome = $sobreNome;
	}

	public function getIdade() {
		return $this->idade;
	}
	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getTelefone() {
		return $this->telefone;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getRua() {
		return $this->rua;
	}
	public function setRua($rua){
		$this->rua = $rua;
	}

	public function getBairro() {
		return $this->bairro;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getCidade() {
		return $this->cidade;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getEstado() {
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}

}
