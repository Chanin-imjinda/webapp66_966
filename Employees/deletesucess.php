<?php
require 'conn.php';
$sql ="DELETE FROM employee WHERE emp_id='$_POST[emp_id]'";
$result= $conn->query($sql);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {
echo "Delete sucess <br>";
header("refresh: 1; url=http://localhost/Employees/employees.php");
}
?>
