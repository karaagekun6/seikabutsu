<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ユーザー</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
     <x-app-layout>
        <x-slot name="header" >
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('詳細画面') }}
        </h2>
        </x-slot>
    <body>
        <h1 class="name">
            {{ $user->name }}
        </h1>
        <h3 class='email'>
            {{ $user->email }}
        </h3>
        <h2 class='gender'>
            {{ $user->gender }}
        </h2>
        <h2 class="height">
            {{ $user->height }}cm
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
       <div class="edit">
            <a href="/users/{{ $user->id }}/useredit">編集</a>
            </div>    
            
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>    
    </body>
    </x-app-layout>
</html>
