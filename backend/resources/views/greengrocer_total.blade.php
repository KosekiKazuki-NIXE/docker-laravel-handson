<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>八百屋さん</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <h1>八百屋さんで買った合計金額は</h1> 
        <p>大根が{{$daikon_num}}個で、{{$daikon_total}}円。　</p>
        <p>トマトが{{$tomato_num}}個で、{{$tomato_total}}円。</p>
        <p>ゴーヤが{{$bitter_gourd_num}}個で、{{$bitter_gourd_total}}円。</p>
        <p>りんごが{{$apple_num}}個で、{{$apple_total}}円。</p>
        <p>バナナが{{$banana_num}}個で、{{$banana_total}}円。</p>
        <p>まとめて{{$total}}円となり、税込み{{$totals}}円になります。</p>

        <a href = "greengrocer">買い直す</a>
    </body>
</html>