
[h1]{{$message}}[/h1]
<?php echo "hello world from php" ?>
<p>[b]Lorem ipsum[/b], dolor sit amet consectetur adipisicing elit. Ipsa distinctio eligendi laudantium praesentium est tempore vel tenetur inventore in architecto? Placeat sit doloremque reprehenderit alias animi aut, qui sed quia!</p>

<ul>
@foreach($people as $person)
    <li>{{$person->name}}</li>
@endforeach
</ul>
@if($loggedIn)
<p>Logout!</p>
@else
<p>Log in!</p>
@endif