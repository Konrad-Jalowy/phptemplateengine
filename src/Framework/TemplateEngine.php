<?php
namespace Framework;
class TemplateEngine {
    

  private array $globalTemplateData = [];

  protected $patterns = [];

  public function __construct(private string $basePath, $templatePatterns)
  {
    $this->patterns = include $templatePatterns;
  }

  public function searchAndReplace($source){
    foreach($this->patterns as $pattern ){
        $source = preg_replace($pattern['pattern'], $pattern['replace'], $source);
    }
    return $source;
}

public function renderTemplate(string $template, array $data = []){

    extract($data, EXTR_SKIP);
    extract($this->globalTemplateData, EXTR_SKIP);

    $content = file_get_contents($this->resolve($template));

    $content = $this->searchAndReplace($content);
    eval( '?>' . $content );

  }

//will not work with searchandreplace
//to be added in views like [phpopening] include $this->resolve("partials/_header.php"); [phpclosing]
public function resolve(string $path)
  {
    return "{$this->basePath}/{$path}";
  }

  public function addGlobal(string $key, mixed $value)
  {
    $this->globalTemplateData[$key] = $value;
  }

  
}