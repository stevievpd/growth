<?php 
require('db/db.php');
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
                <i class="fa-solid fa-user-plus"></i>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Hire Date</th>
                    <th scope="col">Action</th>

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


        echo ' <tr>
        <th scope="row">'.$employee_id.'</th>
        <td>'.$first_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$email.'</td> 
        <td>'.$phone_number.'</td>
        <td>'.$hire_date.'</td>

        
        <td>
        <button class ="btn btn-primary my-1"><a href="employee-update.php?updateid= '.$employee_id.'" class = "text-light">Update</a></button>
		<button class ="btn btn-danger my-1"><a href="delete.php?deleteid= '.$employee_id.'" class = "text-light">Delete</a></button>
        <button class ="btn btn-warning my-1"><a href="employee-view.php?viewid= '.$employee_id.'" class = "text-light">View</a></button>
       
      </td>
	  
      </tr>';
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