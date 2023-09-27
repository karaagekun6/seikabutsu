<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h3>日付</h3>
        <h2 class="date">
            {{ $record->date }}
        </h2>
        <h3>体重</h3>
        <h2 class="weight">
            {{ $record->weight }}kg
        </h2>
        <h3>体脂肪率</h3>
        <h2 class='BFP'>
            {{ $record->BFP }}%
        </h2>
        <h3>自己評価</h3>
        <div class="body">
            <div class="body_record">
                <h2><p>{{ $record->body }}</p>  </h2>
         <form action="/records/{{ $record->id }}" id="form_{{ $record->id }}" method="post">
             @csrf
             @method('DELETE')
             <button type="button" onclick="deleteRecord({{ $record->id }})">delete</button> 
             </form>         
            </div>
        </div>
        <div class="edit">
            <a href="/records/{{ $record->id }}/edit">編集</a>
            </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    <script>
    function deleteRecord(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
        
    }
    </script>
</html>
