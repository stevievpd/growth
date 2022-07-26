<?php

include 'db/db.php';
$sql = "SELECT * FROM supplier WHERE supplier_name LIKE '%".$_POST['name']."%' OR email LIKE '%".$_POST['name']."%' OR phone LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
				  <td>". $row['supplier_name']."</td>
				  <td>". $row['address']."</td>
				  <td>". $row['phone']."</td>
				  <td>". $row['email']."</td>
				  <td>". $row['stamp']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>