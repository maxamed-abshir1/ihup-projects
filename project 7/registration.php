

<?php
// connection file 
include("connection.php");
// php code and html code below this code 
if(isset($_POST["save"])){
    $asset_name = $_POST["asset_name"];
    $category = $_POST["category"];
    $purchased_date = $_POST["purchased_date"];
    $location = $_POST["location"];
    $condition = $_POST["condition"];
    $assigned = $_POST["assigned"];
    $notes = $_POST["notes"];

    $insert = "INSERT into asset_reg ( asset_name ,
                                        category ,
                                        purchased_date , 
                                        location, 
                                        condition_to ,
                                        assigned_to ,
                                        notes)
    
                                VALUES (?,
                                        ?,
                                        ?,
                                        ?,
                                        ?,
                                        ?,
                                        ?)"; 
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt , $insert);
mysqli_stmt_bind_param($stmt , "sssssss", $asset_name , $category , $purchased_date , $location , $condition , $assigned , $notes);

    if(empty($asset_name) || empty($category) || empty($purchased_date) || empty($location) || empty($condition) || empty($assigned) || empty($notes)){
        echo "<h5 style='text-align:center; color:red; margin-top:5px'>all input field must be filled</h4>";

    }
    else{
        //  $result = mysqli_query($conn , $insert);
        $result = mysqli_stmt_execute($stmt);
        echo "<h5 style='text-align:center; color:lightgreen; margin-top:5px'>success full</h4>";


    }
}
?>


<!-- html code  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap link  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css style-sheet link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contianer-lg bg-info p-4">
    <!-- first card  -->
    <div class="card m-5">
       <div class="card-header text-center text-muted ">
        <h3>REGISTRATION FORM</h3>
       </div> 
       <div class="card-body p-3 bg-secondary">
        <form action="#" method="post">
            <div class="row">
                <!-- <div class="col-sm-4">
                   <label class="form-label">ASSET_ID</label>
                   <input type="number" class="form-control" name="asset_id" required>
                </div> -->
                <div class="col-sm-6">
                    <label class="form-label">ASSET_NAME</label>
                    <input type="text" class="form-control" name="asset_name" >
                </div>
                <div class="col-sm-6">
                    <label for="" class="form-label">CATEGORY</label>
                    <input type="text" class="form-control" name="category" >
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <label class="form-label">PURCHASED DATE</label>
                    <input type="date" class="form-control text-muted" name="purchased_date" >
                </div>
                <div class="col-sm-4">
                    <label class="form-label">LOCATION</label>
                    <select class="form-select text-muted" name="location" >
                        <option value="nakhiil-camps">nakhiil camps</option>
                        <option value="main-camps">main camps</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">CONDITION</label>
                    <select class="form-select text-muted" name="condition"  >
                        <option value="working">working</option>
                        <option value="scrap">scrap</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <label class="form-label">ASSIGNED TO</label>
                    <input type="text" class="form-control" name="assigned" >
                </div>
                <div class="col-sm-6">
                    <label  class="form-label">NOTES</label>
                    <textarea class="form-control" placeholder="whrite here" name="notes" ></textarea>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <input type="submit" class="btn btn-success" value="save" name="save">
                </div>
            </div>
        </form>
       </div>
    </div>

    <!-- secod card  -->
    <div class="card m-5">
        <div class="card-header text-center text-muted">
            <h3>STUDENT TABLE</h3>
        </div>
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class=" text-center">
                        <tr>
                            <th>asset_id</th>
                            <th>asset_name</th>
                            <th>category</th>
                            <th>purchased_date</th>
                            <th>location</th>
                            <th>condition</th>
                            <th>assigned</th>
                            <th>notes</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "select * from asset_reg";
                            $result = mysqli_query($conn , $read);
                            $num_rows = mysqli_num_rows($result);
                            if ($num_rows > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr> 
                                    <td>". $row["asset_id"]." </td>
                                    <td>". $row["asset_name"]." </td>
                                    <td>". $row["category"]." </td>
                                    <td>". $row["purchased_date"]." </td>
                                    <td>". $row["location"]." </td>
                                    <td>". $row["condition_to"]." </td>
                                    <td>". $row["assigned_to"]." </td>
                                    <td>". $row["notes"]." </td>
                                    <td> <a href='update.php?id=".$row['asset_id']."' class='btn btn-primary'>UPDATE </a></td>
                                    <td> <a href='delete.php?id=".$row['asset_id']."' class=' btn btn-danger'>DELETE </a></td>
                                    </tr>";
                                }
                            }



                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.js"></script>    
</body>
</html>




