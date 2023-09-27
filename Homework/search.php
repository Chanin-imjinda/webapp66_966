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
    <title>main</title>
</head>

<body style="background-image : url(); background-size: cover">

    <div class="topnav">
        <a class="active" href="mainmenu.php">HOME</a>
        <a href="" >SEARCH</a>
        <a href="Member.php">MEMBER</a>
        <a href="Movie.php">MOVIE</a>
        <a href="history.php">HISTORY</a>
        <a href="buy.php">SHOP</a>
    </div>
    
    <div class="main" style="margin-left : 100px; margin-right: 100px">
    <h1>SEARCH</h1><br>

        <?php
        $actor_name = $_GET['actor_name'];
        $actor_surname = $_GET['actor_lastname'];
        // สร้างการเชื่อมต่อกับฐานข้อมูล
        $conn = new mysqli('localhost','root','','dvdshop');
        $conn->query("SET NAMES utf8");
        // ตรวจสอบการเชื่อมต่อ
        if($conn->connect_error){
            die("Connection Fail God damn it ". $conn->$conn_error);
        }

        $sql = "SELECT actor.actor_name, actor.actor_lastname, movie.movie_name
        FROM actor 
        INNER JOIN movie
        ON actor.actor_id  = movie_id
        WHERE actor.actor_name = '$actor_name' AND
            actor.actor_lastname = '$actor_surname'";
    

    
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
        // แสดงข้อมูล
            while ($row = $result->fetch_assoc()) {
                echo "<h3>นักแสดง : " . $row["actor_name"] . " ".$row["actor_lastname"]."<br></h3>";
                echo "<h3>หนังที่แสดง : " . $row["movie_name"] . "<br></h3>";
            }
        } else {
            echo "ไม่พบข้อมูล";
        }

        // ปิดการเชื่อมต่อฐานข้อมูล
        $conn->close();

        ?>
    </div>
</body>
</html>