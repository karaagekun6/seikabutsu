<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トップ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header" >
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('トップページ') }}
        </h2>
        </x-slot>
    <body>
       <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
         <p class>ユーザー</p> 
       <div class='users'>
       @foreach ($users as $user)
        <div class='user'>    
        <p class='name'><a href='/users/{{ $user->id }}'>
       @if (count($records) < 2)
        <font color="#000">{{ $user->name }} [Lv.1]</font>   
       @elseif (count($records) <5)
       <font color="#F00">{{ $user->name }} [Lv.2]</font> 
       @elseif (count($records) <10)
       <font color=" #F0F">{{ $user->name }} [Lv.3] </font>
       @elseif (count($records) <30)
        <font color="#FFCC00">{{ $user->name }} [Lv.4]</font>
       @elseif (count($records) <50)
        <font color="#0F0">{{$user->name }} [Lv.5]</font>
       @elseif (count($records) <60)
        <font color="#008000">{{ $user->name }} [Lv.6]</font>
       @elseif (count($records) <90)
        <font color="#0FF">{{ $user->name }} [Lv.7]</font>
       @elseif (count($records) <120)
        <font color="#00F">{{ $user->name }} [Lv.8]</font>
       @elseif (count($records) <240)
        <font color="#800080">{{ $user->name }} [Lv.9]</font>
       @elseif (count($records) <365)
        <font color="#000080"> {{ $user->name }} [Lv.10]</font>
       @else
        <font color="#00F9A9"> {{ $user->name }} [Lv.MAX]</font> 
       @endif
            </a></p></div>
       @endforeach
       </div>          
       <p class>運動記録一覧</p>
        
        <div class='records'>
             @foreach ($records as $record)
            <div class='record'>
         <p class='date'><a href='/records/{{ $record->id }}'>{{ $record->date }}</a></p>
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