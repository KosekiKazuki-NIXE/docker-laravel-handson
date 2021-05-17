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
            <form method="get" action="/quizu/2">
                @csrf
                <div>
                    <p>第一問</p>
                    <img src = "/Eath.png" alt="地球" width="400" height="200">
                    <p>{{$quizu1_a}}</p>
                    <br>
                    <p><strong>解説</strong></p>
                    <p>地球は自ら回転（自転と言う）しながら、太陽の周りを廻って（公転と言う）います。</p> 
                    <p>地球が南北に扁平な回転楕円体に近い形をしていることは古くから知られていました。</p> 
                    <p>扁平である大きな原因として、自転、公転の際生じる遠心力が作用したとされています。</p> 
                    <p>... 誇張して言えば、地球は西洋梨のような形をしているのです。</p>
                    <br>
                    <br>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                </div>
                <input type="submit"name="submit"value="次の問題へ"/>
            </form>
        </center>
    </body>
</html>