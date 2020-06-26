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









$router->dispatch();
