<?php
include("connection.php");
$id = $_GET["id"];
$read = "select * from asset_reg where asset_id = ?";

$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt , $read);
mysqli_stmt_bind_param($stmt , "i" , $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
?>



<!-- html code  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="contianer-lg p-5">
    <div class="card m-5">
       <div class="card-header bg-secondary text-light text-center">
        <h3>update</h3>
       </div> 
       <div class="card-body p-3 bg-info">
        <form action="#" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <label class="form-label">ASSET_NAME</label>
                    <input type="text" class="form-control" name="asset_name" value="<?php echo $row['asset_name']?>" >
                </div>
                <div class="col-sm-6">
                    <label for="" class="form-label">CATEGORY</label>
                    <input type="text" class="form-control" name="category" value="<?php echo $row['category']?>" >
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <label class="form-label">PURCHASED DATE</label>
                    <input type="date" class="form-control text-muted" name="purchased_date" value="<?php echo $row['purchased_date']?>"  >
                </div>
                <div class="col-sm-4">
                    <label class="form-label">LOCATION</label>
                    <select class="form-select text-muted" name="location" value="<?php echo $row['location']?>" >
                        <option value="nakhiil-camps">nakhiil camps</option>
                        <option value="main-camps">main camps</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">CONDITION</label>
                    <select class="form-select text-muted" name="condition" value="<?php echo $row['comdition_to']?>"  >
                        <option value="working">working</option>
                        <option value="scrap">scrap</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <label class="form-label">ASSIGNED TO</label>
                    <input type="text" class="form-control" name="assigned" value="<?php echo $row['assigned_to']?>" >
                </div>
                <div class="col-sm-6">
                    <label  class="form-label">NOTES</label>
                    <textarea class="form-control" name="notes" > <?php echo $row["notes"]?></textarea>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <input type="submit" class="btn btn-success" value="update" name="update">
                </div>
            </div>
        </form>
       </div>
    </div>
</body>
</html>

<?php

if(isset($_POST["update"])){
    $asset_name = $_POST["asset_name"];
    $category = $_POST["category"];
    $purchased_date = $_POST["purchased_date"];
    $location = $_POST["location"];
    $condition = $_POST["condition"];
    $assigned = $_POST["assigned"];
    $notes = $_POST["notes"];

    if(empty($asset_name) || empty($category) || empty($purchased_date) || empty($location) || empty($condition) || empty($assigned) || empty($notes)){
        echo "<h5 style='text-align:center; color:red; margin-top:5px'>all input field must be filled</h4>";
    }
    
    else{
        $update = "update asset_reg set asset_name='$asset_name',category='$category',purchased_date='$purchased_date',location='$location',condition_to='$condition',assigned_to='$assigned',notes='$notes' where asset_id = ? ";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt , $update);
        mysqli_stmt_bind_param($stmt , "i", $id);
        mysqli_stmt_execute($stmt);

        header("location:registration.php");
    }

}
?>