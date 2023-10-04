<?php
require 'conn.php';
$a_id = $_POST['movie_id'];

$sql_delete = "DELETE FROM movie WHERE movie_id='$_POST[movie_id]' ";

$result = $conn->query($sql_delete);

if (!$result) {
    die("Error God Damn it : " . $conn->error);
} else {
    echo "Delete Success <br>";
    header("refresh: 1; url=http://localhost/Homework/Movie.php");
}
?>