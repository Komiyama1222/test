<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php
  mb_internal_encoding("utf8");
  $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
  $stmt=$pdo->query("select * from 4each_keijiban");
  ?>
</head>

<body>

  
  <img src="4eachblog_logo.jpg">
 <header>
  <ul>
   <li>トップ</li>
   <li>プロフィール</li>
   <li>4eachについて</li>
   <li>登録フォーム</li>
   <l>問い合わせ</l>
   <li>その他</li>
    
  </ul>
  </header>
 <main>
  <div class="main-container">
   <div class="left">
   <h1>プログラミングに役立つ掲示板</h1>
<form method="post" action="insert.php">
  <h2>入力ﾌｫｰﾑ</h2>
  <div>
    <label>ﾊﾝﾄﾞﾙﾈｰﾑ</label>
    <br>
    <input type="text" class="text" size="35" name="index_handlename">
  </div>

  <div>
    <label>ﾀｲﾄﾙ</label>
    <br>
    <input type="text" class="text" size="35" name="index_title">
  </div>

  <div>
    <label>ｺﾒﾝﾄ</label>
    <br>
    <textarea cols="70" rows="10" name="index_comments" > </textarea>
  </div>
  <div>
    <input type="submit" class="submit" value="投稿する">
  </div>
</form>

<?php 
while($row=$stmt->fetch()){
 echo" <div class='kizi'> ";
 echo"<h4>".$row['title']."</h4>";
 echo"<div class='contents'>";
 echo $row['comments'];
 echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
 echo"</div>";   

}
?>

<?php  
     
 while($row=$stmt->fetch()){
   echo"<div class='kiji'>";  
   echo"<h4>".$row ['title']."</h4>";
   echo"<div class='contents'>";
   echo $row['comments'];
   echo"<div class='handlename'>posted by".$row['handlename']."</div>";
   echo"</div>";
   echo"</div>";
}
?>  
  
</div>    
<div class="right">
        <h3>人気の記事</h3>
        <ul>
          <il>PHP　オススメ本</il><br>
          <il>PHP MyAdminの使い方</il><br>
          <il>今人気のエディタ　Top5</il><br>
          <il>HTMLの基礎</il><br>
        </ul>
        
        <h3>オススメリンク</h3>
        <ul>
          <il>インターノウス株式会社</il><br>
          <il>XAMPPのダウンロード</il><br>
          <il>Eclipseのダウンロード</il><br>
          <il>Bracketsのダウンロード</il><br>
        </ul>
        
        <h3>カテゴリ</h3>
        <ul>
          <il>HTML</il><br>
          <il>PHP</il><br>
          <il>MYSQL</il><br>
          <il>JavaScript</il><br>
        </ul>
   
</div>
   
</div>
</main>
   
<footer>
<div class="footer">
   copyright internous | 4each blog is the one which provides A to Z about programming.
    
</div>
</footer>
  
   
</body>
</html>
   
   
	 