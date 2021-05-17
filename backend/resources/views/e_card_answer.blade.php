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
        <p>Eカードで君は勝てたかな？</p> 
            <form method="get" action="/e_card/1_answer">
                @csrf
                <div>
                    <p></p>
                    <span><img src = "/Emperpr.png" alt="皇帝" width="200" height="400"><img src = "/Citizen.png" alt="市民" width="200" height="400"><img src = "/Slave.png" alt="奴隷" width="200" height="400"></span>
                    <br>
                    <p>自分の出したカードは{{$e_card_num_mine}}で、相手は{{$card_answer_your}}でした。</p>
                    <br>
                    <p>結果{{$card_answer}}</p>
                    <br>
                </div>
                <!--<input type="submit"name="submit"value="次へ"/>-->
                <a href = "home">もう一度選択する。</a>
            </form>
        </center>
    </body>
</html>
