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

## Detailed explanation:
### Method spoofing and CSRF token
Similar to Laravel framework. Heres how we do it:
```html
<form>
    <label for="name">Your name</label>
    <input type="text" id="name" name="name">
    @method("PUT")
    @csrf
</form>
```
CSRF should be set by some middleware as global variable csrfToken. Method spoofer, well should be compatible with the router,
add shomething like that to your router:
```php
 $method = strtoupper($_POST['_METHOD'] ?? $method);
```

### Foreach
Heres how we do foreach, similar to Laravel. Btw, nobody forces you to use bbcodes for lists
```html
[list]
@foreach($people as $person)
    [*]{{$person->name}}
@endforeach
[/list]
```
That said, i think li bbcode is actually usefull. You dont have to use closing tag. And if you want some css classes then pass a span to the bbcode.

### Partials
Super easy, heres how we do it:
```html
@partial("head.php")
```
### Variable interpolation
Heres how we do it, variable can come from context or global context:
```html
<p>Site name: {{$site_name}}</p>
```
### String interpolation (safe, unsafe)
Heres example
```html
{"sadsad <b>asdsad</b> asdsad"}
{!!sadsad <b>asdsad</b> asdsad!!}
```
### If/else/endif
Similar to Laravel, heres how we do it:
```html
@if($loggedIn)
<p>Logout!</p>
@else
<p>Log in!</p>
@endif
```
### Details and summary
Actually its pretty usefull bbcode
```html
[details="Click Me"]lorem ipsum bla bla bla[/details]
```
### Header bbcodes
Less usefull, but why not:
```html
[h1]{{$message}}[/h1]
[h2]{{$message}}[/h2]
[h3]{{$message}}[/h3]
[h4]{{$message}}[/h4]
[h5]{{$message}}[/h5]
[h6]{{$message}}[/h6]
```

### Some bbcodes
I added them to the project, maybe theyll be useful.
Some of them:
```html
<p>
  [var]a[sup]2[/sup][/var] + [var]b[sup]2[/sup][/var] = [var]c[sup]2[/sup][/var]
</p>
```
I think self-explanatory to anyone, who knows HTML. Some more:
```html
<p>
  [s]Almost[/s] [u][b]every[/b][/u] developer's favorite molecule is C[sub]8[/sub]H<sub>10</sub>N<sub>4</sub>O<sub>2</sub>, also known as
  [i]"caffeine."[/i]
</p>
```
And anchor bbcodes
```html
<p>Nice search engine: [url]https://www.google.com[/url]</p>
<p>Nice search engine called [url=https://www.google.com]Google[/url]</p>
```

# Internals
If you wanna know HOW it works, here are main files youre interested in:
- TemplateEngine.php <-- engine class
- templatepatterns.php <-- regex patterns used as template directives
- views and partials directory that have view and a partial
- public/index.php, where templating engine is used

## How to start
You need to run command:
```sh
composer run-server
```
## Index.php
Dont mind router. Router is a separate mini oneday project, i didnt need router here, i decided to make standalone parts and focus fullu on them.  

Heres code:
```php
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
```
So we create instance, we give path to where views are located and path to where templatepatterns are located.

In mvc framework project there will be some mechanism that bootstrap the app. We see here passing some context as well as passing global context. Csrftoken will be passed in a middleware just like in the old project.