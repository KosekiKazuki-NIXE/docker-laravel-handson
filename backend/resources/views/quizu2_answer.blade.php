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
            <form method="get" action="/quizu/3">
                @csrf
                <div>
                    <p>第二問</p>
                    <img src = "/Itaria.png" alt="イタリアの国境" width="300" height="200">
                    <p>{{$quizu2_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>カルパッチョの起源 諸説あるが、最初にカルパッチョを考案したのはベネチアの画家「ヴィットーレ・カルパッチョ」であり、 </p> 
                    <p>その名をつけたものだという説がある。</p> 
                    <p>水の都ベネチアの「ハリーズ・バー」で、北イタリア産牛肉の生肉サラダをアレンジしたものとされている。</p> 
                    <br>
                    <br>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                    <input type="hidden" name="quizu2_a" value="{{$quizu2_a}}">
                </div>
                <input type="submit"name="submit"value="次の問題へ"/>
            </form>
        </center>
    </body>
</html>