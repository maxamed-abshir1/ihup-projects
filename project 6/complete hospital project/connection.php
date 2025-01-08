<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "blood_donaretion";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
if($conn){
    // echo "succsess";
}
else{
    echo "connectio failed" . mysqli_error($conn);
}


?>