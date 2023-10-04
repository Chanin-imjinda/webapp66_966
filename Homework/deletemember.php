<?php
if(!isset($_GET['m_id'])){
    header("refresh: 0; url=http://localhost/Homework/Member.php");
}
require 'conn.php';
$sql = "SELECT * FROM member WHERE m_id='$_GET[m_id]'";
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
    <form class="container" id="form1" name="form1" method="post" action="deletemembersuccess.php">
        <h1>DELETE MEMBER</h1><br>
        <P>
            <label for="m_id">ID</label>
            <?php
                echo $_GET["m_id"];
            ?>
        </p>

        <p>
            <label for="m_name">ชื่อ</label>
            <input type="text" name="m_id" id="m_id" value="<?=$row['m_id'];?>" readonly>
            <input type="text" name="m_name" id="m_name" value="<?=$row['m_name'];?>" readonly/>
        </p>

        <p>
            <label for="m_lastname">นามสกุล</label>
            <input type="text" name="m_lastname" id="m_lastname" value="<?=$row['m_lastname'];?>"readonly/>
        </p>

        <p>
            <label for="m_email">อีเมลล์</label>
            <input type="text" name="m_email" id="m_email" value="<?=$row['m_email'];?>"readonly/>
        </p>

        <p>
            <label for="m_telephone">เบอร์โทร</label>
            <input type="text" name="m_telephone" id="m_telephone" value="<?=$row['m_telephone'];?>"readonly/>
        </p>
        <input type="submit" class="btn btn-success" value="ตกลง">
        <a class="btn btn-danger" href='Member.php'>ยกเลิก</a>
    </form>
</body>

</html>