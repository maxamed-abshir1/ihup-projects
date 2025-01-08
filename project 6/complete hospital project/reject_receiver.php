<?php
include("connection.php");
$id = $_GET["id"];
$sql = "delete from recievers where id = $id";
$result = mysqli_query($conn,$sql);
header("location:reciever.php");
?>