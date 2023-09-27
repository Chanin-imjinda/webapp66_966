<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styletop.css">
    <title>สั่งซื้อหนัง</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="mainmenu.php">HOME</a>
        <a href="mainsearch.php" >SEARCH</a>
        <a href="Member.php">MEMBER</a>
        <a href="Movie.php">MOVIE</a>
        <a href="history.php">HISTORY</a>
        <a href="">SHOP</a>
    </div> 

    <div class="main" style="margin-left : 100px; margin-right: 100px">
    <h1>SHOP</h1><br>
    <form action="checkoder.php" method="POST">
        <label for="m_name">ชื่อ:</label>
        <input type="text" id="m_name" name="m_name" required><br><br>

        <label for="m_lastname">นามสกุล:</label>
        <input type="text" id="m_lastname" name="m_lastname" required><br><br>

        <label for="m_email">อีเมล:</label>
        <input type="text" id="m_email" name="m_email" required><br><br>

        <label for="movie_name">หนังที่ต้องการสั่งซื้อ:</label>
        <select id="movie_name" name="movie_name" required>
            <option value="" disabled selected>โปรดเลือกหนัง</option>
            <!-- ใส่ตัวเลือกหนังจากฐานข้อมูล -->
            <?php
                $conn = new mysqli('localhost','root','','dvdshop');
                $conn->query("SET NAMES utf8");
                if($conn->connect_error){
                    die("Connection Fail God damn it ". $conn->$conn_error);
                }
                // ดึงข้อมูลหนังจากตาราง dvd
                $result = $conn->query("SELECT * FROM movie");

                // สร้างตัวเลือกใน dropdown menu
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['movie_name'] . "'>" . $row['movie_name'] . "</option>";
                }

                // ปิดการเชื่อมต่อฐานข้อมูล
                $conn->close();
            ?>
        </select><br><br>

        <input class="btn btn-success" type="submit" value="สั่งซื้อ">
    </form>
    </div>
</body>
</html>
