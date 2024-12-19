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

  public function searchAndReplace($source){
    foreach($this->patterns as $pattern ){
        $source = preg_replace($pattern['pattern'], $pattern['replace'], $source);
    }
    return $source;
}

//will not work with searchandreplace
//to be added in views like [phpopening] include $this->resolve("partials/_header.php"); [phpclosing]
public function resolve(string $path)
  {
    return "{$this->basePath}/{$path}";
  }

  public static function test(){
    echo "hello world from autoloaded class </br>";
}
}