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
	
}



