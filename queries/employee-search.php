<?php


include '../db/db.php';

$sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id wHERE firstname LIKE '%".$_POST['name']."%' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr class='table-row'data-toggle='modal' data-target='#edit'>
				  <td>". $row['employee_id']."</td>
				  <td>". $row['firstname']." ". $row['lastname']."</td>
				  <td>". $row['description']."</td>
				  <td>". date('h:i A', strtotime($row['time_in']))." ". date('h:i A', strtotime($row['time_out']))."</td>
				  <td>". date('M d, Y', strtotime($row['created_on']))."</td>
		        </tr>";
				
	}
//script echo start 
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
include 'employee_modal.php';

?>

