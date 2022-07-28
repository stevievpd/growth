
<?php 
require('db/db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user-index.php');
	die();
}
?>

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
        <div class="container my-10">   
            <form method="post>
                <div class="form-group">
                    <label>Purchase ID</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <div class="form-group  w-25">
                    <label>Purchase Date</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <div class="form-group  w-25">
                    <label>Expected Date</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <div class="form-group  w-25">
                    <label>Supplier</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <p>Items</p>
                <div class="form-group  w-25">
                    <label>Item Name</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <div class="form-group  w-25">
                    <label>Quantity</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <div class="form-group  w-25">
                    <label>Purchase Cost</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>

                <div class="form-group  w-25">
                    <label>Total Amount</label>
                    <input class="form-control" value="0.00" type="number" name="quantity">
                </div>
            </form>
        </div>
    </body>
</html>


<style type="text/css">
.main{
padding:20px;
}
</style >