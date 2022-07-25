<?php 
require('db/db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user-index.php');
	die();
}
?>

<?php
$conn =mysqli_connect("localhost", "root","","growth");
if(isset($_POST['purchase_order'])){
    $supplier_name = $_POST['supplier_name'];
    $purchase_date =$_POST['purchase_order'];
    $expected_date = $_POST['expected_date'];
    $notes =$_POST['notes'];
    $item = $_POST['item'];
    $quantity =$_POST['qauntity'];
    $price = $_POST['price'];
    $amount_total =$_POST['amount_total'];


    $sql="INSERT INTO purchase_order (supplier_name, purchase_order, exepted_date, notes, item, quantity, price, amount_total) values ('$supplier_name', '$purchase_order','$expected_date', '$notes','$item', '$quantity','$price', '$amount_total')";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        $_SESSION['status']="Inserted Successfully";
        header("Location: purchase_create.php");

    }else{
        $_SESSION['status']="not inserted";
        header("Location purchase_create.php");
    }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-fw fa-user float-left" style="padding-top: 8px;"></i>
                <p class="float-left" style="padding-top: 2px">Purchase List</p>

                <form class="form-inline my-2 my-lg-0 float-right">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <button class="btn float-right">
                    <a href="purchase_order.php">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </button>

        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Expected Date</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount Total</th>

                </tr>
            </thead>
            <tbody>
            </tbody>

        </table>
    </div>
    </div>
    <?php include('footer.php')?>
    <?php
if(iseet($_SESSION['status'])){
    echo "<4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}
?>


</body>
</html>