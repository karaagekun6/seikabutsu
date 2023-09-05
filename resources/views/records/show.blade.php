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
        <x-slot name="header" >
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('詳細画面') }}
        </h2>
        </x-slot>
    <body>
        <h2 class="date">
            {{ $record->date }}
        </h2>
        <h2 class="weight">
            {{ $record->weight }}kg
        </h2>
        <h2 class='BFP'>
            {{ $record->BFP }}%
        </h2>
        <div class="body">
            <div class="body_record">
                <h3><p>{{ $record->body }}</p>  </h3>
                 
            </div>
        </div>
        <div class="edit">
            <a href="/records/{{ $record->id }}/edit">編集</a>
            </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>    
    </body>
    </x-app-layout>
</html>
