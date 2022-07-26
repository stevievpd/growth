<?php 
require('db/db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:inventory.php');
	die();
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
                <p class="float-left" style="padding-top: 2px">List of Suppliers</p>
                
                <form class="form-inline my-2 my-lg-0 float-right">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <button class="btn float-right">
                    <a href="supplier-add.php">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </button>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Bank Account</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Tin</th>
                    <th scope="col">Stamp</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

<?php

        $sql = "SELECT * from supplier";
        $result=mysqli_query($conn, $sql);
        if($result){
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $supplier_name=$row['supplier_name'];
            $address=$row['address'];
            $phone_number=$row['phone_number'];
            $bank=$row['bank'];
            $bank_account=$row['bank_account'];
            $branch=$row['branch'];
            $tin=$row['tin'];
            $stamp=$row['stamp'];



            echo ' <tr>
            <th scope="row">'.$supplier_name.'</th>
            <td>'.$address.'</td>
            <td>'.$phone_number.'</td> 
            <td>'.$bank.'</td>
            <td>'.$bank_account.'</td> 
            <td>'.$branch.'</td>
            <td>'.$tin.'</td> 
            <td>'.$stamp.'</td>
            <td>
            <button class ="btn btn-primary my-1"><a href="supplier_update.php?updateid= '.$id.'" class = "text-light">Update</a></button>
            <button class ="btn btn-danger my-1"><a href="supplier_delete.php?deleteid= '.$id.'" class = "text-light">Delete</a></button>
            <button class ="btn btn-warning my-1"><a href="inventory-add.php?viewid= '.$id.'" class = "text-light">Add Item</a></button>        
            </td>
            <tr>';
            }
            
        }

        ?>


</tbody>

</table>
</div>
</div>
<?php include('footer.php')?>

</body>
</html>