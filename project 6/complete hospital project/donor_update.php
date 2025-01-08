
<?php
include("connection.php");
$id = $_GET["id"];
$sql = "select * from donors where donor_id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>


<?php
if(isset($_POST["update"])){
    $donor_name = $_POST["donor_name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $blood_group = $_POST["blood_group"];
    $gender = $_POST["gender"];
    if(empty($donor_name) || empty($age) ||empty($phone) ||empty($blood_group) ||empty($gender) ){
       echo "<h5 style='text-align:center; color:white; margin-top:5px'>all input field must be filled</h4>";
    }
    else{
        $sql = "update  donors set fullname = '$donor_name', age = '$age', contact_number = '$phone' ,blood_group = '$blood_group' , gender='$gender' where donor_id = $id";
        $query = mysqli_query($conn , $sql);
        header("location:donors.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h3>update donor Information</h3>
        </div>
        <div class="card-body m-3">
        <form method="post">
        <div class="row ">
            <div class="col-sm-4">
                <label class="form-label"> donor name</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" name="donor_name" palaceholder="inter your don name" value="<?php echo $row["fullname"]; ?>" class="form-control">               
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label">  age</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" name="age" palaceholder="inter your don age" value="<?php echo $row["age"]; ?>" class="form-control">               
                </div>
            </div>
    
            <div class="col-sm-4">
                <label class="form-label"> phone</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="number" name="phone" palaceholder="inter your don phone " value="<?php echo $row["contact_number"]; ?>" class="form-control">               
                </div>
            </div>
            
        </div>
        <div class="row mt-2">
            <div class="col-sm-4 mt-3">
                <label class="form-label">blood group </label>
                <div class="input-group">
                    <span class="input-group-text">
                        
                    </span>
                    <select name="blood_group" class="form-select" value="<?php echo $row["blood_group"]; ?>">
                        <option value="+A">+A</option>
                        <option value="-B">-B</option>
                        <option value="-A">-A</option>
                        <option value="+B">+B</option>
                        <option value="+AB">+AB</option>
                        <option value="+0">+0</option>
                        <option value="-0">-0</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <label class="form-label">GENDER  </label>
                <div class="input-group">
                    <span class="input-group-text">
                        
                    </span>
                    <select name="gender" class="form-select">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <label class="form-label"> address</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" name="phone" palaceholder="inter your adress " value="<?php echo $row["adress"]; ?>" class="form-control">               
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-5">
                    <button class="btn btn-success" style="width: 100%;" name="update" value="update">
                        update</button>
                </div>
            
        </form>
        </div>
    </div>
</body>
</html>