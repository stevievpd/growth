<?php

include 'db/db.php';
include 'header.php';
if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $prodCode=$_POST['prodCode'];
    $prodDesc=$_POST['prodName'];
    $prodDesc=$_POST['prodDesc'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $cost=$_POST['cost'];
    

    $sql="INSERT INTO inventory ('id',prodCode, prodName, prodDesc, quantity, price, cost) values  ('$id','$prodCode','$prodName','$prodDesc','$quantity','$price','$cost')";
    $result=mysqli_query($conn,$sql);
    if($result){

        header("Location: purchase_order.php");
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
                <label>Product Name: </label>
                <input type="text" class="form-control" placeholder="Enter description " name="prodDesc" autocomplete="off"  autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Product Description: </label>
                <input type="text" class="form-control" placeholder="Enter description " name="prodDesc" autocomplete="off"  autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Quantity: </label>
                <input type="number" class="form-control"  name="quantity" id="quantityid" autocomplete="off" value="0.00"  autocomplete="off" required oninput="multiply()">
            </div>

            <div class="form-group">
                <label>Price: </label>
                <input type="number" class="form-control"  name="price" id="priceid" autocomplete="off"  value="0.00" autocomplete="off" required oninput="multiply()">
            </div>

            <div class="form-group">
                <label>Cost: </label>
                <input type="number" class="form-control"  name="cost" id="cost" autocomplete="off"   value="0.00" autocomplete="off" readonly>
            </div>

            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="display.php"class = "text-light">Cancel</a></button>
            
        </form>
         
    </div>

    
    <script>
        function multiply() {
            var quantity = document.getElementById("quantityid").value;
            var price = document.getElementById("priceid").value;
            var total = parseFloat(quantity) * parseFloat(price);
            document.getElementById("cost").value = total;
        }
    </script>

</body>

</html>
