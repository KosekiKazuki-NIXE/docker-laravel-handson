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
            <form method="get" action="/quizu/4_answer">
                @csrf
                <div> 
                    <p>第四問</p>
                    <img src = "/Thermometer.png"　alt="体温計" width="300" height="200">
                    <br>
                    <br>
                    <div>
                        <p>手の指と指の間の温度は何度でしょう？次の選択肢から選びなさい。</p>
                        <select name="q_4">
                            <option value="0">約32℃</option>
                            <option value="1">約33.5℃</option>
                            <option value="2">約34℃</option>
                            <option value="3">約35.5℃</option>     
                        </select>
                    </div>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                    <input type="hidden" name="quizu2_a" value="{{$quizu2_a}}">
                    <input type="hidden" name="quizu3_a" value="{{$quizu3_a}}">
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
    　　　</center>
    </body>
</html>