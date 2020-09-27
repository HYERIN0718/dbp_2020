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

if (isset($_GET['id'])) {
    $query = "SELECT * FROM bbh WHERE id={$_GET['id']}";
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
     <form action="process_update.php" method="POST">
       <input type="hidden" name="name" value="<?=$_GET['id']?>">
       <p><input type="text" name="title" placeholder="title"
         value="<?=$article['title']?>"></p>
      <p><textarea name="description"
        placeholder="description"><?=$article['description']?></textarea>
      <p><input type="submit"></p>
    </form>


 </body>
 </html>
