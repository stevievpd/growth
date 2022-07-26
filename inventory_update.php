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
                <label>Description: </label>
                <input type="text" class="form-control" placeholder="Enter description " name="prodDesc" autocomplete="off" value = <?php echo $prodDesc;?>>
            </div>
            <div class="form-group">
                <label>Unit:</label>
                <input type="text" class="form-control" placeholder="Enter unit " name="unit" autocomplete="off" value = <?php echo $unit;?>>
            </div>
            <div class="form-group">
                <label>Quantity: </label>
                <input type="number" class="form-control" placeholder="Enter quantity " name="quantity" autocomplete="off" value = <?php echo $quantity;?>>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="inventory.php"class = "text-light">Cancel</a></button>
            
        </form>
         
    </div>


</body>

</html>

