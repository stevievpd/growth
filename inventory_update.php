<?php
    require('db/db.php');
    include("header.php");
    $prodCode=$_GET['updateid'];
    $sql="SELECT * from inventory where prodCode=$prodCode";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $prodCode=$row['prodCode'];
    $prodDesc=$row['prodDesc'];
    $unit=$row['unit'];
    $quantity=$row['quantity'];
 
    if(isset($_POST['submit'])){
    $prodCode=$_POST['prodCode'];
    $prodDesc=$_POST['prodDesc'];
    $unit=$_POST['unit'];
    $quantity=$_POST['quantity'];;
    $sql="UPDATE inventory SET prodCode=$prodCode, prodDesc='$prodDesc', unit='$unit', quantity='$quantity'WHERE prodCode=$prodCode";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: inventory.php");
    }
    else{
         die(mysqli_error($conn));
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
    <title>Update inventory</title>

</head>

<body>
    <div class="container my-10">   
        <form method="post">
        <div class="form-group">
                <label>Product Code:</label>
                <input type="number" class="form-control" placeholder="Enter product code " name="prodCode" autocomplete="off" value = <?php echo $prodCode;?>>
            </div>
            <div class="form-group">
                <label>Product Name: </label>
                <input type="text" class="form-control" placeholder="Enter product name " name="prodName" autocomplete="off" value = <?php echo $prodName;?>>
            </div>
            <div class="form-group">
                <label>Product Description: </label>
                <input type="text" class="form-control" placeholder="Enter porduct description " name="prodDesc" autocomplete="off" value ="0.00" <?php echo $prodDesc;?>>
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="text" class="form-control" placeholder="Enter unit "  id="quantityid" name="quantity" autocomplete="off" value ="0.00" oninput="multiply()" <?php echo $quantity;?>>
            </div>
            <div class="form-group">
                <label>Price: </label>
                <input type="number" class="form-control" value="0.00" id="priceid" name="price" autocomplete="off" value ="0.00"  oninput="multiply()"<?php echo $price;?>>
            </div>
            <div class="form-group">
                <label>Cost: </label>
                <input type="number" class="form-control" value="0.00" id="cost" name="cost" autocomplete="off" value = <?php echo $cost;?>>
            </div>

            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="inventory.php"class = "text-light">Cancel</a></button>
            
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

