<?php

include 'db/db.php';
$sql = "SELECT * FROM employee WHERE first_name LIKE '%".$_POST['name']."%' OR last_name LIKE '%".$_POST['name']."%' OR email LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr class='table-row' data-href='add-user.php'>
				  <td>". $row['employee_id']."</td>
				  <td>". $row['first_name']."</td>
				  <td>". $row['last_name']."</td>
				  <td>". $row['email']."</td>
				  <td>". $row['phone_number']."</td>
				  <td>". $row['hire_date']."</td>
		        </tr>";
	}
//script echo start
	echo " 
	<script type='text/javascript'>
		$(document).ready(function() {
			$('.table-row').click(function() {
			
				thisdata = $(this).attr('data-href');
			
				window.location.href = thisdata;
			});
		});
	</script>
	";//echo end
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
   