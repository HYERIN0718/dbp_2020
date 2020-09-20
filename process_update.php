<?php
$link = mysqli_connect("localhost", "root", "20172081", "dbpw");
$filtered = array(
  'name' => mysqli_real_escape_string($link, $_POST['name']),
  'title' => mysqli_real_escape_string($link, $_POST['title']),
  'description' => mysqli_real_escape_string($link, $_POST['description'])
);

$query = "
  UPDATE bbh
    SET
     title = '{$filtered['title']}',
     description = '{$filtered['description']}'
    WHERE
     name = '{$filtered['name']}'
";

$result = mysqli_multi_query($link, $query);
if ($result == false) {
    echo '수정하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysqli_error($link));
} else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
