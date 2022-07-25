<?php

include 'db/db.php';
include 'header.php';
if(isset($_POST['submit'])){

    $prodCode=$_POST['prodCode'];
    $prodDesc=$_POST['prodDesc'];
    $unit=$_POST['unit'];
    $quantity=$_POST['quantity'];
    

    $sql="INSERT INTO inventory (prodCode, prodDesc ,unit, quantity) values  ('$prodCode','$prodDesc','$unit','$quantity')";
    $result=mysqli_query($conn,$sql);
    if($result){

        header("Location: inventory.php");
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
    <title>Add inventory</title>

</head>

<body>
    <div class="container my-10">   
        <form method="post">
        <div class="form-group">
                <label>Product Code:</label>
                <input type="number" class="form-control" placeholder="Enter product code " name="prodCode" autocomplete="off"  autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Description: </label>
                <input type="text" class="form-control" placeholder="Enter description " name="prodDesc" autocomplete="off"  autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Unit:</label>
                <input type="text" class="form-control" placeholder="Enter unit " name="unit" autocomplete="off"  autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Quantity: </label>
                <input type="number" class="form-control" placeholder="Enter quantity " name="quantity" autocomplete="off"  autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="inventory.php"class = "text-light">Cancel</a></button>
            
        </form>
         
    </div>


</body>

</html>
