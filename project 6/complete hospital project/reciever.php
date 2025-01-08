<?php
include("connection.php");
session_start();

if(isset($_POST["Request"])){
$name = $_POST["name"];
$email  = $_POST["email"];
$phone  = $_POST["phone"];
$region  = $_POST["region"];
$town  = $_POST["town"];
$vilage  = $_POST["vilage"];
$blood_type  = $_POST["blood_type"];



$sql = "INSERT INTO recievers(name,
                              email,
                              phone,
                              region,
                              town,
                              vilage,
                              blood_type)
                        values('$name',
                               '$email',                             
                               '$phone',                             
                               '$region',                             
                               '$town',                             
                               '$vilage',                             
                               '$blood_type')";
    if(empty($name)|| empty($email)|| empty($phone)|| empty($region)|| empty($town)|| empty($vilage)|| empty($blood_type)){
        echo "<h3 style='text-align:center;color:red'>all input field must be filled</h3>";
    }
    else{
        $result = mysqli_query($conn , $sql);
        echo "<h3 style='text-align:center;color:green'>request sended </h3>";
    }
}

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!--card-->
<div class="card">
    <!--card-header-->
    <div class="card-header text-light" style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
        <h3> blood reuquest form </h3>
    </div>
    <!--card body-->
    <div class="card-body" style="background-color: hsl(0, 0%, 90%)">
        <form action="#" method="post">

    <!--full name emial and phone in one row-->

            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label">full name</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter your name" name="name">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label"> email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope" style="color: blue;"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="enter your email" name="email">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label"> phone</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone" style="color: blue;"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="enter your phone" name="phone">
                    </div>
                </div>
            </div>

            <!--region town nad vilage in one row-->

            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label"> region</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-location-dot" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter region name" name="region">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label"> town</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-city" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter town " name="town">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label"> vilage</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-sharp fa-solid fa-house-night" style="color: blue;"></i>
                        </span>
                        <input type="text"class="form-control" placeholder="enter vilage" name="vilage">
                    </div>
                </div>
            </div>

            <!-- blood type colum in one row-->

            <di class="row">
                <div class="col-sm-6">
                    <label class="form-label"> blood type</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-droplet" style="color: red;"></i>
                        </span>
                        <select class="form-select" name="blood_type">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="O+">B+</option>
                            <option value="O-">B+</option>
                        </select>
                    </div>
                </div>
            </di>

            <!-- Buttons (Save, Update, Delete, Search) -->

            <div class="row mt-3">
                <div class="col-sm-12">
                    <button class="btn btn-success" style="width: 100%" name="Request" value="Request"> 
                        <i class="fa-solid fa-paper-plane"></i>
                        Request</button>
                </div>
                <!-- <div class="col-sm-3">
                    <button class="btn btn-danger" style="width: 100% ;"> <i class="fa-solid fa-rotate-left"></i> reset</button>
                </div> -->
                <!-- <div class="col-sm-3">
                    <button class="btn btn-warning" style="width: 100% ;"> <i class="fa-solid fa-pen"></i>update</button>
                </div> -->
                <!-- <div class="col-sm-3">
                    <button class="btn btn-info" style="width: 100% ;"> 
                        <i class="fa-solid fa-magnifying-glass"></i> search</button>
                </div> -->
            </div>
        </form>
    </div>
</div>
<!--second card-->
<div class="card mt-3">
    <div class="card-header text-light" style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
        <h3> list of blood reuquest</h3>
    </div>
    <div class="card-body">
        <!--reuquest table in card-body -->
        <table class="table table-striped table-borderless table-hover">
            <thead>
                <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>region</th>
                <th>town</th>
                <th>vilage</th>
                <th>boold type</th>
                <th>status</th>
                </tr>
            </thead>
            <tbody>

 <?php

$sql = "SELECT * from recievers";
$result = mysqli_query($conn , $sql);
$r_check = mysqli_num_rows($result);

if($r_check > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr> 
                <td>" .$row['id']."</td>
                <td>" .$row['name']."</td>
                <td>" .$row['email']."</td>
                <td>" .$row['phone']."</td>
                <td>" .$row['region']."</td>
                <td>" .$row['town']."</td>
                <td>" .$row['vilage']."</td>
                <td>" .$row['blood_type']."</td>
                <td>  
                <a href='' class='btn btn-info'> accept </a></td>
                <td><a href='reject_receiver.php?id=".$row['id']."' class='btn btn-danger'> reject </a>
                
                </td>

             </tr>";
    }
}



            
?>
            </tbody>
        </table>

    </div>
</div>
    
</body>

</html>

