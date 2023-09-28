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
        <a class="active" href="">HOME</a>
        <a href="employees.php">EMPLOYEE</a>
    </div> 

    <form class="container" id="form1" name="form1" method="post" action="deletesucess.php">
        <h1>DELETE</h1><br>
        <P>
            <label for="emp_id">ID</label>
            <input type="text" name="emp_id" id="emp_id"/>
        </p>

        <p>
            <label for="emp_name">ชื่อ</label>
            <input type="text" name="emp_name" id="emp_name">
        </p>

        <p>
            <label for="emp_mobile">เบอร์โทร</label>
            <input type="text" name="emp_mobile" id="emp_mobile">
        </p>

        <p>
            <label for="emp_email">อีเมล</label>
            <input type="text" name="emp_email" id="emp_email">
        </p>

        <p>
            <label for="emp_pass">รหัสผ่าน</label>
            <input type="password" name="emp_pass" id="emp_pass">
        </p>

        <p>
            <label for="emp_add">ที่อยู่</label>
            <input  type="text" name="emp_add" id="emp_add">
        </p>
        <input type="submit" class="btn btn-success" value="DELETE">
        <a class="btn btn-success" href='Movie.php'>Home</a>
    </form>
</body>
</html>