<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ユーザー情報編集</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='name'>
                <h2>名前</h2>
                <input type='text' name='user[name]' value="{{ $user->name }}">
            </div>
            <div class='email'>
                <h2>E-mail</h2>
                <input type='email' name='user[email]' value="{{ $user->email }}">
            </div>
            <div class='password'>
                <h2>パスワード</h2>
                <input type='password' name='user[password]' value="{{ $user->password }}">
            </div>
            <div class='gender'>
                <h2>性別</h2>
                男→M/女→F/その他→Other
                <h3><input type='enum' name="user[gender]" value="{{ $user->gender }}"></h3>
            </div>
            <div class='height'>
               <h2>身長</h2>
              <input type='number' name="user[height]" step=0.1 value="{{ $user->height }}">cm
              </div>
            <div class='weight'>
                <h2>体重</h2>
                <input type='number' name='user[weight]' step=0.1 value="{{ $user->weight }}">kg
            </div>
            <div class='BFP'>
                <h2>体脂肪率</h2>
                <input type='number' name='user[BFP]' step=0.1 value="{{ $user->BFP }}">%
            </div>
            <div class='goal'>
                <h2>目標体重</h2>
                <input type='number' name='user[goal]' step=0.1 value="{{ $user->goal }}">kg
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    </body>
</html>
