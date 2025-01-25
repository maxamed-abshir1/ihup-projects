<?php

include("connection.php");
$id = $_GET["id"];

$delete = "DELETE from asset_reg where asset_id = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt , $delete);
mysqli_stmt_bind_param($stmt , "i" , $id);
$result = mysqli_stmt_execute($stmt);
header("location:registration.php");

?>