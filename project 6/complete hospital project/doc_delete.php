<?php
include("connection.php");
$id = $_GET["id"];
$sql = "delete from doctors where doctor_id = $id";
$result = mysqli_query($conn , $sql);
header("location:doctors.php");
 

?>