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
            <form method="get" action="/song_quizu/answer">
                @csrf
                <div>
                    <p>第三問</p>
                    <img src = "/tooryanse.png" alt="熊本城" width="300" height="200">
                    <p>{{$song_quizu3_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>とおりゃんせ　とおりゃんせ　ここはどこの細道だ 天神様の細道だ <strong>ちっと通して下しゃんせ</strong> いきは良いよい　帰りは怖い</p>
                    <p>怖いながらもとおりゃんせ　とおりゃんせ</p>
                    <br>
                    <p>正解は、"ちっと通して下しゃんせ"でした！！</p>
                    <input type="hidden" name="song_quizu1_a" value="{{$song_quizu1_a}}">
                    <input type="hidden" name="song_quizu2_a" value="{{$song_quizu2_a}}">
                    <input type="hidden" name="song_quizu3_a" value="{{$song_quizu3_a}}">
                </div>
                <input type="submit"name="submit"value="最終結果発表！！"/>
            </form>
        </center>
    </body>
</html>