<?php
include("connection.php");

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--patein list table-->
    <div class="card">
        <!--caed header-->
        <div class="card-header text-light"style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
            <h3>Patient list </h3>
        </div>
        <!--card body-->
        <div class="card-body">
            <table class="table table-borderless table-hover table-striped">
                <thead class="text-center">
                    <tr>
                        <th>#</th>
                        <th>first name </th>
                        <th>last name </th>
                        <th>age </th>
                        <th>gender </th>
                        <th>contact number </th>
                        <th>email</th>
                        <th>adress</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                   
                <?php
                $sql = "select * from patient";
                $result = mysqli_query($conn , $sql);
                $r_check = mysqli_num_rows($result);

                if($r_check > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr> 
                                <td>'.$row["id"].'</td>
                                <td>'.$row["f_name"].'</td>
                                <td>'.$row["l_name"].'</td>
                                <td>'.$row["age"].'</td>
                                <td>'.$row["gender"].'</td>
                                <td>'.$row["phone"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["address"].'</td>
                                <td>
                                <a href="patient_update.php?id='.$row["id"].'" class="btn btn-info">updte </a>
                                </td>
                                <td>
                                <a href="petient_delete.php?id='.$row["id"].'" class="btn btn-danger">delete </a>
                                </td>
                        
                        
                        
                            </tr>';
                    }
                }

                ?>
                
                   
                </tbody>

            </table>
            <a href="patient.php" class="btn btn-danger">back</a>
        </div>
    </div>
     
</body>

</html>
