<?php

require('db/db.php');
include("header.php");
$employee_id=$_GET['updateid'];
$sql="SELECT * from employee where employee_id=$employee_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$phone_number=$row['phone_number'];
$hire_date=$row['hire_date'];
$job_id=$row['job_id'];
$salary=$row['salary'];
$manager_id=$row['manager_id'];
$department_id=$row['department_id'];


if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $hire_date=$_POST['hire_date'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $job_id=$_POST['job_id'];
    $salary=$_POST['salary'];
    $manager_id=$_POST['manager_id'];
    $department_id=$_POST['department_id'];

    c
    if($result){
        header("location: employee-table.php");
    }
    else{
         die(mysqli_error($con));
    }    
}
?> 

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Add Employee</title>

</head>

<body>
    <div class="container my-10">   
        <form method="post">
            <div class="form-group">
                <label>First name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)"  class="form-control" placeholder="Enter first name " name="first_name" autocomplete="off" value = <?php echo $first_name;?>>
            </div>
            <div class="form-group">
                <label>Last name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control" placeholder="Enter last name " name="last_name" autocomplete="off"value = <?php echo $last_name;?>> 
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off" value = <?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="number" class="form-control" placeholder="Enter phone number " name="phone_number" autocomplete="off" value = <?php echo $phone_number;?>>
            </div>
            <div class="form-group">
                <label>Hired date: </label>
                <input type="date" class="form-control" placeholder="Enter birthdate " name="hire_date" autocomplete="off" value = <?php echo $hire_date;?>>
            </div>
            <div class="form-group">
                <label>Job ID Number:</label>
                <input type="number" class="form-control" placeholder="Enter Job ID number " name="job_id" autocomplete="off" value = <?php echo $job_id;?>>
            </div>
            <div class="form-group">
                <label>Manager ID Number:</label>
                <input type="number" class="form-control" placeholder="Enter Manager ID number " name="manager_id" autocomplete="off" value = <?php echo $manager_id;?>>
            </div>
            <div class="form-group">
                <label>Department ID Number:</label>
                <input type="number" class="form-control" placeholder="Enter Department ID number " name="department_id" autocomplete="off" value = <?php echo $department_id;?>>
            </div>
            <div class="form-group">
                <label>Salary:</label>
                <input type="number" class="form-control" placeholder="Enter salary " name="salary" autocomplete="off" value = <?php echo $salary;?>>
            </div>

            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="employee-table.php"class = "text-light">Cancel</a></button>

            
        </form>

    </div>


</body>

</html>

