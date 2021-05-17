<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>誕生日</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <h1>誕生日を入力してください</h1> 
        <div>
        <form method="POST" action="/happy">
            @csrf 
            <dd><Input type = "text" name = "bithday"></dd>
            <input type="submit"name="submit"value="送信"/>
        </form>
        </div>
    </body>
</html>