<?php
include("connection.php");


if(isset($_POST["save"])){
$f_name = $_POST["f_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$address = $_POST["address"];
$l_name = $_POST["l_name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$heigth = $_POST["heigth"];
$blood_group = $_POST["blood_group"];
$pulse = $_POST["pulse"];
$allergy = $_POST["allergy"];
$weight = $_POST["weight"];
$b_pressure = $_POST["b_pressure"];
$respiration = $_POST["respiration"];
$deit = $_POST["deit"];
$addition = $_POST["addition"];

$sql = "INSERT INTO patient (
                            f_name,
                            gender,
                            email,
                            address,
                            l_name,
                            age ,
                            phone,
                            heigth,
                            blood_group	,
                            pulse,
                            allergy,
                            weight,
                            b_pressure,
                            respiration,
                            deit,
                            addition)
                    values('$f_name',
                           '$gender',
                           '$email',
                           '$address',
                           '$l_name',
                           '$age',
                           '$phone',
                           '$heigth',
                           '$blood_group',
                           '$pulse',
                           '$allergy',
                           '$weight',
                           '$b_pressure',
                           '$respiration',
                           '$deit',
                           '$addition')";

    if(empty($f_name) || empty($gender) || empty($email) || empty($address) || empty($l_name) || empty($age) || empty($phone) || empty($heigth) || empty($blood_group) || empty($pulse) || empty($allergy) || empty($weight) || empty($b_pressure) || empty($respiration) || empty($deit) || empty($addition)){
        echo "<h3 style='text-align:center;color:red'>all input field must be filled</h3>";
    }
    else{

    $result = mysqli_query($conn , $sql);
    echo "<h3 style='text-align:center;color:green'>patient info sended</h3>";
    
    
    }

}

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<!--card-->
<div class="card ">
    <!--card header-->
    <div class="card-header text-light " style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
        <h3>Patient basic Information</h3>
    </div>
    <!--crd body-->
    <div class="card-body " style="background-color: hsl(0, 0%, 90%)">
        <form action="#" method="post">
            <!--first row-->
            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label">first name*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter full name" name="f_name">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">gender*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-venus-mars" style="color: blue;"></i>
                        </span>
                        <select class="form-select" name="gender">
                             <option value="male">male</option>
                             <option value="female">female</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">enter email*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope" style="color: blue;"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="enter email" name="email">
                    </div>
                </div>

            </div>
            <!--second row-->
            <div class="row my-4">
                <div class="col-sm-4">
                    <label class="form-label">current address*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-house" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter current address " name="address">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">last name*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-house" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter last name" name="l_name">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">age*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-box" style="color: blue;"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="enter age" name="age">
                    </div>
                </div>

            </div>
            <!--third row-->
            <div class="row my-4">
                <div class="col-sm-4">
                    <label class="form-label">contact number*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone" style="color: blue;"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="enter current address " name="phone">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">profile photo*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-camera" style="color: blue;"></i>
                        </span>
                        <input type="file" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <!-- 4 row-->
            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label">heigth*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-ruler" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter your heigth" name="heigth">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">blood group*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-droplet" style="color: red;"></i>
                        </span>
                        <select class="form-select" name="blood_group">
                             <option value="A+">A+</option>
                             <option value="B+">B+</option>
                             <option value="A-">A-</option>
                             <option value="AB+">AB+</option>
                             <option value="B+">B+</option>
                             <option value="O-">0-</option>
                             <option value="O+">O+</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">pulse*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-heart-pulse" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter pulse rate" name="pulse">
                    </div>
                </div>

            </div>
            <!--5 ROW-->
            <div class="row my-4">
                <div class="col-sm-4">
                    <label class="form-label">allergy details</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-hand" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter allegry details " name="allergy">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">weight*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-weight-scale" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter your weight" name="weight">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">blodd prussure*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-clock" style="color: blue;"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="enter blood prussure " name="b_pressure">
                    </div>
                </div>

            </div>
            <!--6 ROW-->
            <div class="row my-4">
                <div class="col-sm-4">
                    <label class="form-label">respiration*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-lungs" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="enter respiration heigth " name="respiration">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">deit*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-utensils" style="color: blue;"></i>
                        </span>
                        <select class="form-select" name="deit">
                             <option value="vegetable">vegetable</option>
                             <option value="vitamins">vitamins</option>
                             <option value="idk">idk</option>
                            
                        </select>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="form-label">addition info*</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-clock-twelve-thirty" style="color: blue;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="optional " name="addition">
                    </div>
                </div>

            </div>
            <!--7 ROW - Buttons (Save, Update, Delete, Search)-->
            <div class="row g-3">
                <div class="col-sm-10">
                    <button class="btn btn-success" style="width: 100%;" name="save" value="save">
                        <i class="fa-solid fa-floppy-disk"></i>  save</button>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-warning fz-2" style="width: 100%;" href="paitentlists.php">
                        patien_list</a>
                </div>

                <!-- <div class="col-sm-3">
                    <button class="btn btn-danger" style="width: 100%;">
                        <i class="fa-solid fa-trash"></i>delete</button>
                </div> -->

                <!-- <div class="col-sm-3">
                    <button class="btn btn-info text-light" style="width: 100%;">
                        <i class="fa-solid fa-magnifying-glass" style="color: white;"></i>search</button>
                </div> -->
            
            </div>

        </form>
    </div>
</div>

  
</body>
</html>



