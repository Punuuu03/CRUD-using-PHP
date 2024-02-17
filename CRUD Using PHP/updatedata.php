<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_description = $_POST['sdescription'];
$stu_price = $_POST['sprice'];

include 'config.php';

$sql = "UPDATE student SET sname = '{$stu_name}', sdescription = '{$stu_description}', sprice = '{$stu_price}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
