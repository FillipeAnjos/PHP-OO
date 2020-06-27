<?php

namespace App\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

session_start();

class Web{

	protected $router;
	private $view;

	public function __construct(Router $router){

		$this->router = $router;
		$this->view = Engine::create(__DIR__."/../../Views", "php");

	}

	public function home($data){

		echo $this->view->render("home", [
			"title" => "Page Inicial"
		]);
		//require __DIR__."/../../Views/home.php";
	}

	public function contact($data){

		echo $this->view->render("contact", [
			"title" => "Page Contato"
		]);
	}

	public function createAccount(){

		echo $this->view->render("createAccount", [
			"title" => "Criar Conta"
		]);
	}

	public function creatingAccount($data){

		$user = new \App\Model\Usuario();
		$usuarioDao = new \App\Model\UsuarioDao();

			if($data['senha'] != $data['confirmeSenha']){

				echo $this->view->render("home", [
					"title" => "Página Inicial",
					"message" => "Erro! As senhas devem ser iguais!",
					"statusMessage" => "error"
				]);
				
				die();	
			}

		$checkUser = $usuarioDao->checkUserBank($data['email']);

			if(!empty($checkUser)){

				echo $this->view->render("home", [
					"title" => "Página Inicial",
					"message" => "Erro! Esse email já consta em nossa base!",
					"statusMessage" => "error"
				]);

				die();
			}

		$user->setEmail($data['email']);
		$user->setSenha($data['senha']);

		$user->setNome($data['nome']);
		$user->setSobreNome($data['sobreNome']);
		$user->setIdade($data['idade']);
		$user->setSexo($data['sexo']);
		$user->setTelefone($data['telefone']);
		$user->setRua($data['rua']);
		$user->setBairro($data['bairro']);
		$user->setCidade($data['cidade']);
		$user->setEstado($data['estado']);

		$resUser = $usuarioDao->create($user);

		echo $this->view->render("home", [
			"title" => "Página Inicial",
			"message" => "Cadastro realizado com sucesso!",
			"statusMessage" => "success"
		]);

	}

	public function login($data){

		$usuarioDao = new \App\Model\UsuarioDao();

		$res = $usuarioDao->readOneUser($data);

			if(empty($res)){
				echo $this->view->render("home", [
					"title" => "Página Inicial",
					"message" => "Esse usuário não consta em nossa base!",
					"statusMessage" => "error"
				]);
			}else{
				

				echo "Criar o login do usuário!";




				/*
				echo $this->view->render("home", [
					"title" => "Página Inicial",
					//"message" => "",
					//"statusMessage" => "success"
				]);
				*/
			}

	}
	
}



