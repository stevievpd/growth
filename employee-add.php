<?php

include 'db/db.php';
include 'header.php';
if(isset($_POST['submit'])){

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $hire_date=$_POST['hire_date'];
    $salary=$_POST['salary'];

    
    $sql="INSERT INTO employee (first_name, last_name, email, phone_number, hire_date, salary) values  ('$first_name','$last_name','$email','$phone_number', '$hire_date', '$salary')";
    $result=mysqli_query($conn,$sql);
    if($result){

        header("Location: employee-table.php");
    }
    else{
    }
         die(mysqli_error($conn));
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
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-fw fa-user"></i>
                List of Employees
                <button class="btn float-right">
                    <a href="employee-add.php">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div class="container my-10">
        <form method="post">
            <div class="form-group">
                <label>First name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control"
                    placeholder="Enter first name " name="first_name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Last name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control"
                    placeholder="Enter last name " name="last_name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control"
                    placeholder="Enter email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Phone number:</label>
                <input type="tel" onkeydown="return /[0-9 ' ']/i.test(event.key)" maxlength="11" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="0-(912)-345-6789" name="phone_number"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Hired date: </label>
                <input type="date" class="form-control" placeholder="Enter birthdate " name="hire_date"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Salary:</label>
                <input type="number" class="form-control" placeholder="Enter salary" name="salary"
                    autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button class="btn btn-danger"><a href="employee-table.php" class="text-light">Cancel</a></button>
        </form>

    </div>


</body>

</html>