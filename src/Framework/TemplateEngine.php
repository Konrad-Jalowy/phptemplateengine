<?php
namespace Framework;
class TemplateEngine {
    

  private array $globalTemplateData = [];

  protected $patterns = [];

  public function __construct(private string $basePath, $templatePatterns)
  {
    $this->patterns = include $templatePatterns;
  }


  public function testInstance(){
    echo $this->basePath;
  }

  public function presentPatterns(){
    foreach($this->patterns as $pattern ){
        print_r($pattern);
    }
  }

  public static function test(){
    echo "hello world from autoloaded class </br>";
}
}