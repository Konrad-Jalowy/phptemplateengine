@partial("head.php")
[h1]{{$message}}[/h1]
[h2]{{$message}}[/h2]
[h3]{{$message}}[/h3]
[h4]{{$message}}[/h4]
[h5]{{$message}}[/h5]
[h6]{{$message}}[/h6]
<?php echo "hello world from php" ?>
<p>Site name: {{$site_name}}</p>
{"sadsad <b>asdsad</b> asdsad"}
{!!sadsad <b>asdsad</b> asdsad!!}
<p>[b]Lorem ipsum[/b], dolor sit amet consectetur adipisicing elit. Ipsa distinctio eligendi laudantium praesentium est tempore vel tenetur inventore in architecto? Placeat sit doloremque reprehenderit alias animi aut, qui sed quia!</p>

[list]
@foreach($people as $person)
    [*]{{$person->name}}
@endforeach
[/list]

@if($loggedIn)
<p>Logout!</p>
@else
<p>Log in!</p>
@endif

<p>Nice search engine: [url]https://www.google.com[/url]</p>
<p>Nice search engine called [url=https://www.google.com]Google[/url]</p>

<p>
  [var]a[sup]2[/sup][/var] + [var]b[sup]2[/sup][/var] = [var]c[sup]2[/sup][/var]
</p>

<p>
  [s]Almost[/s] [u][b]every[/b][/u] developer's favorite molecule is C[sub]8[/sub]H<sub>10</sub>N<sub>4</sub>O<sub>2</sub>, also known as
  [i]"caffeine."[/i]
</p>

[details="Click Me"]lorem ipsum bla bla bla[/details]

<form>
    <label for="name">Your name</label>
    <input type="text" id="name" name="name">
    @method("PUT")
    @csrf
</form>