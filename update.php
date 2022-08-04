<?php

require('db.php');
$emp_no=$_GET['updateid'];
$sql="SELECT * from employees where employee_id=$employee_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$phone_number=$row['phone_number'];
$hire_date=$row['hire_date'];
$hire_date=$row['job_id'];
$hire_date=$row['salary'];


if(isset($_POST['submit'])){
    $birth_date=$_POST['birth_date'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $gender=$_POST['gender'];
    $hire_date=$_POST['hire_date'];

    $sql="UPDATE employees SET emp_no=$emp_no, birth_date='$birth_date', first_name='$first_name', last_name='$last_name', gender='$gender', hire_date='$hire_date' WHERE emp_no=$emp_no";
    $result=mysqli_query($con,$sql);
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
                <label>Birth date:</label>
                <input type="date" class="form-control" placeholder="Enter birthdate " name="birth_date" autocomplete="off" value = <?php echo $birth_date;?>>
            </div>
            <div class="form-group">
                <label>First name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)"  class="form-control" placeholder="Enter first name " name="first_name" autocomplete="off" value = <?php echo $first_name;?>>
            </div>
            <div class="form-group">
                <label>Last name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control" placeholder="Enter last name " name="last_name" autocomplete="off"value = <?php echo $last_name;?>> 
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control" placeholder="Enter gender " name="gender" autocomplete="off" value = <?php echo $gender;?>>
            </div>
            <div class="form-group">
                <label>Hired date: </label>
                <input type="date" class="form-control" placeholder="Enter birthdate " name="hire_date" autocomplete="off" value = <?php echo $hire_date;?>>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
            <button class ="btn btn-danger"><a href="display.php"class = "text-light">Cancel</a></button>

            
        </form>

    </div>


</body>

</html>

