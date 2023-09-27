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
        <h3>[ユーザー名]</h3>
        <h1 class="name">
            {{ $user->name }}
        </h1>
        <h3>[E-mail]</h3>
        <h3 class='email'>
            {{ $user->email }}
        </h3>
        <h3>[性別]</h3>
        <h2 class='gender'>
          {{ $user->gender }}
        </h2>
        <h3>[身長]</h3>
        <h2 class="height">
            {{ $user->height }}cm
        </h2>
        <h3>[体重]</h3>
        <h2 class="weight">
            {{ $user->weight }}kg
        </h2>
        <h3>[体脂肪率]</h3>
        <h2 class='BFP'>
            {{ $user->BFP }}%
        </h2>
        <h3>[目標体重]</h3>
        <h2 class="goal">
            {{ $user->goal }}kg
        </h2>
        <form action="/users/{{ $user->id }}" id="form_{{ $user->id }}" method="post">
             @csrf
             @method('DELETE')
             <button type="button" onclick="deleteUser({{ $user->id }})">delete</button> 
             </form>  
       <div class="edit">
            <a href="/users/{{ $user->id }}/useredit">編集</a>
        </div>
        </div>
            
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
    <script>
    function deleteUser(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
        
    }
    </script>
</html>
