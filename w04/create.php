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

$updated_link = '';

if (isset($_GET['id'])) {
    $query = "SELECT * FROM bbh WHERE name={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
    'title' => $row['title'],
    'description' => $row['description'],
  );

    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
}

$query = "SELECT * FROM author";
$result = mysqli_query($link, $query);
$select_form = '<select name="author_id">';
while ($row = mysqli_fetch_array($result)) {
    $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}

$select_form .= '</select>';
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
   <form action="process_create.php" method="post">
     <p><input type="text" name="title" placeholder="title"></p>
     <p><textarea name="description" placeholder="description"></textarea></p>
     <?= $select_form ?>
     <p><input type="submit"></p>
   </form>


    </body>
    </html>
