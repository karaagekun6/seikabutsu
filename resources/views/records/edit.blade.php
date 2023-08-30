<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>記録</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name ="header">
            edit
        </x-slot>
    <body>
        <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='weight'>
                <h2>体重</h2>
                <input type='text' name='record[weight]' value="{{ $record->weight }}">
            </div>
            <div class='BFP'>
                <h2>体脂肪率</h2>
                <input type='text' name='record[BFP]' value="{{ $record->BFP }}">
            </div>
            <div class='body'>
                <h2>コメント</h2>
                <input type='text' name='record[body]' value="{{ $record->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    </body>
    </x-app-layout>
</html>
