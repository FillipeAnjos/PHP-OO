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

		$usuario = new \App\Model\Usuario();

		$res = $usuario->loginUser($data);

			if(empty($res)){
				echo $this->view->render("home", [
					"title" => "Página Inicial",
					"message" => "Esse usuário não consta em nossa base!",
					"statusMessage" => "error"
				]);
			}else{
				
				echo $this->view->render("home", [
					"title" => "Página Inicial",
					//"message" => "",
					//"statusMessage" => "success"
				]);

			}

	}

	public function logout(){

		$usuario = new \App\Model\Usuario();

		$res = $usuario->logoutUser();

			if(empty($res)){
				echo $this->view->render("home", [
					"title" => "Página Inicial",
					"message" => "Ocorreu um erro ao deslogar o usuário!",
					"statusMessage" => "error"
				]);
			}else{
				echo $this->view->render("home", [
					"title" => "Página Inicial",
					"message" => "Usuário deslogado com sucesso!",
					"statusMessage" => "success"
				]);
			}

	}

	public function whoWeAre(){
		
		echo $this->view->render("whoWeAre", [
			"title" => "Quem Somos"
		]);
		

	}

	public function feedback(){

		echo $this->view->render("feedback", [
			"title" => "Feedback"
		]);

	}

	public function creatingFeedback($data){

		$userDao = new \App\Model\UsuarioDao();
		$feedback = new \App\Model\Feedback();

		$feedback->setIdUsuario($data['idUsuario']);
		$feedback->setEmail($data['email']);
		$feedback->setNome($data['nome']);
		$feedback->setAssunto($data['assunto']);
		$feedback->setMensagem($data['mensagem']);

		$resFeedback = $userDao->createFeedback($feedback);

		if($resFeedback){
			echo $this->view->render("feedback", [
				"title" => "Feedback",
				"message" => "Mensagem enviada com sucesso!",
				"statusMessage" => "success"
			]);
		}else{
			echo $this->view->render("feedback", [
				"title" => "Feedback",
				"message" => "ocorreu um erro ao enviar a mensagem!",
				"statusMessage" => "error"
			]);
		}


	}
	
}



