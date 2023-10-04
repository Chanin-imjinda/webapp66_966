<?php
require 'conn.php';
$sql_update="UPDATE movie SET movie_id='$_POST[movie_id]',movie_name='$_POST[movie_name]',movie_time='$_POST[movie_time]' ,movie_category='$_POST[movie_category]' ,movie_detail='$_POST[movie_detail]' WHERE movie_id='$_POST[movie_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/Homework/Movie.php");
}
?>