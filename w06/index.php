<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>

<body>
    <h1> 직원 관리 시스템 </h1>
    <form action="select.php" method="POST">
        (1) 직원 정보 조회:
        <input type="text" name="emp_no" placeholder="직원번호를 입력하세요">
        <input type="submit" value="Select"> <br>
    </form>
    <form action="name.php" method="POST">
        ㄴ> 직원 정보 조회:
        <input type="text" name="first_name" placeholder="직원이름을 입력하세요">
        <input type="submit" value="Select"> <br>
    </form>
    <form action="emp_insert.php" method="POST">

        (2) 신규 직원 등록:
        <input type="text" name="emp_no" placeholder="Insert 버튼을 눌러주세요">
        <input type="submit" value="Insert"> <br>
    </form>
    <form action="emp_update.php" method="POST">
        (3) 직원 정보 수정:
        <input type="text" name="emp_no" placeholder="직원번호를 입력하세요">
        <input type="submit" value="Update"> <br>
    </form>
    <form action="emp_delete.php" method="POST">
        (4) 직원 정보 삭제:
        <input type="text" name="emp_no" placeholder="직원번호를 입력하세요">
        <input type="submit" value="Delete"> <br>
    </form>

</body>

</html>
