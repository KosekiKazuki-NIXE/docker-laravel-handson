<!DOCTYPE html> <!--これは、このファイルはHTML文章です、と宣言する役割をしています。-->
<html lang="ja">
    <head>
        <meta http-equiv="content-type" charset="UTF-8">
        <title>サイコロを投げよう！！</title>
    　　   <style> body{border: solid 3px #000}</style>
    </head>
    <body>
        </div>
        　　 <p><strong>サイコロを振って数を出そう！！</strong></p>
            <form method="POST" action="/daice2">
            　　　@csrf 
                <input type="submit"name="submit"value="サイコロを振る"/>
            </form>
        </div>
    </body>
</html>