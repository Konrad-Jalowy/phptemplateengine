<?php
echo "hello from index.php </br>";
require __DIR__ .  "/../vendor/autoload.php";

use Framework\TemplateEngine;

TemplateEngine::test();
