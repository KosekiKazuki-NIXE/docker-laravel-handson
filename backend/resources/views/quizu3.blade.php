<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>雑学クイズ</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        <center>
        <h1>〜雑学クイズQ&A〜</h1> 
        <p>問題は全てで四問、全問正解できるかな？</p> 
            <form method="get" action="/quizu/3_answer">
                @csrf
                <div> 
                    <p>第三問</p>
                    <img src = "/Thinking.png" alt="考える人" width="200" height="400">
                    <br>
                    <br>
                    <div>
                        <p>ロダンの「考える人」という上の写真の作品の人物は何を考えているのでしょう？次の選択から選びなさい。</p>
                        <select name="q_3">
                            <option value="0">人生とは</option>
                            <option value="1">平和とは</option>
                            <option value="2">家族とは</option>
                            <option value="3">特には考えていない</option>
                            <option value="4">今日の晩ご飯</option> 
                            <option value="5">「寒いなあ・・・」</option>         
                        </select>
                    </div>
                    <input type="hidden" name="quizu1_a" value="{{$quizu1_a}}">
                    <input type="hidden" name="quizu2_a" value="{{$quizu2_a}}">
                    <br>
                </div>
                <input type="submit"name="submit"value="結果へ"/>
            </form>
        <center>
    </body>
</html>