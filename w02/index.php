<?php
 $link = mysqli_connect('localhost', 'root', '20172081', 'dbpw');
 $query = "SELECT * FROM bbh";
 $result = mysqli_query($link, $query);
 $list='';
 while($row = mysqli_fetch_array($result)) {
   $list = $list."<li><a href=\"index.php?name={$row['name']}\">{$row['title']}</a></li>";
 }

 $article = array(
   'title' => 'Welcome',
   'description' => 'My Playlist is ...',
 );

if( isset($_GET['name'])) {
  $query = "SELECT * FROM bbh WHERE name={$_GET['name']}";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title' => $row['title'],
    'description' => $row['description'],
  );
}

 ?>


<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title> HYERIN0718 </title>
 </head>
 <body>
   <h1><a href="index.php"> Playlist </a> </h1>
   <o1> <?= $list?>  </ol>
   <a href="create.php">플레이리스트 만들기</a>
   <h2> <?= $article['title'] ?> </h2>
    <?= $article['description'] ?>

 </body>
 </html>
