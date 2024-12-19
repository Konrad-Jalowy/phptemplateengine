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
