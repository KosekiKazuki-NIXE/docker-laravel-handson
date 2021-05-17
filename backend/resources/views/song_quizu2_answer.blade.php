<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>歌詞クイズ</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
   　　  <center>
        <h1>〜歌詞クイズQ&A〜</h1> 
        <p>問題は全てで三問、全問正解できるかな？</p> 
            <form method="get" action="/song_quizu/3">
                @csrf
                <div>
                    <p>第二問</p>
                    <img src = "/kumamoto_castle.png" alt="熊本城" width="300" height="200">
                    <p>{{$song_quizu2_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>あんたがったどこさ　ひごさ　ひごどこさ　くまもとさ　くまもとどこさ <strong>せんばさ</strong> せんばやまにはたぬきがおってさ　それをりょうしがうってさ　やいてさ　にてさ　くってさ</p>
                    <br>
                    <p>正解は、"せんばさ"でした！！</p>
                    <input type="hidden" name="song_quizu1_a" value="{{$song_quizu1_a}}">
                    <input type="hidden" name="song_quizu2_a" value="{{$song_quizu2_a}}">
                </div>
                <input type="submit"name="submit"value="次の問題へ"/>
            </form>
        </center>
    </body>
</html>