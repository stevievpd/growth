<?php
include 'db/db.php';
include 'header.php';
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

    
    $sql="INSERT INTO supplier (supplier_name, address, city, country, email, phone, bank_account, branch, tin, tax, stamp) values  ('$supplier_name','$address','$city', '$country','$email','$phone', '$bank_account','$branch','$tin','$tax','$stamp')";
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
</div>
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
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off"
                        required>
                </div>

                <div class="form-group">
                    <label>Bank Account</label>
                    <input type="text" class="form-control" placeholder="Enter bank account" name="bank_account"
                        autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Branch</label>
                    <input type="text" class="form-control" placeholder="Enter branch" name="branch"
                        autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Tin</label>
                    <input type="tel",  min=0, max=10, step=1 class="form-control" placeholder="Enter tin" name="tin" autocomplete="off"
                        required>
                </div>
                <div class="form-group">
                    <label>Holding Tax</label>
                    <input type="number" class="form-control" placeholder="Enter tax" name="tax" autocomplete="off"
                        required>
                </div>
                <div class="form-group">
                    <label>stamp</label>
                    <input type="date" class="form-control" placeholder="Enter date" name="date" autocomplete="off"
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

<style type="text/css">
.purchase_wrapper {

    padding: 100px;
}
</style>