<?php

#Database Connection 
include("connection.php");

if( isset($_POST["save"])){
$donor_name = $_POST["donor_name"];
$donor_phone = $_POST["donor_contact"];
$blood_group = $_POST["donor_blood_group"];
$Age = $_POST["donor_age"];
$gender = $_POST["donor_gender"];
$donation_date = $_POST["donar_date"];
$address = $_POST["donor_address"];
$medical_history = $_POST["messege"];
$description = $_POST["DESC"];


##Inerting data to the table 
$sql = "INSERT INTO donors ( fullname,
                             contact_number,
                             blood_group,
                             age,
                             gender,
                             donation_date,
                             adress,
                             medical_history,
                             additional_details)
                    VALUES ('$donor_name' ,
                            '$donor_phone',
                            '$blood_group',
                            '$Age',
                            '$gender',
                            '$donation_date',
                            '$address',
                            '$medical_history',
                            '$description')";
 
 
 if(empty($donor_name) || empty($donor_phone) || empty($blood_group) || empty($Age) || empty($gender) || empty($donation_date) || empty($address) || empty($medical_history) || empty($description)){
    echo "<h3 style='text-align:center;color:red'>all input field must be filled</h3>";
    }
else{
    mysqli_query($conn,$sql);
    echo "<h3 style='text-align:center;color:green'>sended</h3>"; 
}
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     

    <script src="js/bootstrap.bundle.min.js"></script>

<div class="card ">
    <div class="card-header text-light" style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
        <h5 class="card-title">blood donation registration</h5>
    </div>
    <div class="card-body" style="background-color: hsl(0, 0%, 90%)">
        <form action="#" method="post">
            
            <!-- doner name, doner contact, doner-blod-groop - One Row -->
            <div class="row g-3 mb-4">
                <div class="col-sm-4">
                    <label class="form-label">full name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-user" style="color:blue"> :</i></span>
                        <input type="text" class="form-control" placeholder="Enter full name" name="donor_name" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">contact number</label>
                    <div class="input-group">

                        <span class="input-group-text"><i class="fa-solid fa-phone" style="color:blue"></i></span>
                        <input type="number" class="form-control" placeholder="Enter contact number" name="donor_contact" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">blood group</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-droplet" style="color:blue"></i></span>
                       <select class="form-select" name="donor_blood_group">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                       </select>
                    </div>
                </div>
            </div>

            <!-- age, gender, date - One Row -->
            <div class="row g-3 mb-4">
                <div class="col-sm-4">
                    <label class="form-label">age</label>
                    <div class="input-group">
                        <span class="input-group-text" style="color:blue"><i>.</i></span>
                        <input type="number" class="form-control" placeholder="enter age" name="donor_age">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">gender</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-venus-mars" style="color:blue"></i></span>
                        <select id="Town" class="form-select" name="donor_gender">
                            <option>male</option>
                            <option>female</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">donation date</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-duotone fa-solid fa-calendar-days" style="color:blue"></i></span>
                        <input type="date" class="form-control" name="donar_date" >
                    </div>
                </div>
            </div>

            <!-- address, medical history, addotional history - One Row -->
            <div class="row g-3 mb-4">
                <div class="col-sm-4">
                    <label class="form-label">address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-location-dot" style="color:blue"></i></span>
                        <input type="text" class="form-control" placeholder="enter address" name="donor_address" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">medical history</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-message" style="color:blue"></i></span>
                        <textarea placeholder="describe medical history" class="form-control" name="messege"></textarea>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">additional details</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-message" style="color:blue"></i></span>
                        <textarea placeholder="enter additional details" class="form-control" name="DESC"></textarea>
                    </div>
                </div>
            </div>

            <!-- Buttons (Save, Update, Delete, Search) -->
            <div class="row g-3 mb-4">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success w-100" name="save">Save <i class="fas fa-save"></i></button>
                </div>
                <!-- <div class="col-sm-3">
                    <button type="submit" class="btn btn-danger w-100">Delete <i class="fas fa-trash"></i></button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-warning w-100">Update <i class="fas fa-pen"></i></button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-info w-100">Search <i class="fas fa-search"></i></button>
                </div>
            </div> -->

        </form>
    </div>
</div>

<!--somali doners table-->

<div class="card mx-0 mb-3">
    <div class="card-header text-light" style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
    <h4>list of somali blood doners</h4>
    </div>
   <div class="card-bodyt" >
  <table class="table table-striped table-hover  table-borderless ">
  <thead class="text-center ">
  <tr >
  <th>donor id</th>
  <th> name</th>
  <th>contact</th>
  <th>age</th>
  <th>blood group</th>
  <th>gender</th>
  <th>action</th>
  </tr>
  </thead>
  <tbody class="text-center">
<?php
$sql = "select * from donors";
$result = mysqli_query($conn , $sql);
$r_chech = mysqli_num_rows($result);

if($r_chech > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
            <td>". $row['donor_id']. "</td>
            <td>". $row['fullname']. "</td>
            <td>". $row['contact_number']. "</td>
            <td>". $row['age']. "</td>
            <td>". $row['blood_group']. "</td>
            <td>". $row['gender']. "</td>
            <td> 
            <a href='donor_update.php?id=".$row['donor_id']."' class='btn btn-info'>update</a>
            <a href='donor_delete.php?id=".$row['donor_id']."' class='btn btn-danger'>delete</a>
            </td>
        
        <tr>";
    }
}




?>

</tbody>
</table>
</div>
</div>
</body>
</html>


