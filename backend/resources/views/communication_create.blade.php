<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>0840チャンネル:書き込まれた内容の表示</title>
        <!--内部からcssを取得する場合-->
    　　 <style>
           .form{
                height:300px;
                width: 900px;
                padding: 10px; 
                border: 2px solid #808000;
                background: #ffffff;
           }
           .textfont{
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
                <h2 class="textfont">掲示板に書きこまれた内容の確認<h2>
                <div>
                    <form method="post" action="{{route('communication_create_terminate')}}">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <p class="textfont">{{$name}}さんが、「{{$message}}」と書き込みました。</p>
                        <br>
                        <input type="hidden" name="name" value="{{$name}}">
                        <input type="hidden" name="passwold" value="{{$passwold}}">
                        <input type="hidden" name="message" value="{{$message}}">
                        <input type= "submit" value="書き込む" class="button_size">
                    </form>
                </div>
            </div>
        </center>
    </body>
</html>