<?php
$link = mysqli_connect("localhost", "admin", "admin", "employees");
$filtered_id = mysqli_real_escape_string($link, $_POST['first_name']);
$query = "
    SELECT * 
    FROM employees
    WHERE first_name='{$filtered_id}'
";
$result = mysqli_query($link, $query);
//print_r($result);

//print_r($row);
$emp_info = '';

while($row = mysqli_fetch_array($result)){
    $emp_info .= '<tr>';
    $emp_info .= '<td>'.$row['emp_no'].'</td>';
    $emp_info .= '<td>'.$row['birth_date'].'</td>';
    $emp_info .= '<td>'.$row['first_name'].'</td>';
    $emp_info .= '<td>'.$row['last_name'].'</td>';
    $emp_info .= '<td>'.$row['gender'].'</td>';
    $emp_info .= '<td>'.$row['hire_date'].'</td>';
    $emp_info .= '</tr>';

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>

<body>
    <h2> <a href="index.php">직원 관리 시스템 | 직원 정보 조회</a> </h2>
    <form action="emp_select.php" method="POST">
        10명씩 끊어서 보기:
        <input type="text" name="first_name" placeholder="first_name">
        <input type="submit" value="검색"> <br>
    </form> <br>
    <table border="1">
        <tr>
            <th> emp_no </th>
            <th> birth_name </th>
            <th> first_name </th>
            <th> last_name </th>
            <th> gender </th>
            <th> hire_date </th>
        </tr>
        <?=$emp_info?>

    </table>
</body>

</html>
