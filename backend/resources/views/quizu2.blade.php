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
            <form method="get" action="/quizu/2_answer">
                @csrf
                <div> 
                    <p>第二問</p>
                    <img src = "/Itaria.png"　alt="イタリア国境" width="300" height="200">
                    <br>
                    <br>
                    <div>
                        <p>イタリアが発祥の料理は次のうちどれでしょうか？</p>
                        <select name="q_2">
                            <option value="0">ドリア</option>
                            <option value="1">カルパッチョ</option>
                            <option value="2">プリン・アラモード</option>
                            <option value="3">チャーハン</option>
                            <option value="4">トルコアイス</option>          
                        </select>
                    </div>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
        </center>
    </body>
</html>