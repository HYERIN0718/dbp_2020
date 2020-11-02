<?php
$link = mysqli_connect("localhost", "root", "20172081", "world");

$query = "SELECT * FROM city ORDER BY ID ASC limit 100";
$result = mysqli_query($link, $query);
//print_r($result);
$row = mysqli_fetch_array($result);
//print_r($row);
$city_info = '';

while ($row = mysqli_fetch_array($result)) {
    $city_info .= '<tr>';
    $city_info .= '<td>'.$row['ID'].'</td>';
    $city_info .= '<td>'.$row['Name'].'</td>';
    $city_info .= '<td>'.$row['CountryCode'].'</td>';
    $city_info .= '<td>'.$row['District'].'</td>';
    $city_info .= '<td>'.$row['Population'].'</td>';
    $city_info .= '</tr>';
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 나라별 데이터 분석 </title>
</head>

<body>
    <h2> <a href="country.php">도시 정보 </a> </h2>

    <table border="1">
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> CountryCode </th>
            <th> District </th>
            <th> Population </th>

        </tr>
        <?=$city_info?>

    </table>
</body>

</html>
