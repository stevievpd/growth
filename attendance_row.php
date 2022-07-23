<?php 
	
	require('db/db.php');
	include('header.php');
	include('timepicker/bootstrap-timepicker.css');
	include('timepicker/bootstrap-timepicker.js');
	include('timepicker/bootstrap-timepicker.min.css');
	include('timepicker/bootstrap-timepicker.min.js');
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, attendance.id as attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE attendance.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>