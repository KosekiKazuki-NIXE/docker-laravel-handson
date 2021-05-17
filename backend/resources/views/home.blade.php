<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>小関一輝のHP</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body bgcolor="#e6e6fa">
        <h1>小関一輝のHP</h1>
        <h2>自己紹介</h2>
        <p>年齢：{{$old}}才</p>
        <br>
        <div style="display: inline-block; background: #808000; padding: 5px 10px; color: #ffffff;"><strong><h3>最近買った自転車</h3></strong>
        </div>
        <div style="padding: 10px; border: 2px solid #808000;">
        　   <img src="Jeep.jpg">
            <p>Jeepの折り畳み自転車（オリーブ）</p>
        </div>

        <div style="display: inline-block; background: #808000; padding: 5px 10px; color: #ffffff;"><strong><h3>好きなクラシック</h3></strong>
        </div>
        <div style="padding: 10px; border: 2px solid #808000;">
            <ul>
                <li>剣の舞</li>
                <li>怒りの日</li>
                <li>トルコ行進曲</li>
            </ul>
        </div>
        <div style="display: inline-block; background: #808000; padding: 5px 10px; color: #ffffff;"><strong><h3>作ったことのあるプラモデル（船舶）</h3></strong>
        </div>
        <div style="padding: 10px; border: 2px solid #808000;">
            <ul>
                <li>大和</li>
                <li>アリゾナ</li>
                <li>金剛</li>
            </ul>
        </div>
        <div style="display: inline-block; background: #808000; padding: 5px 10px; color: #ffffff;"><strong><h3>好きな食べ物</h3></strong>
        </div>
        <div style="padding: 10px; border: 2px solid #808000;">
            <ol>
                <li>オムライス</li>
                <li>寿司</li>
                <li>たこ焼き</li>
            </ol>
        </div>

        <br>
        <p><strong>上の物が主に好きだけど・・・</strong></p>
        実は・・・<span><small>万年筆で絵を描くのが好き</small></span>
        <br>
        <img src="art1.jpg" alt="鯨の写真" width="300" height="200">
        <img src="art2.jpg" alt="ハウル動く城の写真" width="300" height="200">
        <img src="art3.jpg" alt="個人作品の写真" width="300" height="200">
        <br>
        <a href="{{route('pen')}}">万年筆で描いた絵を展示するホームページ</a>
        <br>
        <br>
        <br>
        <div style="background: #f0e68c; border: #f0e68c solid 2px; font-size: 100%; padding: 20px;"></div>
        <h2>ちなみに、あなたの好きな食べ物はなんですか</h2>
            <select name="likefood" id="food-select">
                <option>オムライス</option>
                <option>寿司</option>
                <option>たこ焼き</option>
            </select>
            <br>
            <br>
        </div>
        <span><img src="siyasou-ani02.gif" alt="ようこそ" width="300" height="200"></span>
        <p><small>夏はいいですよね</small></p>
        <br>
        <div>
            <p><SITE>作成：小関一輝</SITE></p>
            GIF素材提供：<span><a href="http://katus-gifani.sakura.ne.jp/sozai01.html">カツのGIFアニメ</a></span>様
        </div>
    </body>
</html>