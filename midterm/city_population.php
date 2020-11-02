<?php
    $link = mysqli_connect("localhost", "root", "20172081", "world");
$filtered_id = $_POST['Name'];
    $query = "
        SELECT Name, Population
        FROM city
        WHERE Name='{$filtered_id}'
    ";
    $result = mysqli_query($link, $query);
    // $row = mysqli_fetch_array($result);

// $filtered_id = '';
    //print_r($row);
    $city_info = '';
      while ($row = mysqli_fetch_array($result)) {
          $city_info .= '<tr><td>';
          $city_info .= $row['Name'];
          $city_info .= '</td><td>';
          $city_info .= $row['Population'];

          $city_info .= '</td></tr>';
      }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 나라별 데이터 분석 </title>
    <style>
       body {
           font-family: Courier New , Lucida Console ;
           font-family: 12px;
       }
       table {
           width: 100%;
       }
       th, td{
           padding: 10px;
           border-bottom: 1px solid #dadada;
       }

   </style>


</head>

<body>
  <h2> 도시의 인구 </h2>
  <h4><a href="country.php">메인메뉴 </h2></a>
  <table >
          <tr>
              <th> Name </th>
              <th> Population </th>
          </tr>
          <?=$city_info?>

      </table>


</body>

</html>
