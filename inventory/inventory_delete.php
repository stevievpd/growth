<?php
require('db/db.php');
include('header.php');

if(isset($_GET['deleteid'])){
    $prodCode=$_GET['deleteid'];
}
    $sql="DELETE from inventory WHERE prodCode=$prodCode";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: inventory.php");
    }
    else{
         die(mysqli_error($conn));
    }    

?>