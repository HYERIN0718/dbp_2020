<?php
 $link = mysqli_connect('localhost', 'root', '20172081', 'dbpw');
 $query = "SELECT * FROM author";
 $result = mysqli_query($link, $query);
 $author_info = '';


 while ($row = mysqli_fetch_array($result)) {
     $filtered = array(
     'id' => htmlspecialchars($row['id']),
     'name' => htmlspecialchars($row['name']),
     'profile' => htmlspecialchars($row['profile'])
   );
     $author_info .= '<tr>';
     $author_info .= '<td>'.$filtered['id'].'</td>';
     $author_info .= '<td>'.$filtered['name'].'</td>';
     $author_info .= '<td>'.$filtered['profile'].'</td>';
     $author_info .= '<td><a href="author.php?id='.$filtered['id'].'">update</a></td>';
     $author_info .= '
    <td>
      <form action="process_delete_author.php" method="post">
        <input type="hidden" name="id" value="'.$filtered['id'].'">
        <input type="submit" value="delete">
      </form>
    </td>
    ';
     $author_info .= '</tr>';
 };

 $escaped = array(
   'name' => '',
   'profile' => ''
 );

 $form_action = 'process_create_author.php';
 $label_submit = 'Create author';
 $form_id = '';

 if (isset($_GET['id'])) {
     $filtered_id = mysqli_real_escape_string(
         $link,
         $_GET['id']
     );
     settype($filtered_id, 'integer');
     $query = "SELECT * FROM author WHERE id = {$filtered_id}";
     $result = mysqli_query($link, $query);
     $row = mysqli_fetch_array($result);
     $escaped['name'] = htmlspecialchars($row['name']);
     $escaped['profile'] = htmlspecialchars($row['profile']);

     // id를 받아오면 바꾸기
     $form_action = 'process_update_author.php';
     $label_submit = 'Update author';
     $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
 }

 ?>


<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title> HYERIN0718 </title>
 </head>
