<?php

// Create connection
include 'db/db.php';
$sql = "SELECT * FROM employee WHERE first_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
				  <td>". $row['employee_id']."</td>
				  <td>". $row['first_name']."</td>
				  <td>". $row['last_name']."</td>
				  <td>". $row['email']."</td>
				  <td>". $row['phone_number']."</td>
				  <td>". $row['hire_date']."</td>
				  <td>".$row['timestamp']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>