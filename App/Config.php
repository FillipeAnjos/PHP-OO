<?php

//define("URL_BASE", "http://localhost:8000/PHP-POO/POO-2");
define("ROOT", "http://localhost/PHP-POO/POO-3");

define("FOOTER", "#Meu roda pé");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "phppoo",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

function url(String $uri = null): String
{
	if($uri){
		return ROOT . "/{$uri}";
	}

	return ROOT;

}

function message(string $message, string $type): string{
	return "<div class=\"message {$type}\">{$message}<div>";
}










