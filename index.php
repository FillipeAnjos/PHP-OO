<?php

require __DIR__."/vendor/autoload.php";


use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/*
 *	Controllers
*/
$router->namespace("App\Controllers");

/*
 *	WEB
 *	home
*/
$router->group(null);
$router->get("/", "Web:home");
//$router->get("/{filter}", "Web:home");
$router->get("/contato", "Web:contact");
$router->get("/criarConta", "Web:createAccount");
$router->post("/login", "Web:login");
$router->get("/logout", "Web:logout");
$router->post("/criandoConta", "Web:creatingAccount");
$router->get("/quemSomos", "Web:whoWeAre");
$router->get("/feedback", "Web:feedback");
$router->post("/criandoFeedback", "Web:creatingFeedback");








$router->dispatch();
