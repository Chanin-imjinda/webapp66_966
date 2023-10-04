<?php
require 'conn.php';
$a_id = $_POST['m_id'];

$sql_delete = "DELETE FROM member WHERE m_id='$_POST[m_id]' ";

$result = $conn->query($sql_delete);

if (!$result) {
    die("Error God Damn it : " . $conn->error);
} else {
    echo "Delete Success <br>";
    header("refresh: 1; url=http://localhost/Homework/Member.php");
}
?>