<?php
 $link = mysqli_connect('localhost', 'root', '20172081', 'dbpw');
 $query = "SELECT * FROM bbh";
 $result = mysqli_query($link, $query);
 $list='';
 while ($row = mysqli_fetch_array($result)) {
     $list = $list."<li><a href=\"index.php?name={$row['name']}\">{$row['title']}</a></li>";
 }

 $article = array(
   'title' => 'Welcome',
   'description' => 'My Playlist is ...',
 );

 $update_link = '';
 $delete_link = '';

if (isset($_GET['name'])) {
    $query = "SELECT * FROM bbh WHERE name={$_GET['name']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
    'title' => $row['title'],
    'description' => $row['description'],
  );
    $update_link = '<a href="update.php?name='.$_GET['name'].'">update</a>';
    $delete_link = '
      <form action="process_delete.php" method="POST">
        <input type="hidden" name="name" value="'.$_GET['name'].'">
        <input type="submit" value="delete">
      </form>
    ';
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
   <a href="create.php"> create</a>
   <?=$update_link?>
   <?=$delete_link?>
   <h2> <?= $article['title'] ?> </h2>
    <?= $article['description'] ?>

 </body>
 </html>
