
<?php
include("connection.php");
$id = $_GET["id"];
$sql = "select * from doctors where doctor_id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>


<?php
if(isset($_POST["update"])){
    $doctor_name = $_POST["doctor_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $experience = $_POST["experience"];
    $fees = $_POST["fees"];
    if(empty($doctor_name) || empty($email) ||empty($phone) ||empty($experience) ||empty($fees) ){
       echo "<h5 style='text-align:center; color:white; margin-top:5px'>all input field must be filled</h4>";
    }
    else{
        $sql = "update  doctors set doctor_name = '$doctor_name', email = '$email', phone = '$phone' ,expereince = '$experience' , fees='$fees' where doctor_id = $id";
        $query = mysqli_query($conn , $sql);
        header("location:doctors.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor update</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      body{
        /* background-color:hsl(210 , 40% ,60%); */
      }
    </style>
</head>
<body>
    <div class="card  ">
        <div class="card-header bg-danger text-white" >
            <h3>update doctor Information</h3>
        </div>
        <div class="card-body m-3">
            <form method="post">
            <div class="row ">
            <div class="col-sm-4">
                <label class="form-label"> dr name</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" name="doctor_name" palaceholder="inter your dr name" value="<?php echo $row["doctor_name"]; ?>" class="form-control">               
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label">  email</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="email" name="email" palaceholder="inter your dr email" value="<?php echo $row["email"]; ?>" class="form-control">               
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label"> phone</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="number" name="phone" palaceholder="inter your dr phone " value="<?php echo $row["phone"]; ?>" class="form-control">               
                </div>
            </div>
            
        </div>
        <div class="row mt-2">
            <div class="col-sm-4 mt-3">
                <label class="form-label">experience </label>
                <div class="input-group">
                    <span class="input-group-text">
                        
                    </span>
                    <input class="form-control" name="experience" placeholder="enter experience " value="<?php echo $row["expereince"]; ?>"></input>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <label class="form-label "> fees</label>
                <div class="input-group">
                    <span class="input-group-text">
    
                    </span>
                    <input type="text" class="form-control" name="fees" placeholder="inter dr fees" value="<?php echo $row["fees"]; ?>">
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                        <button class="btn btn-success" style="width: 100%;" name="update" value="update">
                            update</button>
                    </div>
        </div>
            
        </form>
        </div>
    </div>
</body>
</html>