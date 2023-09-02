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
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
        </x-slot>
    <body>
       <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1>今日の記録</h1>
        <a href='/records/create'>[記録する]</a>
        
        <div class='records'>
             @foreach ($records as $record)
            <div class='record'>
                <p class='date'><a href='/records/{{ $record->id }}'>{{ $record->date }}</a></p>
            </div>
       @endforeach
      
      
       <a href='/records/usercreate'>[My page]</a> 
       @foreach ($users as $user)
            <div class='user'>
        　　<p class='name'><a href='/records/{{ $user->id }}/usershow'>{{ $user->name }}</a></p>
               </div>
       @endforeach
                </div>
            </div>
        </div>
    </div>
       </body>
       </x-app-layout>
       
       ログインユーザー：{{ Auth::user()->name }}
    
</html>