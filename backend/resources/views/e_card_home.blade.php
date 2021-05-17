<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>カイジのEカード</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
   　　  <center>
        <h1>〜カイジのEカード〜</h1> 
        <p>Eカード</p>

            <form method="get" action="/e_card/1_answer">
                @csrf
                <div>
                    <p></p>
                    <span><img src = "/Emperpr.png" alt="皇帝" width="200" height="400"><img src = "/Citizen.png" alt="市民" width="200" height="400"><img src = "/Slave.png" alt="奴隷" width="200" height="400"></span>
                    <br>
                    <div style="display:inline-flex">
                        <select name="card_answer">
                            <option value="1">皇帝</option>
                            <option value="2">市民</option>
                            <option value="3">奴隷</option>    
                        </select>
                    </div>
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
        </center>
    </body>
</html>