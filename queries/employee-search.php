<?php


include '../db/db.php';

$sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id wHERE firstname LIKE '%".$_POST['name']."%' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr class='table-row'>
				  <td>". $row['employee_id']."</td>
				  <td>". $row['firstname']." ". $row['lastname']."</td>
				  <td>". $row['description']."</td>
				  <td>". $row['time_in']." ". $row['time_out']."</td>
				  <td>". $row['created_on']."</td>
		        </tr>";
				
	}
//script echo start 
include 'employee_modal.php';
	echo " 
	<script type='text/javascript'>
		$(document).ready(function() {
			$('.table-row').click(function() {
			
				thisdata = $(this).attr('data-target');
				window.location.href = thisdata;
			});
		});
	</script>
	";

	
}
else{
	echo "<tr><td>0 result's found</td></tr>";
	
}

?>

