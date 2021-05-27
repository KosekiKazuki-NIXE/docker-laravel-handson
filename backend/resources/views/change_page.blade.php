<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>小関一輝のHP</title>
    </head>
    <body>
        <center>
            <form method="POST" action="{{route('change_out')}}">
                <input type="hidden" name="_method" value="PUT">

                <p><strong>ID:{{$id}} {{$years}}歳{{$name}}さんの「{{$message}}」との書き込みについての変更します。</strong></p>
                <br>
                <label>書き込んだ際のパスワードを記入してください</label>
                <input type="text" name="passwold">
                <br>
                <p>※もし,書き込んだ際のパスワードと下記で記入したパスワードがあってない場合は、そのまま変更は保存されません</p>
                <br>
                <p><strong>変更したい項目があれば、下記に記入し、変更ボタンを押してください。</strong></p>
                <br>
                <br>
                <label>年齢</label>
                <input type="text" name="years">
                <br>
                <label>お名前</label>
                <input type="text" name="name">
                <br>
                <label>お問い合わせ内容</label>
                <textarea type="text" name="message"></textarea>
                <br>
                <input type="hidden" name="id" value="{{$id}}">
                <input type="hidden" name="page" value="{{$page}}">
                <dd><button type="sumbit">変更する</button></dd>
                 @csrf
            </form>
            <div>
                <p><SITE>作成：小関一輝</SITE></p>
                GIF素材提供：<span><a href="http://katus-gifani.sakura.ne.jp/sozai01.html">カツのGIFアニメ</a></span>様
            </div>
        </center>
    </body>
</html>