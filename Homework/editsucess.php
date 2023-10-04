<?php
require 'conn.php';
$sql_update="UPDATE member SET m_id='$_POST[m_id]',m_name='$_POST[m_name]',m_lastname='$_POST[m_lastname]' ,m_email='$_POST[m_email]' ,m_telephone='$_POST[m_telephone]' WHERE m_id='$_POST[m_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/Homework/Member.php");
}
?>