<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>雑学クイズ</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <h1>〜雑学クイズQ&A〜</h1> 
        <p>問題は全てで4問、全問正解できたかな？</p>  

        <h2>第一問　{{$quizu1_a}}</h2> 
        <br>
        <br>
        <h2>第二問　{{$quizu2_a}}</h2> 
        <br>
        <br>
        <h2>第三問　{{$quizu3_a}}</h2> 
        <br>
        <br>
        <h2>第四問　{{$quizu4_a}}</h2> 

        <p>全問正解できたかな？</p>
        <a href="/quizu/1_answer">もう一度回答する</a>
    
    </body>
</html>