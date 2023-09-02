<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ユーザー</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $user->name }}
        </h1>
        <h3 class='email'>
            {{ $user->email }}
        </h3>
        <h3 class='password'>
            {{ $user->password }}
        </h3>
        <h2 class='gender'>
            {{ $user->gender }}
        </h2>
        <h2 class="weight">
            {{ $user->weight }}kg
        </h2>
        <h2 class='BFP'>
            {{ $user->BFP }}%
        </h2>
        <h2 class="goal">
            {{ $user->goal }}kg
        </h2>
           
            
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>    
    </body>
</html>
