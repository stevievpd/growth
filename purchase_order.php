<?php 
require('db/db.php');
include('header.php');
if(isset($_POST['submit'])){

    $supplier_name=$_POST['supplier_name'];
    $purchase_date=$_POST['purchase_date'];
    $expected_date=$_POST['expected_date'];
    $notes=$_POST['notes'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $amount_total=$_POST['amount_total'];

    
    $sql="INSERT INTO purchase_order (supplier_name, purchase_date, expected_date, notes, item, quantity, price, amount_total) values  ('$supplier_name','$purchase_date','$expected_date','$notes', '$item', '$quantity','$price','$amount_total')";
    $result=mysqli_query($conn,$sql);
    if($result){

        header("Location: purchase_create.php");
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
    <title> Purchase Order</title>

</head>

<body onload="multiply();">
        <div class="purchase_wrapper">
        <div class="form-group">        
        <div class="Select-supplier">
                <option>Select item<option>
            </div>
            <?php
                    $mysqli =NEW MySQLi('localhost','root','','growth');
                    $resultSet = $mysqli ->query("SELECT supplier_name FROM supplier");
                    $color1 = "#b3b3b3";
                    $color2 = "#cccccc";
                    $color = $color1;

            ?>  
    <select class="supplier"><br>
    <?php
    while ($rows = $resultSet ->fetch_assoc())
    {
        $color == $color1 ? $color = $color2 : $color = $color1;
        $supplier_name = $rows ['supplier_name'];
        echo "<option value = '$supplier_name' style='background:$color;'>$supplier_name</option>";
    }
    ?>
<label class="first-column"></label><div class="second-column">
</select>
</div>
<form method="post">
    
            </div>
            <div class="form-group">
                <label>Purchase Date</label>
                <input type="date" class="form-control"
                    placeholder="Enter purchase date" name="purchase_date" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Expected Date</label>
                <input type="date" class="form-control"
                    placeholder="Enter expected date" name="expected_date" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Notes</label>
                <input type="text" minlength="11" maxlength="15" class="form-control" placeholder="Enter notes" name="note"
                    autocomplete="off" required>
            </div>
</form>

        <div class="form-group">        
<div class="Select-item">
                <option>Select item<option>
            </div>
            <?php
                    $mysqli =NEW MySQLi('localhost','root','','growth');
                    $resultSet = $mysqli ->query("SELECT prodDesc FROM inventory");
                    $color1 = "#b3b3b3";
                    $color2 = "#cccccc";
                    $color = $color1;

            ?>  
    <select class="item"><br>
    <?php
    while ($rows = $resultSet ->fetch_assoc())
    {
        $color == $color1 ? $color = $color2 : $color = $color1;
        $prodDesc = $rows ['prodDesc'];
        echo "<option value = '$prodDesc' style='background:$color;'>$prodDesc</option>";
    }
    ?>
<label class="first-column"></label><div class="second-column">
</select>
</div>

            <div class="form-group"><br>
            <label>Quantity:</label>
                <input class="form-control" type="number" name="quantity" id="one" value="0" autocomplete="off" onchange="multiply();">
            </div>

            <div class="form-group"><br>
            <label>Price:</label>
                <input class="form-control" type="number" name="price" id="two" value="0" autocomplete="off" onchange="multiply();">
            </div>
            <div class="form-group"><br>
            <label>Total Amount:</label>
                <input class="form-control" type="text" name="total" id="total" >
            </div>
            <button class="btn btn-danger"><a href="purchase_create.php" class="text-light">Cancel</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>

           
</div>
</div>

<script>
function multiply(){
    var quantity = document.getElementById("one").value;
    var price = document.getElementById("two").value;
    var total = parseFloat(quantity)*parseFloat(price);
    document.getElementById("total").value = total; 
}

</script>

</body>

</html>
<style type="text/css">
.supplier{
    width: 300px;
    height:35px;
    border-radius:2px;
    radius: 2px;
    padding: 0px;
    align: center;
}
.item{
    width: 300px;
    height:35px;
    border-radius:2px;
    radius: 2px;
    padding: 0px;
    align: center;
}

#content-wrapper{
    padding: 100px;

}
    </style>
