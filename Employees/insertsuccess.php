<?php
require 'conn.php';
$sql_update="INSERT INTO employee(emp_id,emp_name,emp_mobile,emp_email,emp_pass,emp_add) VALUES ('$_POST[emp_id]','$_POST[emp_name]','$_POST[emp_mobile]','$_POST[emp_email]','$_POST[emp_pass]','$_POST[emp_add]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/Employees/employees.php");
}

?>