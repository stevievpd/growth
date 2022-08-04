<?php 
require('db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
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
                List of Employees
            </div>
        </div>
        <table class="table table-hover"style="width: 1647px;border-left-width: 10px; ">
            <thead>
                <tr>
                    <th scope="col" style="width: 100px;">Employee ID</th>
                    <th scope="col" style="width: 100px;">First name</th>
                    <th scope="col" style="width: 100px;">Last name</th>
                    <th scope="col" style="width: 100px;">Email</th>
                    <th scope="col" style="width: 150px;">Phone number</th>
                    <th scope="col" style="width: 150px;">Hire Date</th>
                    <th scope="col" style="width: 100px;">Job ID</th>
                    <th scope="col" style="width: 100px;">Salary</th>
                    <th scope="col" style="width: 150px;">Manager ID</th>
                    <th scope="col" style="width: 150px;">Department ID</th>
                    <th scope="col" style="width: 200px;">Action</th>

                </tr>
            </thead>
            <tbody>

                <?php

    $sql = "SELECT * from employee";
    $result=mysqli_query($con, $sql);
     if($result){
    while($row=mysqli_fetch_assoc($result))
    {
        $employee_id=$row['employee_id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $phone_number=$row['phone_number'];
        $hire_date=$row['hire_date'];
        $job_id=$row['job_id'];
        $salary=$row['salary'];
        $manager_id=$row['manager_id'];
        $department_id=$row['department_id'];


        echo ' <tr>
        <th scope="row">'.$employee_id.'</th>
        <td>'.$first_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$email.'</td> 
        <td>'.$phone_number.'</td>
        <td>'.$hire_date.'</td>
        <td>'.$job_id.'</td>
        <td>'.$salary.'</td>
        <td>'.$manager_id.'</td>
        <td>'.$department_id.'</td>
        
        <td>
        <button class ="btn btn-primary my-1"><a href="update.php?updateid= '.$employee_id.'" class = "text-light">Update</a></button>
		<button class ="btn btn-danger my-1"><a href="delete.php?deleteid= '.$employee_id.'" class = "text-light">Delete</a></button>
       
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