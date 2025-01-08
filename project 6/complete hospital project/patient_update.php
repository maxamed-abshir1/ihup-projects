
<?php
include("connection.php");
$id = $_GET["id"];
$sql = "select * from patient where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>


<?php
if(isset($_POST["update"])){
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    if(empty($f_name) || empty($l_name) ||empty($age) ||empty($gender) ||empty($phone) ||empty($email) ||empty($address)){
       echo "<h5 style='text-align:center; color:white; margin-top:5px'>all input field must be filled</h4>";
    }
    else{
        $sql = "update  patient set f_name = '$f_name', l_name = '$l_name', age = '$age' ,gender = '$gender' , phone='$phone' , email='$email' , address='$address' where id = $id";
        $query = mysqli_query($conn , $sql);
        header("location:paitentlists.php");
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
    <div class="card ">
        <form method="post">
        <div class="row ">
            <div class="card-header bg-danger text-white" >
                <h3>update paitent info</h3>
            </div>
            <div class="card-body m-5">
             <div class="row">  
            <div class="col-sm-4">
                <label class="form-label"> first name</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" name="f_name" palaceholder="inter your first name" value="<?php echo $row["f_name"];?>" class="form-control">               
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label"> last name</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" name="l_name" palaceholder="inter your last name" value="<?php echo $row["l_name"]; ?>" class="form-control">               
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label"> age</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="number" name="age" palaceholder="inter your age " value="<?php echo $row["age"] ;?>" class="form-control">               
                </div>
            </div>
            
        </div>
        <div class="row mt-2">
            <div class="col-sm-4">
                <label class="form-label"> gender</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <select name="gender" class="form-select" value="<?php echo $row["gender"]; ?>">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label">contact number</label>
                <div class="input-group">
                    <span class="input-group-text">
                        
                    </span>
                    <input class="form-control" name="phone" placeholder="enter your phone" value="<?php echo $row["phone"] ;?>">
                </div>
            </div>
            <div class="col-sm-4">
                <label class="form-label">email </label>
                <div class="input-group">
                    <span class="input-group-text">
                        
                    </span>
                    <input class="form-control" name="email" placeholder="enter your email"value="<?php echo $row["email"] ?>"></input>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <label class="form-label "> address</label>
                <div class="input-group">
                    <span class="input-group-text">

                    </span>
                    <input type="text" class="form-control" name="address" placeholder="inter you address" value="<?php echo $row["address"] ?>">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-2 mt-3">
                    <button class="btn btn-success" style="width: 100%;" name="update" value="update">
                        update</button>
                </div>
        </div>
        </div> 
        </form>
    </div>
</body>
</html>
