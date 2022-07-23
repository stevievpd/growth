<?php

require('db/db.php');
include("header.php");
$supplier_id=$_GET['updateid'];
$sql="SELECT * from supplier where supplier_id=$supplier_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$supplier_name=$row['supplier_name'];
$address=$row['address'];
$phone=$row['phone'];
$email=$row['email'];
$city=$row['city'];
$country=$row['country'];
$state_province=$row['state_province'];
$postal_code=$row['postal_code'];
$stamp=$row['stamp'];


if(isset($_POST['submit'])){
    $fsupplier_name=$_POST['supplier_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $state_province=$_POST['state_province'];
    $postal_code=$_POST['postal_code'];
    $stamp=$_POST['stamp'];

    $sql="UPDATE supplier SET supplier_id=$supplier_id, supplier_name='$supplier_name', address='$address', phone='$phone', city='$city', country='$country', state_province='$state_province', postal_code='$postal_code', stamp='$stamp' WHERE supplier_id=$supplier_id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: supplier_table.php");
    }
    else{
         die(mysqli_error($con));
    }    
}
?> 

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Add Employee</title>

</head>

<body>
    <div class="container my-10">   
        <form method="post">
              <div class="form-group">
                <label>Supplier Name:</label>
                <input type="text" class="form-control" placeholder="Enter supplier name" name="supplier_name" autocomplete="off" value = <?php echo $supplier_id;?>>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" placeholder="Enter address" name="address" autocomplete="off" value = <?php echo $address;?>>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="number" class="form-control" placeholder="Enter phone number " name="phone" autocomplete="off" value = <?php echo $phone;?>>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off" value = <?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control" placeholder="Enter city " name="city" autocomplete="off" value = <?php echo $city;?>>
            </div>
            <div class="form-group">
                <label>Country: </label>
                <input type="text" class="form-control" placeholder="Enter country " name="country" autocomplete="off" value = <?php echo $country;?>>
            </div>
            <div class="form-group">
                <label>State/Province:</label>
                <input type="text" class="form-control" placeholder="Enter state/province " name="state_province" autocomplete="off" value = <?php echo $state_province;?>>
            </div>
            <div class="form-group">
                <label>Postal Code:</label>
                <input type="number" class="form-control" placeholder="Enter postal code " name="postal_code" autocomplete="off" value = <?php echo $postal_code;?>>
            </div>
            <div class="form-group">
                <label>Stamp:</label>
                <input type="date" class="form-control" placeholder="Enter stamp " name="stamp" autocomplete="off" value = <?php echo $stamp;?>>
            </div>

            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="display.php"class = "text-light">Cancel</a></button>

            
        </form>

    </div>


</body>

</html>

