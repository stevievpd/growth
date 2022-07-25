<?php

include '../db/db.php';
$sql = "SELECT * FROM customer WHERE customer_name LIKE '%".$_POST['name']."%' OR customer_email LIKE '%".$_POST['name']."%' OR customer_address LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr class='table-row' data-href='add-user.php'>
                    <td>". $row['customer_id']."</td>
				    <td>". $row['customer_name']."</td>
				    <td>". $row['customer_email']."</td>
				    <td>". $row['customer_address']."</td>
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