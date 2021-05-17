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
            <form method="get" action="/quizu/answer">
                @csrf
                <div>
                    <p>第四問</p>
                    <img src = "/Thermometer.png" alt="体温計" width="300" height="200">
                    <p>{{$quizu4_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>指の間の温度は３５.5℃〜</p> 
                    <p>体温計で測るとわかりますが、その温度なんです。</p>
                    <p>役には立ちませんが、ちょっとした問題として出すことができます。</p>
                    <br>
                    <br>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                    <input type="hidden" name="quizu2_a" value="{{$quizu2_a}}">
                    <input type="hidden" name="quizu3_a" value="{{$quizu3_a}}">
                    <input type="hidden" name="quizu4_a" value="{{$quizu4_a}}">
                </div>
                <input type="submit"name="submit"value="最終結果"/>
            </form>
        </center>
    </body>
</html>