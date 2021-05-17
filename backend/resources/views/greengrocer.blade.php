<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>八百屋さん</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <h1>八百屋さんで買いたいもの</h1> 
        <p>大好評につき、１回の会計で最大１点につき４つまでとなっております。</p>  
        <img src = "yaoya.png">
    <form method="post" action="/greengrocer_total">
        @csrf 
        <p>大根:1本350円(税抜き)</p>
        <dd><select name="daikon">
            <option value="0">0個</option>
            <option value="1">1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
            <option value="4">4個</option>          
        </select></dd>
        <br>
        <p>トマト:1個100円(税抜き)</p>
        <dd><select name="tomato"">
            <option value="0">0個</option>
            <option value="1">1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
            <option value="4">4個</option>          
        </select></dd>
        <br>
        <p>ゴーヤ:1本２50円(税抜き)</p>
        <dd><select name="bitter_gourd"">
            <option value="0">0個</option>
            <option value="1">1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
            <option value="4">4個</option>          
        </select></dd>
        <br>
        <p>りんご:1個150円(税抜き)</p>
        <dd><select name="apple"">
            <option value="0">0個</option>
            <option value="1">1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
            <option value="4">4個</option>          
        </select></dd>
        <br>
        <p>バナナ:1房200円(税抜き)</p>
        <dd><select name="banana">
            <option value="0">0個</option>
            <option value="1">1個</option>
            <option value="2">2個</option>
            <option value="3">3個</option>
            <option value="4">4個</option>          
        </select></dd>
        <br>
        <input type="submit"name="submit"value="送信"/>
    </form>
    　　　
    </body>
</html>