<?php
echo "hello from index.php </br>";
require __DIR__ .  "/../vendor/autoload.php";

use Framework\TemplateEngine;

TemplateEngine::test();
$frameworkPath = __DIR__ . "/../src/Framework";
$tempEn = new TemplateEngine($frameworkPath, $frameworkPath . "/templatepatterns.php");
$tempEn->testInstance();
