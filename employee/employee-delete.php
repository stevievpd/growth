<?php

require('db/db.php');
include('header.php');

if(isset($_GET['deleteid'])){
    $employee_id=$_GET['deleteid'];
}
    $sql="DELETE from employee WHERE employee_id=$employee_id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: employee-table.php");
    }
    else{
         die(mysqli_error($conn));
    }    

?>