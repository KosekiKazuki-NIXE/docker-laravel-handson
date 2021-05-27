<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>小関一輝のHP</title>
    </head>
    <body>
        <center>
            <h2>{{$years}}才</h2>
            <h1>{{$name}}さんが書いた内容</h1>
            <h2>{{$message}}</h2>
            <form method="POST" action="{{ route('homecount') }}"> 
            <input type="hidden" name = "_method" value="PUT">
            @csrf
                <input type="hidden" name = "page" value="{{$page}}">
                <input type="hidden" name = "message" value="{{$message}}">
                <input type="hidden" name = "name" value="{{$name}}">
                <input type="hidden" name = "years" value="{{$years}}">
                <input type="hidden" name = "passwold" value="{{$passwold}}">
                <dd><button type="sumbit">合っていたらボタンを押してください。</button></dd>
            </form>
            <div>
                <p><SITE>作成：小関一輝</SITE></p>
                GIF素材提供：<span><a href="http://katus-gifani.sakura.ne.jp/sozai01.html">カツのGIFアニメ</a></span>様
            </div>
        </center>
    </body>
</html>