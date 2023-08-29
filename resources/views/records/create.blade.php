<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
    </head>
    <body>
        <h1>今日の記録</h1>
        <form action="/records" method="POST">
            @csrf
            <div class="weight">
                <h2>体重</h2>
                <input type="text" name="record[weight]" placeholder="体重"/>
            </div>
            <div class="BFP">
                <h2>体脂肪率</h2>
                <input type="text" name="record[BFP]" placeholder="体脂肪率"/>
            </div>
            <div class="body">
                <h2>Comment</h2>
                <textarea name="record[body]" placeholder="今日も１日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>