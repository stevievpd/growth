<?php 
require('db/db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user-index.php');
	die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>

<body>

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body">
                <div style="display: inline; width: 50%;">
                    <i class="fa fa-archive"></i>
                    Inventory
                </div>

                <form class="form-inline my-2 my-lg-0 float-right">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <button class="btn float-right">
                    <a href="inventory-add.php">
                        <i class="fa-solid fa-square-plus fa-lg"></i>
                    </a>
                </button>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Product Code</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Stamp</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="output"> <!-- Table -->
                                <?php

                                    $sql = "SELECT * from inventory";
                                    $result=mysqli_query($conn, $sql);
                                    if($result){
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    $prodCode=$row['prodCode'];
                                    $prodName=$row['prodName'];
                                    $prodDesc=$row['prodDesc'];
                                    $quantity=$row['quantity'];
                                    $price=$row['price'];
                                    $cost=$row['cost'];
                                    $stamp=$row['stamp'];



                                    echo ' <tr>
                                    <th scope="row">'.$prodCode.'</th>
                                    <td>'.$prodName.'</td>
                                    <td>'.$prodDesc.'</td> 
                                    <td>'.$quantity.'</td>
                                    <td>'.$price.'</td> 
                                    <td>'.$cost.'</td>
                                    <td>'.$stamp.'</td>
                                    <td>
                                    <button class ="btn btn-primary my-1"><a href="inventory_update.php?updateid= '.$prodCode.'" class = "text-light">Update</a></button>
                                    <button class ="btn btn-danger my-1"><a href="inventory_delete.php?deleteid= '.$prodCode.'" class = "text-light">Delete</a></button>
                                    </td>
                                    <tr>';
                                    }   
                                }

                                ?>

             </tbody>
             <button class ="btn btn-success my-1"><a href="purchase_order.php" class = "text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></button>
           
        </table>
</div>

    <?php include('footer.php')?>

</body>

</html>