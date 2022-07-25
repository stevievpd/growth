<?php

include '../db/db.php';
$sql = "SELECT * FROM inventory WHERE prodCode LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr class='table-row' data-href='add-user.php'>
				  <td>". $row['prodCode']."</td>
				  <td>". $row['prodDesc']."</td>
				  <td>". $row['unit']."</td>
				  <td>". $row['quantity']."</td>
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