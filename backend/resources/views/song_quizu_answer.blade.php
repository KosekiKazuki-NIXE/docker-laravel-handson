<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>歌詞クイズ</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <h1>〜歌詞クイズQ&A〜</h1> 
        <p>問題は全てで三問、全問正解できたかな？</p>  

        <h2>第一問　{{$song_quizu1_a}}</h2> 
        <br>
        <br>
        <h2>第二問　{{$song_quizu2_a}}</h2> 
        <br>
        <br>
        <h2>第三問　{{$song_quizu3_a}}</h2> 
        <br>
        <p>全問正解できたかな？</p>
        <p>あなたのランクは:{{$score}}</p>
        <a href="/song_quizu/1">もう一度回答する</a>
    
    </body>
</html>