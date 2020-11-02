<?php
    $link = mysqli_connect("localhost", "root", "20172081", "world");
    $filtered_id = $_POST['good'];
    $query = "
          SELECT continent, Name, IndepYear
          FROM country
          WHERE Name= '{$filtered_id}'
      ";
    $result = mysqli_query($link, $query);

      // print_r($query);

    $city_info = '';
      while ($row = mysqli_fetch_array($result)) {
          $city_info .= '<tr><td>';
          $city_info .= $row['Continent'];
          $city_info .= '</td><td>';
          $city_info .= $row['Name'];
          $city_info .= '</td><td>';
          $city_info .= $row['IndepYear'];
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
          width: 100%
            padding: 10px;
            border-bottom: 1px solid #dadada;
        }

    </style>
</head>

<body>
  <h2> 독립 연도 검색하기 </h2>
  <h4><a href="country.php">메인메뉴 </h2></a>
      <table >
          <tr>
            <th> Continent </th>
            <th> Name </th>
            <th> IndepYear </th>
          </tr>
          <?= $city_info ?>
      </table>

</body>

</html>
