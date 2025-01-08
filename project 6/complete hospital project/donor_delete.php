<?php
include("connection.php");
$id = $_GET["id"];
$sql = "delete from donors where donor_id = $id";
$result = mysqli_query($conn , $sql);
header("location:donors.php");

?>