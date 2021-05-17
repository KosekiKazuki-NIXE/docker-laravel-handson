<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>計算機</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <h1>計算したい数字を入力してください</h1> 
        <p></p>  
    <div>
    <form method="post" action="/total">
        @csrf 
        <dd><Input type = "text" name = "box1"></dd>
        <dd><select name="operator">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>          
        </select></dd>
        <dd><Input type = "text" name = "box2"></dd>
        <input type="submit"name="submit"value="送信"/>
    </form>
    </div>
    　　　
    </body>
</html>