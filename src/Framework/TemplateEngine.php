<?php
namespace Framework;
class TemplateEngine {
    

  private array $globalTemplateData = [];

  public function __construct(private string $basePath)
  {
  }

  public function testInstance(){
    echo $this->basePath;
  }

  public static function test(){
    echo "hello world from autoloaded class </br>";
}
}