<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");  
?>
    
<header>
     <div class="logo"><img src="4eachblog_logo.jpg"></div>
    <div class="nav">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>
<main>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <div class="content">
            <h2 class="formm">入力フォーム</h2>
            <form method="post" action="insert.php">
                <div class="box">
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="box2" size="30" name="handlename">
                </div>
                <br>
                <div class="box">
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="box2" size="30" name="title">
                </div>
                <br>
                <div class="box">
                    <label>コメント</label>
                    <br>
                    <textarea name="comments" class="box2" rows="5" cols="40"></textarea>
                </div>
                <br>
                <div class="buttun">
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
        </div>
            
        <?php
            while($row=$stmt->fetch()){
            echo "<div class='kijii'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
            }
        ?>
              
    </div>  
    <div class="right">
        <h2 class="kiji">人気の記事</h2> 
        <ul>
            <li>PHPおすすめの本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
        </ul>
        <h2 class="kiji">オススメリンク</h2>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>
        <h2 class="kiji">カテゴリ</h2>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
     </div>
</main> 
<footer>
    <div>copyright ©︎ internous | 4each blog the which provides A to Z about programming.</div>
</footer>
</body>
</html>