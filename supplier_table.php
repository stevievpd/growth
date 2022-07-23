<?php 
require('db/db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
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
                    <th scope="col">Email</th>
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
            $supplier_id=$row['supplier_id'];
            $supplier_name=$row['supplier_name'];
            $address=$row['address'];
            $phone=$row['phone'];
            $email=$row['email'];
            $stamp=$row['stamp'];



            echo ' <tr>
            <th scope="row">'.$supplier_name.'</th>
            <td>'.$address.'</td>
            <td>'.$phone.'</td> 
            <td>'.$email.'</td>
            <td>'.$stamp.'</td> 
            <td>
            <button class ="btn btn-primary my-1"><a href="supplier_update.php?updateid= '.$supplier_id.'" class = "text-light">Update</a></button>
            <button class ="btn btn-danger my-1"><a href="supplier_delete.php?deleteid= '.$supplier_id.'" class = "text-light">Delete</a></button>
            <button class ="btn btn-warning my-1"><a href="supplier_table.php?viewid= '.$supplier_id.'" class = "text-light">View</a></button>        
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