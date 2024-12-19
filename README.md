# phptemplateengine

## Some background
Long time ago i did PHP MVC framework project. It was my project, basing on 3 other (not mine projects) and my own ideas. One of these ideas was templating engine i did myself because nobody had something i got used to working with Laravel and other frameworks (not always PHP frameworks)  

Ok, so i did such project. LAMP is not my stack anymore, it was long time ago. But i decided to refresh my PHP knowledge and code that project again. Coding in PHP is fun, writing frameworks is fun, OOP is fun.  

So i do parts of mvc php framework (like router, template engine and so on) as standalone, one-day projects. Then i plan to somehow combine them into one mvc framework, improve, create something even better than my old project.  

Here we've got templating engine. Dont mind router class, ill do router as a separate project. 

## How it works:

### Quick introduction
Take a look at this code, should be self-explanatory:
```php
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
```
Of course in final project there will be different way of using it. Like dependency injection and some other, clever tactics. Ive been there, ive done that (in my old project).  

But here i want to focus on standalone parts without getting distracted by the whole bootstraping of the app, so yeah, dont expect anything other that tempale engine itself here...

### Detailed explanation
#### Variable interpolation
Heres how we do it, variable can come from context or global context:
```html
<p>Site name: {{$site_name}}</p>
```
#### String interpolation (safe, unsafe)
Heres example
```html
{"sadsad <b>asdsad</b> asdsad"}
{!!sadsad <b>asdsad</b> asdsad!!}
```