<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header" >
            index
        </x-slot>
    <body>
        <h1>今日の記録</h1>
        <a href='/posts/create'>create</a>
        <div class='records'>
          @foreach ($records as $record)
            <div class='record'>
                <p class='time'>時間</p>
                <p class='date'>日にち</p>
                <p class='weight'>体重</p>
                <p class='BFP'>体脂肪率</p>
                <form action="/records/{{ $record->id }}" id="form_{{ $record->id }}" method="record">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteRecord({{ $record->id }})">delete</button> 
                </form>
            </div>
          @endforeach
        </div>
       </body>
       </x-app-layout>
       
       ログインユーザー：{{ Auth::user()->name }}
    
</html>