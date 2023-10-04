<?php
require 'conn.php';
$sql_update="INSERT INTO movie(movie_id,movie_name,movie_time,movie_category,movie_detail) VALUES ('$_POST[movie_id]','$_POST[movie_name]','$_POST[movie_time]','$_POST[movie_category]','$_POST[movie_detail]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/Homework/Movie.php");
}

?>