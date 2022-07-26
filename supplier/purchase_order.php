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
        <form method="post">
            <div class="form-group">
                <div class="Select-supplier">
                    <option>Select supplier
                    </option>
                </div>
                <?php
                    $mysqli = mysqli_connect('localhost','root','','growth');
                    $resultSet = $mysqli ->query("SELECT supplier_name FROM supplier");
                    $color1 = "#b3b3b3";
                    $color2 = "#cccccc";
                    $color = $color1;

                ?>
                <select class="supplier" name="supplier_name"><br>
                    <?php
                        while ($rows = $resultSet ->fetch_assoc())
                        {
                            $color == $color1 ? $color = $color2 : $color = $color1;
                            $supplier_name = $rows ['supplier_name'];
                            echo "<option value = '$supplier_name' style='background:$color;'>$supplier_name</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Purchase Date</label>
                <input type="date" class="form-control" placeholder="Enter purchase date" name="purchase_date"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Expected Date</label>
                <input type="date" class="form-control" placeholder="Enter expected date" name="expected_date"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Notes</label>
                <input type="text" class="form-control" placeholder="Enter notes" name="notes" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <div class="Select-item">
                    <option>Select item
                    </option>
                </div>
                <?php
                    $mysqli =mysqli_connect('localhost','root','','growth');
                    $resultSet = $mysqli ->query("SELECT prodDesc FROM inventory");
                    $color1 = "#b3b3b3";
                    $color2 = "#cccccc";
                    $color = $color1;

                ?>
                <select class="item" name="item"><br>
                    <?php
                    while ($rows = $resultSet ->fetch_assoc()){
                        $color == $color1 ? $color = $color2 : $color = $color1;
                        $prodDesc = $rows ['prodDesc'];
                        echo "<option value = '$prodDesc' style='background:$color;'>$prodDesc</option>";
                    }
                ?>
                </select>
            </div>

            <div class="form-group"><br>
                <label>Quantity:</label>
                <input class="form-control" value="1" type="number" name="quantity" id="qtyId" autocomplete="off"
                    oninput="multiply()">
            </div>

            <div class="form-group"><br>
                <label>Price:</label>
                <input class="form-control" value="1" type="number" name="price" id="priId" autocomplete="off"
                    oninput="multiply()">
            </div>
            <div class="form-group"><br>
                <label>Total Amount:</label>
                <input class="form-control" type="text" name="amount_total" id="total" placeholder="100000" readonly>
            </div>
            <button class="btn btn-danger"><a href="purchase_create.php" class="text-light">Cancel</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>

    </div>

    <script>
        function multiply() {
            var quantity = document.getElementById("qtyId").value;
            var price = document.getElementById("priId").value;
            var total = parseFloat(quantity) * parseFloat(price);
            document.getElementById("total").value = total;
        }
    </script>

</body>

</html>
<style type="text/css">
.supplier {
    width: 300px;
    height: 35px;
    border-radius: 2px;
    radius: 2px;
    padding: 0px;
    align: center;
}

.item {
    width: 300px;
    height: 35px;
    border-radius: 2px;
    radius: 2px;
    padding: 0px;
    align: center;
}

#content-wrapper {
    padding: 100px;
}
</style>