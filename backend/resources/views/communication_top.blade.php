<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>0840チャンネル</title>
        <!--外部からCssを取得する場合-->
        <link rel="stylesheet" href = "/home.css">
        <!--内部からcssを取得する場合-->
    　　 <style>
            body{
                background: #f5f5f5;
            }
           .form{
                height:2px;
                width: 900px;
                padding: 10px; 
                border: 2px solid #000000;
                background: #f0f8ff;
           }

           .scroll {
                height:400px;        /*縦*/
                width:900px;         /*横*/
                overflow:scroll;    /*スクロールバー表示*/
                overflow-x:hidden;  /*スクロールバー横を消す */
                
            }
            .log{
                height:400px;
                width: 900px;
                padding: 10px; 
                border: 2px solid #e6e6fa;
                background: #f0f8ff;
           }
           .log_message{
                height:70px;
                width: 880px;
                padding: 5px; 
                border: 2px solid #e6e6fa;
                background: #b0c4de;
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>★0840チャンネル★</h1>
            <h2>--掲示板--<h2>
            <div class="log">
                <div class="scroll">
                    @foreach($communication_talk_log as $communication)
                                <div class ="log_message">
                                ID:{{$communication->id}} {{$communication->name}}さんが
                                <br>
                                {{$communication->created_at}}に「{{$communication->message}}」と書き込みました。
                                </div>
                    @endforeach
                </div>
            </div>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
            <div class="form">
                <form method="POST" action="{{route('communication_create')}}"　enctype="multipart/form-data"><!--enctype="multipart/form-data"をフォームに書き込むと、ファイルのアップロードが出来るようになります。-->
                    @csrf
                    <br>
                    <label>名前</label>
                    <input type="text" name="name">
                    <label>パスワード</label>
                    <input type="integer" name="passwold">
                    <br>
                    <br>
                    <label>画像の追加</label>
                    <input type="file" name="image" accept="image/png, image/jpeg">
                    <br>
                    <!--<small>※削除などがあった場合必要になります。</small>-->
                    <br>
                    <label>内容</label>
                    <textarea type="text" name="message"></textarea>
                    <br>
                    <input type= "submit" value="掲示板に書き込む" class="button_size">
                </form>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div>
            </div>
            <br>
            <br>
            <p><SITE>管理人：小関一輝</SITE></p>
            <br>
            <br>
            <br>
            <br>
            <br>
        </center>
    </body>
</html>