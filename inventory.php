<?php 
require('db.php');
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
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-archive"></i>
                Inventory
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Product Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                    <?php

                            $sql = "SELECT * from inventory";
                            $result=mysqli_query($con, $sql);
                            if($result){
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $prodCode=$row['prodCode'];
                                $prodDesc=$row['prodDesc'];
                                $unit=$row['unit'];
                                $quantity=$row['quantity'];

                                echo ' <tr>
                                <th scope="row">'.$prodCode.'</th>
                                <td>'.$prodDesc.'</td>
                                <td>'.$unit.'</td>
                                <td>'.$quantity.'</td> 
                                <td>
                                <button class ="btn btn-primary my-1"><a href="invupdate.php?updateid= '.$prodCode.'" class = "text-light">Update</a></button>
                                <button class ="btn btn-danger my-1"><a href="invdelete.php?deleteid= '.$prodCode.'" class = "text-light">Delete</a></button>
                                <button class ="btn btn-warning my-1"><a href="viewinv.php?viewid= '.$prodCode.'" class = "text-light">View</a></button>        
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