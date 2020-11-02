<?php
$link = mysqli_connect("localhost", "root", "20172081", "world");
$filtered_id = $_POST['CountryCode'];
$query = "
      SELECT Name, CountryCode, District
      FROM city
      WHERE CountryCode= '{$filtered_id}'
  ";
$result = mysqli_query($link, $query);

  // print_r($query);

$city_info = '';
  while ($row = mysqli_fetch_array($result)) {
      $city_info .= '<tr><td>';
      $city_info .= $row['Name'];
      $city_info .= '</td><td>';
      $city_info .= $row['CountryCode'];
      $city_info .= '</td><td>';
      $city_info .= $row['District'];
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
  <h2> 도시와 나라 </h2>
  <h4><a href="country.php">메인메뉴 </h2></a>

<center>

    <table >
        <tr>

          <th> Name </th>
          <th> CountryCode </th>
          <th> District </th>


        </tr>
        <?= $city_info ?>
    </table>
  </center>

</body>

</html>
