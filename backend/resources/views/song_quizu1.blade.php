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
            <form method="get" action="/song_quizu/1_answer">
                @csrf
                <div style = "backgroundcolor:#33FFFF;">
                    <h1>第一問</h1>
                    <img src = "/donguri.png" alt="どんぐり" width="400" height="100">
                    <br>
                    <h2>どんぐりころころ</h2>
                    <audio controls src="/donguri_korokoro_piano.mp3"></audio>
                    </div>
                    <br>
                    <br>
                    <div style="display:inline-flex">
                        どんぐりころころ　
                        <select name="song1_a">
                            <option value="1">どんぐりこ</option>
                            <option value="2">どんぶりこ</option>
                            <option value="3">どんぐらこん</option>
                            <option value="4">ふらどんこ</option>       
                        </select>
                        おいけにはまって　さあたいへん　どじょうがが出てきて　こんにちは・・・
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
            <p>音源提供：<a href="https://vsq.co.jp/special/publicdomain/">著作権フリー 民謡 日本の唱歌 | SPECIAL | VSQ</a></p>
        </center>
    </body>
</html>