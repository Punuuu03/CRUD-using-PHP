<?php

 $stu_name = $_POST['sname'];
 $stu_description = $_POST['sdescription'];
 $stu_price = $_POST['sprice'];

$conn = mysqli_connect("localhost","root","","num") or die("Connection Failed");

$sql = "INSERT INTO student(sname,sdescription,sprice) VALUES ('{$stu_name}','{$stu_description}','{$stu_price}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>


