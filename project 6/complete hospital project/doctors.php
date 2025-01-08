<?php
include("connection.php");

if(isset($_POST["save"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $departement = $_POST["departement"];
    $experience = $_POST["experience"];
    $phone = $_POST["phone"];
    $degree = $_POST["degree"];
    $fees = $_POST["fees"];
    // $photo = $_POST["photo"];
    
    $insert = "INSERT INTO doctors (
                                    doctor_name,
                                    email,title,
                                    departement,
                                    expereince,
                                    phone,
                                    degree,
                                    fees)
                              values('$name',
                                     '$email',
                                     '$title',
                                     '$departement',
                                     '$experience',
                                     '$phone',
                                     '$degree',
                                     '$fees')";
    
    if(empty($name) || empty($email) || empty($title) || empty($departement) || empty($experience) || empty($phone) || empty($degree) || empty($fees)){
        
        echo "<h3 style='text-align:center;color:red'>All field must be filled</h3>";
    }
    else{
        mysqli_query($conn , $insert);
        echo "<h3 style='text-align:center;color:green'>Docotor registration succsesfully</h3>";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
     
         
<div class="card ">
    <!--card header-->
<div class="card-header px-3 text-light" style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
    <h2>add new doctor</h2>
</div>
<!--card body-->
<div class="card-body" style="background-color: hsl(0, 0%, 90%)">
    
<form action="#" class="px-2" method="post">
    <!--doctor,name email and his title in one row-->
    <div class="row my-2">
      <div class="col-sm-4">
        <label class="form-label">full name</label>
        <div class="input-group">
        <span class="input-group-text">
            <i class="fa-solid fa-user" style="color: blue;"></i>
        </span>
        <input class="form-control" type="text" placeholder="Enter full name" name="name">
        </div>
    </div>
  
    <div class="col-sm-4">
        <label class="form-label"> email</label>
      <div class="input-group">
      <span class="input-group-text">
        <i class="fa-solid fa-envelope"style="color: blue;"></i>
      </span>
      <input class="form-control" type="email" placeholder="Enter email" name="email">
     </div>
   </div>

   <div class="col-sm-4">
    <label class="form-label">title</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="fa-solid fa-box"style="color: blue;"></i>
        </span>
        <input class="form-control" type="text" placeholder="enter title" name="title">
    </div>
   </div>
    
    </div>
    <!--depertement experience and contact number in one row-->
    <div class="row my-2">
        <div class="col-sm-4 ">
            <label class="form-label">departement</label>
         <div class="input-group">
          <span class="input-group-text">
            <i class="fa-solid fa-building"style="color: blue;"></i>
          </span>
           <select class="form-select" name="departement">
            <option value="cardiology">caardiology</option>
            <option value="cardiology">cardiology</option>
           </select>
         </div>
        </div>

        <div class="col-sm-4">
            <label class="form-label">experience</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-box"style="color: blue;"></i>
                </span>
                <input type="text" placeholder="enter experience in years" class="form-control" name="experience">
            </div>
        </div>

        <div class="col-sm-4">
            <label class="form-label">contact number</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-phone"style="color: blue;"></i>
                </span>
                <input type="number" class="form-control" placeholder="enter contact number" name="phone">
            </div>
        </div>
    </div>
    <!--degre fee and image in one row -->
    <div class="row mt-3">
        <div class="col-sm-4">
            <label class="form-label">degree</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-graduation-cap"style="color: blue;"></i>
                </span>
                <input type="text" class="form-control" placeholder="enter degre" name="degree">
            </div>
        </div>
        <div class="col-sm-4">
            <label class="form-label">fees</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-dollar-sign" style="color: blue;"></i>
                </span>
                <input type="number" class="form-control" placeholder="enter fees" name="fees">
            </div>
        </div>
        <div class="col-sm-4 ">
            <label class="form-label">enter photo</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-camera" style="color: blue;"></i>
                </span>
                <input type="file" class="form-control" placeholder="enter your photo" name="photo">
            </div>
        </div>

    </div>
      <!-- Buttons (Save, Update, Delete, Search) -->
    <div class="row mt-3 g-3">
        <div class="col-lg-12 ">
            <button type="submit" class="btn btn-success" name="save" value="Save" style="width: 100%;">
                <i class="fa-solid fa-floppy-disk"></i>
                save</button>
        </div>
        <!-- <div class="col-sm-3">
            <button type="submit" class="btn btn-warning" style="width: 100%;">
                <i class="fa-solid fa-pen"></i>
                update</button>
        </div> -->
        <!-- <div class="col-sm-3">
            <button type="submit" class="btn btn-danger" style="width: 100%;">
                <i class="fa-solid fa-trash"></i>
                delete</button>
        </div> -->
        <!-- <div class="col-sm-3 ">
            <button type="reset" class="btn btn-info text-light" style="width: 100%;">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span class="ps-1">search</span>
            </button>
    </div> -->
    
        </form>
    
        </div>
</div>

<!--table of list of doctors-->
<div class="card  mt-3">
    <div class="card-header text-light" style="background-color: hsla(0, 69.70%, 45.30%, 0.80)">
    <h4>list of Doctors</h4>
    </div>
   <div class="card-body" >
  <table class="table table-striped table-hover  table-borderless">
  <thead class="text-center">
  <tr >
  <th>#</th>
  <th>dr.name</th>
  <th>email </th>
  <th>phone</th>
  <th>expereince</th>
  <th>fees</th>
  <th>action</th>
  </tr>
  </thead>
  <tbody class="text-center">
<?php
$sql="select * from doctors";
$result = mysqli_query($conn , $sql);
$r_check = mysqli_num_rows($result);

if($r_check >0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>". $row['doctor_id'] ."</td>
                <td>". $row['doctor_name'] ."</td>
                <td>". $row['email'] ."</td>
                <td>". $row['phone'] ."</td>
                <td>". $row['expereince'] ."</td>
                <td>". $row['fees'] ."</td>
                <td>
                    <a href='doc_update.php?id=".$row['doctor_id']."' class='btn btn-info'> update</a>
                    <a href='doc_delete.php?id=".$row['doctor_id']."' class='btn btn-danger'> delete</a>
                    
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

