<?php

namespace App\Model;

class Usuario extends Pessoa {

	private $idUsuario;
	private $email;
	private $senha;
	private $confirmarSenha;


	public function loginUser($data){

		$sql = "select * from usuario as user join pessoa as pes on user.id = pes.id where user.email = ? and user.senha = ?";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->bindValue(1, $data['email']);
		$stmt->bindValue(2, $data['senha']);

		$stmt->execute();

		if($stmt->rowCount() > 0){

			while ($row = $stmt->fetch()) {
			    $_SESSION['ID'] = $row['id'];//Add o ID do usuário logado na session!!!
			    $_SESSION['EMAIL'] = $row['email'];//Add o EMAIL do usuário logado na session!!!
			    $_SESSION['NOME'] = $row['nome'];//Add o NOME do usuário logado na session!!!
			}
			
			return 1;
		}else{
			return [];
		}

	}

	public function logoutUser(){

		if(isset($_SESSION['ID']) && isset($_SESSION['EMAIL']) && isset($_SESSION['NOME'])){
			unset($_SESSION['ID']);
			unset($_SESSION['EMAIL']);
			unset($_SESSION['NOME']);

			session_destroy();

			return 1;
		}else{
			return [];
		}

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