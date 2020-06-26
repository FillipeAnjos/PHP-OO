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

		if($data['senha'] != $data['confirmeSenha']){

			echo $this->view->render("home", [
				"title" => "Página Inicial"
			]);
			
			die();	
		}

		$user = new \App\Model\Usuario();

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

		$usuarioDao = new \App\Model\UsuarioDao();

		$resUser = $usuarioDao->create($user);
		/*
		if($resUser){
			//mandar mensagem de sucesso
		}else{
			//mandar mensagem de erro
		}
		*/

		echo $this->view->render("home", [
			"title" => "Página Inicial"
		]);

	}

















	public function login($data){

		//$user = new \App\Model\Usuario();

		echo "Estou no metodo login dentro do Web.php";
		die();
	}
	
}



