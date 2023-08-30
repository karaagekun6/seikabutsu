<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
         
         <link href ="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
        
    </head>
    <body>
        <h1>My Page</h1>
        <form action="/records" method="POST">
            @csrf
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="user[name]"/>
            </div>
            <div class="email">
                Email:<input type="email"/>
                </div>
            <div class="password">
                Password:<inout type="password" minlength="8"/>
                </div>
            <div class="gender">
                <h2>性別</h2>
                <input type="radio" name="user[gender]" value="男"/>
                <input type="radio" name="user[gender]" value="女"/>
                <input type="radio" name="user[gender]" value="その他"/>
            </div>
            <div class="height">
                <h2>身長</h2>
                <input type="number" name="user[height]" min="100" max="300"/>cm
                </div>
            <div class="weight">
               <h2>最初の体重</h2>
            　 <input type="number" name="user[weight]" min="0" max="300"/>kg
               </div>
            <div class="goal">
                <h2>目標体重</h2>
                <input type="number" name="user[goal]" min="0" max="300"/>kg
            </div>
            
            
            
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>