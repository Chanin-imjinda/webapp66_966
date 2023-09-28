<?php
    require 'conn.php';
    $sql = "SELECT * FROM employee";

    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
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
    <title>Member</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="mainmenu.php">HOME</a>
        <a href="">EMPLOYEE</a>
    </div>
    <div class="main" style="margin-left : 100px; margin-right: 100px">
        <h1>EMPLOYEE</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-7">ชื่อ</th>
                    <th scope="col-7">เบอร์โทร</th>
                    <th scope="col-7">อีเมล</th>
                    <th scope="col-7">รหัสผ่าน</th>
                    <th scope="col-7">ที่อยู่</th>
                    <th scope="col-7">Edit</th>
                    <th scope="col-7">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["emp_id"]."</td>"."<td>".$row["emp_name"]."<td>".$row["emp_mobile"]."</td>"."<td>".$row["emp_email"]."</td>"."<td>".$row["emp_pass"]."</td>"."<td>".$row["emp_add"]."</td>"."<td>"."<a class='btn btn-warning' href='edit.php?emp_id=".$row["emp_id"]."'>Edit</a>"."</td>"."<td>"."<a class='btn btn-warning' href='delete.php?'>delete</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>

            </tbody>
        </table>
    <a class="btn btn-success" href='insert.php'>Insert</a>
    </div>
</body>
</html>