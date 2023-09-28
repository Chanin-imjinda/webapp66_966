<?php
require 'conn.php';
$sql_update="UPDATE employee SET emp_id='$_POST[emp_id]',emp_name='$_POST[emp_name]',emp_mobile='$_POST[emp_mobile]',emp_email='$_POST[emp_email]',emp_pass='$_POST[emp_pass]',emp_add='$_POST[emp_add]' WHERE emp_id='$_POST[emp_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/Employees/employees.php");
}
?>