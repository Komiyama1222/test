<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['index_handlename']."','".$_POST['index_title']."','".$_POST['index_comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>