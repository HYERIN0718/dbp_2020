<?php
 $link = mysqli_connect('localhost', 'root', '20172081', 'dbpw');
 $query = "SELECT * FROM bbh";
 $result = mysqli_query($link, $query);
 $list='';
 while ($row = mysqli_fetch_array($result)) {
     $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
 }

 $article = array(
   'title' => 'Welcome',
   'description' => 'My Playlist is ...',
 );

 $update_link = '';
 $author = '';

 if (isset($_GET['id'])) {
     $filtered_id = mysqli_real_escape_string(
         $link,
         $_GET['id']
     );
     $query = "SELECT * FROM bbh LEFT JOIN author ON
     bbh.author_id = author.id WHERE
     bbh.id={$filtered_id}";
     $result = mysqli_query($link, $query);
     $row = mysqli_fetch_array($result);
     $article['title'] =
     htmlspecialchars($row['title']);
     $article['description'] =
     htmlspecialchars($row['description']);
     $article['name'] =
     htmlspecialchars($row['name']);

     $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';

     $author = "<p> by {$article['name']}</p>";
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
   <a href="author.php">author</a>
   <o1> <?= $list?>  </ol>
   <a href="create.php"> create</a>
   <?=$update_link?>
   <?=$delete_link?>
   <h2> <?= $article['title'] ?> </h2>
    <?= $article['description'] ?>
    <?= $author ?>

 </body>
 </html>
