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
            <form method="get" action="/song_quizu/2">
                @csrf
                <div>
                    <p>第一問</p>
                    <img src = "/donguri.png" alt="どんぐり" width="400" height="100">
                    <p>{{$song_quizu1_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>どんぐりころころ <strong>どんぶりこ</strong> おいけにはまって　さあたいへん　どじょうがが出てきて　こんにちは・・</p>
                    <br>
                    <p>正解は、"どんぶりこ"でした！！</p>
                    <input type="hidden" name="song_quizu1_a" value="{{$song_quizu1_a}}">
                </div>
                <input type="submit"name="submit"value="次の問題へ"/>
            </form>
        </center>
    </body>
</html>