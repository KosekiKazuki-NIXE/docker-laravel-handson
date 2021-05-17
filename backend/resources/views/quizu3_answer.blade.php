<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>雑学クイズ</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
   　　  <center>
        <h1>〜雑学クイズQ&A〜</h1> 
        <p>問題は全てで四問、全問正解できるかな？</p> 
            <form method="get" action="/quizu/4">
                @csrf
                <div>
                    <p>第三問</p>
                    <img src = "/Thinking.png" alt="考える人" width="200" height="400">
                    <p>{{$quizu3_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>考える人」の元の作品である「地獄の門」は、ダンテの「神曲」から着想を得たもの。</p> 
                    <p>地獄に落ちた者たちを裁判官が上から見ている様子を表現しています。</p> 
                    <p>この裁判官が、「考える人」となっています。</p> 
                    <p>なので、「考える人」のポーズは何かを考えているのではなく、地獄に落ちた者たちを見下ろしているポーズだったのです。</p>
                    <br>
                    <br>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                    <input type="hidden" name="quizu2_a" value="{{$quizu2_a}}">
                    <input type="hidden" name="quizu3_a" value="{{$quizu3_a}}">
                </div>
                <input type="submit"name="submit"value="次の問題へ"/>
            </form>
        </center>
    </body>
</html>