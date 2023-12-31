<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
         
         <link href ="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <script src="script.js"></script>
   
        
    </head>
    <body>
        <h1>今日の記録</h1>
        <form action="/records" method="POST">
            @csrf
            <div class="date">
                <h2>日付</h2>
                <input type="date" name="record[date]"/>
            </div>
            <div class="trainingmenu">
                <h2>運動メニュー</h2>
            <select name="record[trainingmenu_id]"> 
               @foreach($trainingmenus as $trainingmenu)
            <option value="{{ $trainingmenu->id }}">{{ $trainingmenu->name }}</option>
               @endforeach
              </select>
            </div> 
            <div class="weight">
                <h2>体重</h2>
                <input type="number" name="record[weight]" step="0.1" min="0" max="100"/>kg
                </div>
            <div class="BFP">
                <h2>体脂肪率</h2>
                <input type="number" name="record[BFP]" step="0.1" min="0" max="100"/>%
            </div>
            <div class="body">
                <h2>自己評価</h2>
                <textarea name="record[body]" placeholder=""></textarea>
            </div>
            <div class="user">
               <h2>ユーザー</h2>
            <select name="record[user_id]">
               @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
               @endforeach
              </select>
            </div>
            
            <div class="submit">
            <input type="submit" value="保存"/>
        </div>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>