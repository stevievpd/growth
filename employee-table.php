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
                <i class="fa fa-fw fa-user float-left" style="padding-top: 8px;"></i>
                <p class="float-left" style="padding-top: 2px">List of Employees</p>
                
                <form class="form-inline my-2 my-lg-0 float-right">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <button class="btn float-right">
                    <a href="employee-add.php">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </button>
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
        <button class ="btn btn-primary my-1"><a href="employee-update.php?updateid= '.$employee_id.'" class = "text-light"><i class="fa-solid fa-file-pen"></i></a></button>
		<button class ="btn btn-danger my-1"><a href="employee-delete.php?deleteid= '.$employee_id.'" class = "text-light"><i class="fa-solid fa-folder-minus"></i></a></button>
        <button class ="btn btn-warning my-1"><a href="employee-view.php?viewid= '.$employee_id.'" class = "text-light"><i class="fa-solid fa-users-viewfinder"></i></a></button>

        <!-- Button trigger modal -->
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirm">
            <i class="fa-solid fa-folder-minus"></i>
		</button>

		<!-- Modal -->
		<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="deleteConfirmLabel">Warning!</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
                <p>Are you sure you want to delete '.$first_name.' '.$last_name.'?</p>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button class="btn btn-danger my-1">
				    <a href="employee-delete.php?deleteid= '.$employee_id.'">Yes</a>	
				</button>
		      </div>
		    </div>
		  </div>
		</div>
       
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

    <script type="text/javascript">
    $(document).ready(function() {
        $("#search").keypress(function() {
            $.ajax({
                type: 'POST',
                url: 'search.php',
                data: {
                    name: $("#search").val(),
                },
                success: function(data) {
                    $("#output").html(data);
                }
            });
        });
    });
    </script>


</body>

</html>