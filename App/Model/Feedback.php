<?php

namespace App\Model;

class Feedback {

	private $idFeedback;
	private $idUsuario;
	private $email;
	private $nome;
	private $assunto;
	private $mensagem;



	public function getIdFeedback() {
		return $this->idFeedback;
	}
	public function setIdFeedback($idFeedback){
		$this->idFeedback = $idFeedback;
	}

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

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getAssunto() {
		return $this->assunto;
	}
	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}

	public function getMensagem() {
		return $this->mensagem;
	}
	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

}