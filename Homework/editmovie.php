<?php
if(!isset($_GET['movie_id'])){
    header("refresh: 0; url=http://localhost/Homework/Movie.php");
}
require 'conn.php';
$sql = "SELECT * FROM movie WHERE movie_id='$_GET[movie_id]'";
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
        <a href="mainsearch.php" >SEARCH</a>
        <a href="Member.php">MEMBER</a>
        <a href="Movie.php">MOVIE</a>
        <a href="history.php">HISTORY</a>
        <a href="buy.php">SHOP</a>
    </div> 
    <br>
    <form class="container" id="form1" name="form1" method="post" action="editmoviesucess.php">
        <h1>EDIT MOVIE</h1><br>
        <P>
            <label for="movie_id">ID</label>
            <?php
                echo $_GET["movie_id"];
            ?>
        </p>

        <p>
            <label for="movie_name">ชื่อหนัง</label>
            <input type="text" name="movie_id" id="movie_id" value="<?=$row['movie_id'];?>" hidden>
            <input type="text" name="movie_name" id="movie_name" value="<?=$row['movie_name'];?>" />
        </p>

        <p>
            <label for="movie_time">เวลา</label>
            <input type="text" name="movie_time" id="movie_time" value="<?=$row['movie_time'];?>" />
        </p>

        <p>
            <label for="movie_category">แนว</label>
            <input type="text" name="movie_category" id="movie_category" value="<?=$row['movie_category'];?>" />
        </p>

        <p>
            <label for="movie_detail">รายระเอียด</label>
            <input type="textarea" name="movie_detail" id="movie_detail" value="<?=$row['movie_detail'];?>" />
        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='Movie.php'>Home</a>
    </form>
</body>
</html>