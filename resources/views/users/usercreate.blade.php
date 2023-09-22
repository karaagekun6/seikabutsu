<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
         
         <link href ="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
        
    </head>
    <body>
        <h1>My Page</h1>
        <form action="/users" method="POST">
            @csrf
            <div class="name">
                 <h2>名前  <input type="text" name="user[name]"/></h2>
            </div>
            <div class="email">
            Email:
            <input type="email" name="user[email]"/>
                </div>
            <div class="password">
            Password:
            <input type="password" name="user[password]" minlength="8"/>
                </div>
                <div class='gender'>
                <h2>性別</h2>
                男→M/女→F/その他→Other
                <h3><input type='enum' name="user[gender]"/></h3>
            </div>
            <div class="height">
                <h2>身長  <input type="float" name="user[height]" min="100" max="300"/>cm</h2>
                </div>
            <div class="weight">
               <h2>最初の体重  <input type="float" name="user[weight]" min="0" max="300"/>kg</h2>
               </div>
            <div class="BFP">
               <h2>最初の体脂肪率 <input type="float" name="user[BFP]" min="0" max="100"/>%</h2>
               </div>
            <div class="goal">
                <h2>目標体重  
                <input type="float" name="user[goal]" min="0" max="300"/>kg</h2>
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