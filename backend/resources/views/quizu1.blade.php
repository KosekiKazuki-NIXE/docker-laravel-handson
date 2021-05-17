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
            <form method="get" action="/quizu/1_answer">
                @csrf
                <div>
                    <p>第一問</p>
                    <img src = "/Eath.png" alt="地球" width="400" height="200">
                    <br>
                    <br>
                    <div style="display:inline-flex">
                        地球は
                        <select name="q_1">
                            <option value="0">丸い</option>
                            <option value="1">四角いような</option>
                            <option value="2">楕円のような</option>
                            <option value="3">菱形のような</option>
                            <option value="4">円柱のような</option>          
                        </select>
                        形をしている。
                    </div>
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
        </center>
    </body>
</html>