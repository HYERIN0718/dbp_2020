<?php
$link = mysqli_connect("localhost", "admin", "admin", "employees");
if(mysqli_connect_error()) {
    echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
    echo "<br>";
    echo mysqli_connect_error();
    exit();
}

$filtered_number = $_GET['number'];

$query = "
    SELECT dept_no, first_name, hire_date, from_date, to_date
    FROM dept_emp
    LEFT JOIN employees on dept_emp.emp_no=employees.emp_no
    ORDER BY dept_no DESC LIMIT ".$filtered_number."


";

$result = mysqli_query($link, $query);
$article = '';
while($row = mysqli_fetch_array($result)) {
    $article .= '<tr><td>';
    $article .= $row['dept_no'];
    $article .= '</td><td>';
    $article .= $row['first_name'];
    $article .= '</td><td>';
    $article .= $row['hire_date'];
    $article .= '</td><td>';
    $article .= $row['from_date'];
    $article .= '</td><td>';
    $article .= $row['to_date'];
    $article .= '</td></tr>';

}

mysqli_free_result($result);
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title> 부서 정보 </title>
    <style>
        body {
            font-family: Consolas, monospace;
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
        <h2><a href="index.php">직원 관리 시스템</a> | 부서 정보 </h2>
        <table>
            <tr>
                <th>dept_no</th>
                <th>first_name</th>
                <th>hire_date</th>
                <th>from_date</th>
                <th>to_date</th>
            </tr>
            <?= $article ?>
        </table>

        </table>
</body>
</html>
