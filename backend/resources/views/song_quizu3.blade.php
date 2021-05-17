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
            <form method="get" action="/song_quizu/3_answer">
                @csrf
                <div style = "backgroundcolor:#33FFFF;">
                    <h1>第三問</h1>
                    <img src = "/tooryanse.png" alt="熊本城" width="300" height="200">
                    <br>
                    <h2>とおりゃんせ</h2>
                    <audio controls src="/tooryanse.mp3"></audio>
                    </div>
                    <br>
                    <br>
                    <p>とおりゃんせ　とおりゃんせ　ここはどこの細道だ　</p>
                    天神様の細道だ
                    <div style="display:inline-flex">
                        <select name="song3_a">
                            <option value="1">ちっと通してくりゃさんせ</option>
                            <option value="2">ちっと通して下さいな</option>
                            <option value="3">ちっと通して下しゃんせ</option>
                            <option value="4">少し、拝ませておくんなさい</option>       
                        </select>
                    </div>
                    いきは良いよい　帰りは怖い
                    <p>怖いながらもとおりゃんせ　とおりゃんせ</p>
                    <br>
                    <br>
                    <br>
                    <input type="hidden" name="song_quizu1_a" value="{{$song_quizu1_a}}">
                    <input type="hidden" name="song_quizu2_a" value="{{$song_quizu2_a}}">
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
            <p>音源提供：<a href="https://otologic.jp/free/se/traffic01.html">OtoLogic</a></p>
        </center>
    </body>
</html>