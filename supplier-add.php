<?php
include 'db/db.php';
include 'header.php';
if(isset($_POST['submit'])){

    $supplier_name=$_POST['supplier_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $state_province=$_POST['state_province'];
    $postal_code=$_POST['postal_code'];
    $stamp=$_POST['stamp'];
    
    $sql="INSERT INTO supplier (supplier_name, address, phone, email, city, country, state_province, postal_code, stamp) values  ('$supplier_name','$address','$phone','$email','$city', '$country', '$state_province','$postal_code','$stamp')";
    $result=mysqli_query($conn,$sql);
    if($result){

        header("Location: supplier_table.php");
    }
    else{
    }
         die(mysqli_error($conn));
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
    <title> supplier </title>

</head>

<body>
    <div class="purchase_wrapper">
        <div class="container my-10">
            <form method="post">
                <div class="form-group">
                    <label>Supplier Name</label>
                    <input type="text" class="form-control" placeholder="Enter Supplier Name" name="supplier_name"
                        autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter address" name="address" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="Enter phone" name="phone" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="Enter city" name="city" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" placeholder="Enter county" name="country" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <label>State/Province</label>
                    <input type="text" class="form-control" placeholder="Enter state/province" name="state_province"
                        autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Postal/Zip Code</label>
                    <input type="number" class="form-control" placeholder="Enter postal/zip code" name="postal_code"
                        autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="Enter stamp" name="stamp" autocomplete="off"
                        required>
                </div>

                <div class="seach_item">
                    <button class="btn btn-danger"><a href="supplier_table.php" class="text-light">Cancel</a></button>
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
            </form>
            </div>
        </div>
    </div>

</body>

</html>
<!--<style type="text/css">
#display_image {
    width: 300px;
    height: 211px;
    border: 1px solid black;
    background-position: center;
    background-size: cover;
    padding: 0px;
}
</style>