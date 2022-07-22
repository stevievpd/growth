<?php

require('db/db.php');
include('header.php');

if(isset($_GET['deleteid'])){
    $employee_id=$_GET['deleteid'];
}
    $sql="DELETE from inventory WHERE prodCode=$prodCode";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location: inventory.php");
    }
    else{
         die(mysqli_error($con));
    }    

?>