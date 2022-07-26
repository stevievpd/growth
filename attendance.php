<?php 
require('db/db.php');
include('header.php');
include ('attendance_modal.php'); 
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user-index.php');
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
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Attendance</h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div>

                    <div class="box-header with-border">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                class="fa fa-plus"></i> New</a>
                        
                    </div>

                    <div class="align-self-center">
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    
                                    <th>Date</th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>
                                    <?php
                                            $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id ORDER BY attendance.date DESC, attendance.time_in DESC ";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                            $status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">late</span>';
                                            echo "
                                                <tr>
                                                
                                                <td>".date('M d, Y', strtotime($row['date']))."</td>
                                                <td>".$row['empid']."</td>
                                                <td>".$row['firstname'].' '.$row['lastname']."</td>
                                                <td>".date('h:i A', strtotime($row['time_in']))."</td>
                                                <td>".date('h:i A', strtotime($row['time_out']))."</td>
                                                <td>
                                                    <button class='btn btn-success btn-sm btn-flat edit' data-id='".$row['attid']."'><i class='fa fa-edit'></i> Edit</button>
                                                    <button class='btn btn-danger btn-sm btn-flat delete' data-id='".$row['attid']."'><i class='fa fa-trash'></i> Delete</button>
                                                </td>
                                                </tr>
                                            ";
                                            }
                                        ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </section>
        </div>


  

  </div>
  <?php include 'footer.php'; ?>
  <?php include 'attendance_modal.php'; ?>
  <?php include 'js/scripts.php'; ?>

<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'attendance_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#datepicker_edit').val(response.date);
      $('#attendance_date').html(response.date);
      $('#edit_time_in').val(response.time_in);
      $('#edit_time_out').val(response.time_out);
      $('#attid').val(response.attid);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#del_attid').val(response.attid);
      $('#del_employee_name').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>

