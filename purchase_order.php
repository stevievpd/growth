<?php 
require('db/db.php');
include('header.php');
if(isset($_POST['submit'])){

    // $id = $_POST['id'];
    $purchase_date=$_POST['purchase_date'];
    $expected_date=$_POST['expected_date'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $amount_total=$_POST['amount_total'];

    $sql="INSERT INTO purchase_order (purchase_date, expected_date, item, quantity, price, amount_total) values  ('$purchase_date','$expected_date', '$item', '$quantity','$price','$amount_total')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:");
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
<h2>Purchase Order</h2>

<body onload="multiply();">
    <div class="purchase_wrapper">
        <form method="post">
            <div class="form-group">
                <div class="Select-supplier">
                    <option>Select supplier
                    </option>
                </div>
                <?php
    
                    $color1 = "#b3b3b3";
                    $color2 = "#cccccc";
                    $color = $color1;

                ?>
                <select class="supplier" name="supplier_name"><br>
                    <?php
                        $mysqli = mysqli_connect('localhost','root','','growth');
                      $resultSet = $mysqli ->query("SELECT *, supplier.id AS supid FROM supplier LEFT JOIN supplier_product ON supplier_product.id=supplier.id LEFT JOIN purchase_order ON purchase_order.id=supplier.id;");
                        while ($rows = $resultSet ->fetch_assoc())
                        {
                            $color == $color1 ? $color = $color2 : $color = $color1;
                            $supplier_name = $rows ['supplier_name'];
                            echo "<option value = '$supplier_name' style='background:$color;'>$supplier_name</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group  w-25">
                <label>Purchase Date</label>
                <input type="date" class="form-control" placeholder="Enter purchase date" name="purchase_date"
                    autocomplete="off" required>
            </div>
            <div class="form-group w-25">
                <label>Expected Date</label>
                <input type="date" class="form-control" placeholder="Enter expected date" name="expected_date"
                    autocomplete="off" required>
            </div>

            <div class="form-group  w-25">
                <div class="Select-item">
                    <option>Select item
                    </option>
                </div>
                <?php
                    $mysqli =mysqli_connect('localhost','root','','growth');
                    $resultSet = $mysqli ->query("SELECT *, supplier.id AS supid FROM supplier LEFT JOIN supplier_product ON supplier_product.id=supplier.id LEFT JOIN purchase_order ON purchase_order.id=supplier.id");
                    $color1 = "#b3b3b3";
                    $color2 = "#cccccc";
                    $color = $color1;

                ?>
                <select class="item" name="item"><br>
                    <?php
                    $mysqli =mysqli_connect('localhost','root','','growth');
                    $resultSet = $mysqli ->query("SELECT *, supplier.id AS supid FROM supplier LEFT JOIN supplier_product ON supplier_product.id=supplier.id LEFT JOIN purchase_order ON purchase_order.id=supplier.id");
                    while ($rows = $resultSet ->fetch_assoc()){
                        $color == $color1 ? $color = $color2 : $color = $color1;
                        $supProdDesc = $rows ['supProdDesc'];
                        echo "<option value = '$supProdDesc' style='background:$color;'>$supProdDesc</option>";
                    }
                ?>
                </select>
            </div>

            <div class="form-group  w-25">
                <label>Quantity:</label>
                <input class="form-control" placeholder="0.00" type="number" name="quantity" id="qtyId"
                    autocomplete="off" oninput="multiply()">
            </div>

            <div class="form-group  w-25"><br>
                <label>Price:</label>
                <input class="form-control" placeholder="0.00" type="number" name="price" id="priId" autocomplete="off"
                    oninput="multiply()">
            </div>
            <div class="form-group  w-25"><br>
                <label>Total Amount:</label>
                <input class="form-control" value="0.00" type="text" name="amount_total" id="total" readonly>
            </div>
            <button class="btn btn-danger"><a href="#" class="text-light">Cancel</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
            <button id="createPDF" class="btn btn-primary" name="submit">Create pdf</button>
            <script>
    function multiply() {
        var quantity = document.getElementById("qtyId").value;
        var price = document.getElementById("priId").value;
        var total = parseFloat(quantity) * parseFloat(price);
        document.getElementById("total").value = total;
    }
    </script>


        </form>
    </div>


    


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


$pdf->Cell(27,5,'Phone Number',0,0,'L');
$pdf->Cell(40,5,'08888',0,0);
$pdf->Cell(67,5,'Phone Number',0,0,'R');
$pdf->Cell(50,5,'08888',0,0);
$pdf->ln(10);

$pdf->Cell(28,5,'Contact Person',0,0,'L');
$pdf->Cell(40,5,'08888',0,0);
$pdf->Cell(66,5,'Contant Person',0,0,'R');
$pdf->Cell(40,5,'08888',0,0);   
$pdf->ln(15);