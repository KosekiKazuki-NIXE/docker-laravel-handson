<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>小関一輝のHP</title>
    </head>
    <body>
        <center>
        
            <form action="{{route('home')}}">

                <p><strong>{{$result_message}}</strong></p>
                <input type="hidden" name="page" value="{{$page}}">
                <dd><button type="sumbit">TOPページに戻る</button></dd>
                 @csrf
            </form>
            <div>
                <p><SITE>作成：小関一輝</SITE></p>
                GIF素材提供：<span><a href="http://katus-gifani.sakura.ne.jp/sozai01.html">カツのGIFアニメ</a></span>様
            </div>
        </center>
    </body>
</html>