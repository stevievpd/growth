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
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-fw fa-user"></i>
                Inventory
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                    <?php

                            $sql = "SELECT * from customer";
                            $result=mysqli_query($con, $sql);
                            if($result){
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $customer_id=$row['customer_id'];
                                $customer_name=$row['customer_name'];
                                $customer_email=$row['customer_email'];
                                $customer_address=$row['customer_address'];

                                echo ' <tr>
                                <th scope="row">'.$customer_id.'</th>
                                <td>'.$customer_name.'</td>
                                <td>'.$customer_email.'</td>
                                <td>'.$customer_address.'</td> 
                                <td>
                                <button class ="btn btn-primary my-1"><a href="invupdate.php?updateid= '.$customer_id.'" class = "text-light">Update</a></button>
                                <button class ="btn btn-danger my-1"><a href="invdelete.php?deleteid= '.$customer_id.'" class = "text-light">Delete</a></button>
                                <button class ="btn btn-warning my-1"><a href="viewinv.php?viewid= '.$customer_id.'" class = "text-light">View</a></button>        
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