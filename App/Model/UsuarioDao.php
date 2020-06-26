<?php

namespace App\Model;

class UsuarioDao {

	public function create(Usuario $u){

		$sqlUser = "insert into usuario (email, senha) values (?, ?)";
		$sqlPessoa = "insert into pessoa (nome, sobrenome, idade, sexo, telefone, rua, bairro, cidade, estado) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmtUser = Conexao::getConn()->prepare($sqlUser);
		$stmtUser->bindValue(1, $u->getEmail());
		$stmtUser->bindValue(2, $u->getSenha());

		$resUser = $stmtUser->execute();

		$stmtPessoa = Conexao::getConn()->prepare($sqlPessoa);
		$stmtPessoa->bindValue(1, $u->getNome());
		$stmtPessoa->bindValue(2, $u->getSobreNome());
		$stmtPessoa->bindValue(3, $u->getIdade());
		$stmtPessoa->bindValue(4, $u->getSexo());
		$stmtPessoa->bindValue(5, $u->getTelefone());
		$stmtPessoa->bindValue(6, $u->getRua());
		$stmtPessoa->bindValue(7, $u->getBairro());
		$stmtPessoa->bindValue(8, $u->getCidade());
		$stmtPessoa->bindValue(9, $u->getEstado());

		$resPessoa = $stmtPessoa->execute();

			$res = false;

			if($resUser == true && $resPessoa == true){
				$res = true;
			}else{
				$res = false;
			}

		return $res;

	}

	public function read(){

		$sql = "select * from usuario as user join pessoa as pes on user.id = pes.id";

		$stmt = Conexao::Conn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0){
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		}else{
			return [];
		}
		
	}

	public function update(Usuario $u){

		$sqlUser = "update usuario set email = ?, senha = ? where id = ?";
		$sqlPessoa = "update pessoa set nome = ?, sobrenome = ?, idade = ?, sexo = ?, telefone = ?, rua = ?, bairro = ?, cidade = ?, estado = ? where id = ?";

		$stmtUser = Conexao::getConn()->prepare($sqlUser);
		$stmtUser->bindValue(1, $u->getEmail());
		$stmtUser->bindValue(2, $u->getSenha());
		$stmtUser->bindValue(3, $u->getIdUsuario());

		$resUser = $stmtUser->execute();

		$stmtPessoa = Conexao::getConn()->prepare($sqlPessoa);
		$stmtPessoa->bindValue(1, $u->getNome());
		$stmtPessoa->bindValue(2, $u->getSobreNome());
		$stmtPessoa->bindValue(3, $u->getIdade());
		$stmtPessoa->bindValue(4, $u->getSexo());
		$stmtPessoa->bindValue(5, $u->getTelefone());
		$stmtPessoa->bindValue(6, $u->getRua());
		$stmtPessoa->bindValue(7, $u->getBairro());
		$stmtPessoa->bindValue(8, $u->getCidade());
		$stmtPessoa->bindValue(9, $u->getEstado());
		$stmtPessoa->bindValue(10, $u->getIdPessoa());

		$resPessoa = $stmtPessoa->execute();

			$res = false;

			if($resUser == true && $resPessoa == true){
				$res = true;
			}else{
				$res = false;
			}

		return $res;
		
	}

	public function delete($id){

		$sqlUser = "delete from usuario where id = ?";
		$sqlPessoa = "delete from pessoa where id = ?";

		$stmtUser = Conexao::getConn()->prepare($sqlUser);
		$stmtUser->bindValue(1, $id);

		$resUser = $stmtUser->execute();

		$stmtPessoa = Conexao::getConn()->prepare($sqlPessoa);
		$stmtPessoa->bindValue(1, $id);

		$resPessoa = $stmtPessoa->execute();

			$res = false;

			if($resUser == true && $resPessoa == true){
				$res = true;
			}else{
				$res = false;
			}

		return $res;
		
	}

}
