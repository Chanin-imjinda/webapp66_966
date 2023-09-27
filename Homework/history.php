<?php
    require 'conn.php';
    $sql = "SELECT * FROM shop_member";
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
    <title>main</title>
</head>

<body>
    <div class="topnav">
        <a class="active" href="mainmenu.php">HOME</a>
        <a href="mainsearch.php" >SEARCH</a>
        <a href="Member.php">MEMBER</a>
        <a href="Movie.php">MOVIE</a>
        <a href="">HISTORY</a>
        <a href="buy.php">SHOP</a>
    </div> 
    
    <div class="main" style="margin-left : 100px; margin-right: 100px">
        <h1>HISTORY</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">อีเมลล์</th>
                    <th scope="col-4">ชื่อหนัง</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["s_name"]."</td>"."<td>".$row["s_lastname"]." ".$row["s_email"]."</td>"."<td>".$row["s_movie_name"]."</td>"."<td>";
                            echo "</tr>";    
                        }
                    }else {
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>