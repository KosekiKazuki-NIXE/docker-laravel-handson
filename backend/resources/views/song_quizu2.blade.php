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
            <form method="get" action="/song_quizu/2_answer">
                @csrf
                <div style = "backgroundcolor:#33FFFF;">
                    <h1>第二問</h1>
                    <img src = "/kumamoto_castle.png" alt="熊本城" width="300" height="200">
                    <br>
                    <h2>あんたがったどこさ</h2>
                    <audio controls src="/antagata_dokosa.mp3"></audio>
                    </div>
                    <br>
                    <br>
                    <p>あんたがったどこさ　ひごさ　ひごどこさ</p>
                    くまもとどこさ
                    <div style="display:inline-flex">
                        <select name = "song2_a">
                            <option value="1">てんわさ</option>
                            <option value="2">てんごさ</option>
                            <option value="3">せんばさ</option>
                            <option value="4">れんこんさ</option>       
                        </select>
                    </div>
                    〇〇やまにはたぬきがおってさ
                    <p>それをりょうしがてっぽうでうってさ　にてさ　やいてさ　くってさ...</p>
                    <br>
                    <br>
                    <br>
                    <input type="hidden" name="song_quizu1_a" value="{{$song_quizu1_a}}">
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
            <p>音源提供：<a href="https://vsq.co.jp/special/publicdomain/">著作権フリー 民謡 日本の唱歌 | SPECIAL | VSQ</a></p>
        </center>
    </body>
</html>