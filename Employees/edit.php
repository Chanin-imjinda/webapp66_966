<?php
if(!isset($_GET['emp_id'])){
    header("refresh: 0; url=http://localhost/Employees/employees.php");
}
require 'conn.php';
$sql = "SELECT * FROM employee WHERE emp_id='$_GET[emp_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styletop.css">
    <title>Edit</title>
</head>

<body>
    <div class="topnav">
        <a class="active" href="mainmenu.php">HOME</a>
        <a href="employees.php">EMPLOYEES</a>
    </div> 
    <form class="container" id="form1" name="form1" method="post" action="editsucess.php">
        <h1>EDIT EMPLOEE</h1><br>
        <P>
            <label for="emp_id">ID</label>
            <?php
                echo $_GET["emp_id"];
            ?>

        </p>

        <p>

            <label for="emp_name">ชื่อ</label>
            <input type="text" name="emp_id" id="emp_id" value="<?=$row['emp_id'];?>" hidden>
            <input type="text" name="emp_name" id="emp_name" value="<?=$row['emp_name'];?>" />

        </p>

        <p>

            <label for="emp_mobile">เบอร์โทร</label>

            <input type="number" name="emp_mobile" id="emp_mobile" value="<?=$row['emp_mobile'];?>" />

        </p>

        <p>

            <label for="emp_email">อีเมลล์</label>

            <input type="text" name="emp_email" id="emp_email" value="<?=$row['emp_email'];?>" />

        </p>

        <p>
            <label for="emp_pass">รหัสผ่าน</label>
            <input type="password" name="emp_pass" id="emp_pass" value="<?=$row['emp_pass'];?>" />
        </p>

        <p>
            <label for="emp_add">ที่อยู่</label>
            <input type="text" name="emp_add" id="emp_add" value="<?=$row['emp_add'];?>" />
        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='main.php'>Home</a>
    </form>
</body>

</html>