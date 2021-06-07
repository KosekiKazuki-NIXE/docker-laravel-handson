<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>0840チャンネル:メッセージの書き込み結果</title>
        <!--内部からcssを取得する場合-->
    　　 <style>
           .form{
                height:450px;
                width: 900px;
                padding: 10px; 
                border: 2px solid #808000;
                background: #ffffff;
           }
           .text_font{
                font-size: 35px;
           }
           .button_size{
                height:50px;
                width:180px;
                font-size:18px;
           }
        </style>
    </head>
    <body>
        <center>
           <div class="form">
                <div>
                    <form method="get" action="{{route('communication_top')}}">
                        <p class="text_font">無事にあなたのメッセージは書き込まれました。</p>
                        <br>
                        <p class="text_font"><strong>あなたの今回の運勢は：{{$omikuzi}}</strong></p>
                        <br>
                        <br>
                        <p class="text_font"><strong>{{$happy_message}}</strong></p>
                        <br>
                        <br>
                        <input type= "submit" value="TOPページに戻る" class="button_size">
                    </form>
                    
                </div>
            </div>
        </center>
    </body>
</html>
