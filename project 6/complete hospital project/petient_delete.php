<?php
include("connection.php");
$id = $_GET["id"];
$sql = "delete from patient where id = $id";
$result = mysqli_query($conn , $sql);
header("location:paitentlists.php");


?>