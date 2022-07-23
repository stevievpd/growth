<?php
require('db/db.php');
include('header.php');

if(isset($_GET['deleteid'])){
    $supplier_id=$_GET['deleteid'];
}
    $sql="DELETE FROM `supplier` WHERE supplier_id=$supplier_id"; 
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: supplier_table.php");
    }
    else{
         die(mysqli_error($conn));
    }    

?>