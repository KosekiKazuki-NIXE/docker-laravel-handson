<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>カードパックを開けてみよう</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        </div>
        　　 <p><strong>  カードパックを買って開けてみよう</strong></p>
            <form method="POST" action="/card_open">
            　　　@csrf 
                <input type="submit"name="submit"value="カードパックを開ける"/>
            </form>
        </div>
    </body>
</html>