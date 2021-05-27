<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>小関一輝のHP</title>
        <!--外部からCssを取得する場合-->
        <link rel="stylesheet" href = "/home.css">
        <!--内部からcssを取得する場合-->
    　　 <style> 

        Body {
            background-image:none;
            background:
        }
        .displays {
        width: 925px;
        display: inline-block; 
        background: #808000; 
        padding: 5psx 10px; 
        color: hsl(0, 0%, 100%);
        }

        .golden_display {
            width: 880px;
            display: inline-block;
            background: linear-gradient(gold, orange);;
            padding: 5px 20px;
            color: #000000;
        }

        .min_message {
            width: 700px;
            height:50px;
            display: inline-block;
            background: #ADD8E6; 
            padding: 5px 20px;
        }

        .mass {
            width: 900px;
            padding: 10px; 
            border: 2px solid #808000;
            background: #ffffff;
        }

        #golden_mass {
            width: 900px;
            padding: 10px; 
            border: 10px solid #000000;
            background: gold;
        }

        #fontBig {
            font-size:50px;
            font-family: Meiryo;
        }

        .span_wave {
            text-decoration: underline wavy red;
        }

        .right {
        margin: 0 0 0 auto;/* 右寄せにする方法 BOXセット*/
        }

        .box {                      /*左の余白をぐいーっと伸ばして右に押し付けている状態なので、右寄せにした要素を左側には移動できない*/
        height: 100px;
        width:  100px;
        background-color: #f8f8ff;
        }

        .wrapper {
        width: 1000px;
        margin: 0 auto;
        }

        .scroll {
            width:925px;         /*横*/
            height:200px;        /*縦*/
            overflow:scroll;    /*スクロールバー表示*/
            overflow-x:hidden;  /*スクロールバー横を消す */
        }
        .small_size {
            width:625px;/*横*/
            height:100px;/*縦*/
        }
        .more_small_size {
            width:320px;/*横*/
            height:100px;/*縦*/
        }
        .error_message{
            color:red;
        }

        </style>
    </head>
    <body>
        <br>
        <br>
        <div class = "right box">
        <!--カウンター--><table border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img src="http://www.rays-counter.com/d486_f6_030/60ab0558746f4/" alt="アクセスカウンター" width="100" height="50" border="0"></td></tr><tr><td align="center"><img src="http://www.rays-counter.com/images/counter_01.gif" border="0"><img src="http://www.rays-counter.com/images/counter_02.gif" border="0"><img src="http://www.rays-counter.com/images/counter_03.gif" border="0"><img src="http://www.rays-counter.com/images/counter_04.gif" border="0" ><img src="http://www.rays-counter.com/images/counter_05.gif" border="0"></td></tr></table><!--カウンター-->
        </div>
        <center>
            <h1>小関一輝のHP</h1>
            <h2>自己紹介</h2>
            <br>
            <br>
            <br>
            <br>
            <details id="mass">
                <summary>最近行っている趣味など</summary>
                <p>・動画編集</p>
                <p>・カメラでの風景撮影</p>
                <p>・アクアリウムの作成</p>
                <p>・ペン画を描いてグループを運営している</p>
            </details>
            <br>
            <p id="fontBig">年齢：{{$old}}才</p>
            <br>
            <div class="displays"><strong><h3>最近買った自転車</h3></strong>
            </div>
            <div class ="mass">
            　   <img src="Jeep.jpg">
                <p>Jeepの折り畳み自転車（オリーブ）</p>
            </div>

            <div class="displays"><strong><h3>好きなクラシック</h3></strong>
            </div>
            <div class ="mass">
                <p>剣の舞</p>
                <p>怒りの日</p>
                <p>トルコ行進曲</p>
            </div>
            <div class="displays"><strong><h3>作ったことのあるプラモデル（船舶）</h3></strong>
            </div>
            <div class ="mass">
                <p>大和</p>
                <p>アリゾナ</p>
                <p>金剛</p>
            </div>
            <div class="displays"><strong><h3>好きな食べ物</h3></strong>
            </div>
            <div class ="mass">
                <p>1.オムライス</p>
                <p>2.寿司</p>
                <p>3.たこ焼き</p>
            </div>

            <div class="displays">
                <ul>
                    <li>写真をとる</li>
                    <li>ガサガサ</li>
                    <li>旅行</li>
                    <li>釣り</li>
                </ul>
            </div>

            <br>
            <p><strong>上の物が主に好きだけど・・・</strong></p>
            <p>実は・・・<span class = "span_wave"><small>万年筆で絵を描くのが好き</small></span></p>
            <br>
            <div id="golden_mass">
                <img src="art1.jpg" alt="鯨の写真" width="300" height="200">
                <img src="art2.jpg" alt="ハウル動く城の写真" width="300" height="200">
                <img src="art3.jpg" alt="個人作品の写真" width="300" height="200">
                <br>
                <a href="{{route('pen')}}">万年筆で描いた絵を展示するホームページ</a>
                <br>
            </div>
            <br>
            <br>
            <div class="golden_display">
                <h2>ちなみに、あなたの好きな食べ物はなんですか</h2>
            </div>
            <div class ="mass">
            <select name="likefood" id="food-select">
                <option>オムライス</option>
                <option>寿司</option>
                <option>たこ焼き</option>
            </select>
            </div>
            <br>
            <br>
            <p>お祭りの屋台で出ている<span class = "span_wave">食べ物が一番好き</span></p>
            <br>
            <span><img src="siyasou-ani02.gif" alt="ようこそ" width="300" height="200"></span>
            <p><small>夏はいいですよね</small></p>
            <br>
            <br>
            <br>
            <div class ="displays">
            <form method="post" action="{{ route('homes') }}">
                <label>年齢</label>
                <input type="text" name="years">
                <label>お名前</label>
                <input type="text" name="name">
                <br>
                <label>パスワード(※メッセージ削除・変更の際に使用します)</label>
                <input type="integer" name="passwold">
                <br>
                <br>
                <label>お問い合わせ内容</label>
                <textarea type="text" name="message"></textarea>
                <br>
                <br>
                <dd><button type="sumbit">書き込む</button></dd>
                 @csrf
            </form>
            <p><strong>-----ログ:今までに{{$count}}件の書き込みがありました-----</strong></p>
            </div>
            <div class ="mass">
                <div class ="scroll more_min_message">
                    @foreach($products as $test)
                    <div class ="min_message ">
                            <form  action = "{{route('change_in')}}">
                                ID:{{$test->id}} {{$test->years}}歳の{{$test->name}}さんが「{{$test->message}}」と書き込みました
                                <input type="hidden" name="chang_id" value="{{$test->id}}">
                                <input type="hidden" name="page" value="{{$products->currentPage()}}">
                                <input type="submit" value="変更を加える">
                            </form>
                    </div>
                    @endforeach
                    <br>
                </div>
                <div class ="small_size">
                    <div class ="small_size">
                        <form method="post" action="{{ route('delete') }}">
                            <p>削除したいメッセージのidと対応したパスワードを入力してください。</p>
                            <label>id</label>
                            <input type="integer" name="delete_id">

                            <label>passwold</label>
                            <input type="integer" name="delete_passwold">
                            <dd><button type="sumbit">削除する</button></dd>
                            <p class="error_message">{{$error_message}}</p>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="small_size">
                <p>現在のページ番号は   {{$products->currentPage()}} です</p>
                {{$products->links()}}
            </div>
            <p><SITE>作成：小関一輝</SITE></p>
            <p><strong>GIF素材提供：<span><a href="http://katus-gifani.sakura.ne.jp/sozai01.html">カツのGIFアニメ</a></span>様</strong></p>
            <p><strong>ページ上部の来場者数カウンター素材提供：<span><a href="http://www.rays-counter.com/">無料アクセスカウンター</a></span>様</strong></p>
        </center>
    </body>
</html>