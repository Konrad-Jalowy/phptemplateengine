<?php

require __DIR__ .  "/../vendor/autoload.php";

use Framework\TemplateEngine;
use Framework\Router;
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router = new Router();
echo $router->normalizePath($uri);
$people = array(
    (object)["name" => "John Doe"],
    (object)["name" => "Jane Doe"]
);
$loggedIn = true;

$frameworkPath = __DIR__ . "/../src/Framework";
$tempEn = new TemplateEngine($frameworkPath, $frameworkPath . "/templatepatterns.php");
$tempEn->addGlobal('site_name', 'MyApp');
$tempEn->addGlobal('csrfToken', 'sadsadsadqwdqdwqd');
$tempEn->renderTemplate("views/someview.php", [
    "message" => "hello world", 
    "people" => $people, 
    "loggedIn" => $loggedIn
]);