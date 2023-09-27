<?php
require 'conn.php';
$sql_update="INSERT INTO member(m_id,m_name,m_lastname,m_email,m_telephone) VALUES ('$_POST[m_id]' ,'$_POST[m_name]' ,'$_POST[m_lastname]' ,'$_POST[m_email]' ,'$_POST[m_telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/Homework/mainmenu.php");
}

?>