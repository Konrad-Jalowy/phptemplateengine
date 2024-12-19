<?php

require __DIR__ .  "/../vendor/autoload.php";

use Framework\TemplateEngine;


$frameworkPath = __DIR__ . "/../src/Framework";
$tempEn = new TemplateEngine($frameworkPath, $frameworkPath . "/templatepatterns.php");

$tempEn->renderTemplate("views/someview.php", ["message" => "hello world"]);