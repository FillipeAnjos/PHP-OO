<?php

namespace App\Model;

class Usuario extends Pessoa {

	private $idUsuario;
	private $email;
	private $senha;
	private $confirmarSenha;



	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha() {
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getConfirmarSenha() {
		return $this->confirmarSenha;
	}
	public function setConfirmarSenha($confirmarSenha){
		$this->confirmarSenha = $confirmarSenha;
	}

}