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
    $purchase_date = $_POST['purchase_date'];
    $expected_date = $_POST['expected_date'];
    $item = $_POST['item'];
    $quantity =$_POST['qauntity'];
    $price = $_POST['price'];
    $amount_total =$_POST['amount_total'];

    $sql="SELECT * from purchase_order where purchase_id";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['status']="Inserted Successfully";
        header("Location: purchase_table.php");

    }else{
        $_SESSION['status']="not inserted";
        header("Location purchase_table.php");
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
                    <th scope="col">Purchase ID</th>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Expected Date</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount Total</th>

                </tr>
            </thead>
            <tbody id="output">
            </tbody>

        </table>
    </div>
    </div>
    <?php include('footer.php')?>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: 'POST',
                url: 'queries/purchaseorder-search.php',
                data: {
                    name: $("#search").val(),
                },
                success: function(data) {
                    $("#output").html(data);
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').keyup(function() {
                $.ajax({
                    type: 'POST',
                    url: 'queries/purchaseorder-search.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
        });
    </script>

    <?php
        if(isset($_SESSION['status'])){
        echo "<4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
        }
    ?>


</body>
</html>