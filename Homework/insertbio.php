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
    <form class="container" id="form1" name="form1" method="post" action="insertbiosuccess.php">
        <h1>INSERT MEMBER</h1><br>
        <p>
            <label for="m_id">ID</label>
            <input type="number" name="m_id" id="m_id">
        </p>
    
        <p>
            <label for="m_name">ชื่อ</label>
            <input type="text" name="m_name" id="m_name">
        </p>

        <p>
            <label for="m_lastname">นามสกุล</label>
            <input type="text" name="m_lastname" id="m_lastname">
        </p>

        <p>
            <label for="m_email">อีเมล</label>
            <input type="email" name="m_email" id="m_email">
        </p>

        <p>
            <label for="m_telephone">เบอร์โทร</label>
            <input type="text" name="m_telephone" id="m_telephone">
        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>ยกเลิก</a>
    </form>
</body>

</html>