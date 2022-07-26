<?php

require('db/db.php');
include("header.php");
$supplier_id=$_GET['updateid'];
$sql="SELECT * from supplier where supplier_id=$supplier_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$supplier_name=$row['supplier_name'];
$address=$row['address'];
$city=$row['city'];
$country=$row['country'];
$email=$row['email'];
$phone=$row['phone'];
$bank_account=$row['bank_account'];
$branch=$row['branch'];
$tin=$row['tin'];
$tax=$row['tax'];
$stamp=$row['stamp'];


if(isset($_POST['submit'])){
  
    $supplier_name=$_POST['supplier_name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bank_account=$_POST['bank_account'];
    $branch=$_POST['branch'];
    $tin=$_POST['tin'];
    $tax=$_POST['tax'];
    $stamp=$_POST['stamp'];

    $sql="UPDATE supplier SET supplier_id=$supplier_id, supplier_name='$supplier_name', address='$address', city='$city', country='$country',email='$email', phone='$phone', bank_account='$bank_account', branch='$branch', tin='$tin', tax='$tax', stamp='$stamp' WHERE supplier_id=$supplier_id";
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
                <label>City:</label>
                <input type="text" class="form-control" placeholder="Enter city " name="city" autocomplete="off" value = <?php echo $city;?>>
            </div>
            <div class="form-group">
                <label>Country: </label>
                <input type="text" class="form-control" placeholder="Enter country " name="country" autocomplete="off" value = <?php echo $country;?>>
            </div>
          
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off" value = <?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="number" class="form-control" placeholder="Enter phone number " name="phone" autocomplete="off" value = <?php echo $phone;?>>
            </div>
            <div class="form-group">
                <label>Bank Account:</label>
                <input type="text" class="form-control" placeholder="Enter bank account " name="back_account" autocomplete="off" value = <?php echo $bank_account;?>>
            </div>
            <div class="form-group">
                <label>Branch:</label>
                <input type="text" class="form-control" placeholder="Enter branch " name="branch" autocomplete="off" value = <?php echo $branch;?>>
            </div>
            <div class="form-group">
                <label>Tin:</label>
                <input type="text" class="form-control" placeholder="Enter tin " name="tin" autocomplete="off" value = <?php echo $tin;?>>
            </div>
            <div class="form-group">
                <label>Tax:</label>
                <input type="number" class="form-control" placeholder="Enter tax " name="tax" autocomplete="off" value = <?php echo $tax;?>>
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

