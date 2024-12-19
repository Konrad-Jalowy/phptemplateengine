<?php

require __DIR__ .  "/../vendor/autoload.php";

use Framework\TemplateEngine;

$people = array(
    (object)["name" => "John Doe"],
    (object)["name" => "Jane Doe"]
);

$frameworkPath = __DIR__ . "/../src/Framework";
$tempEn = new TemplateEngine($frameworkPath, $frameworkPath . "/templatepatterns.php");

$tempEn->renderTemplate("views/someview.php", ["message" => "hello world", "people" => $people]);