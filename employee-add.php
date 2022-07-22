<?php

include 'connect.php';
if(isset($_POST['submit'])){

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $hire_date=$_POST['hire_date'];
    $salary=$_POST['salary'];

    
    $sql="INSERT INTO employee (first_name, last_name, email, phone_number, hire_date, salary) values  ('$first_name','$last_name','$email','$phone_number', '$hire_date', '$salary')";
    $result=mysqli_query($con,$sql);
    if($result){

        header("Location: display.php");
    }
    else{
    }
         die(mysqli_error($con));
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
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control"
                    placeholder="Enter first name " name="first_name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Last name:</label>
                <input type="text" onkeydown="return /[a-z ' ']/i.test(event.key)" class="form-control"
                    placeholder="Enter last name " name="last_name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>email:</label>
                <input type="email" class="form-control"
                    placeholder="Enter email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Phone number:</label>
                <input type="text" class="form-control" placeholder="Enter phone number " name="phone_number"
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
            <button class="btn btn-danger"><a href="display.php" class="text-light">Cancel</a></button>
        </form>

    </div>


</body>

</html>