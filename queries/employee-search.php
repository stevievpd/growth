<?php

include '../db/db.php';

	$sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id WHERE employee_id LIKE '%".$_POST['name']."%' OR firstname LIKE '%".$_POST['name']."%' ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_assoc($result)) {
			echo "	<tr class='table-row' data-id='".$row['empid']."'>
					<td>". $row['employee_id']."</td>
					<td>". $row['firstname']." ". $row['lastname']."</td>
					<td>". $row['description']."</td>
					<td>". date('h:i A', strtotime($row['time_in']))." ". date('h:i A', strtotime($row['time_out']))."</td>
					<td>". date('M d, Y', strtotime($row['created_on']))."</td>
					<td>
					<button class='btn btn-danger btn-sm btn-flat delete' data-id='".$row['empid']."'><i class='fa fa-trash'></i> Delete</button>
					</td>
					</tr>";

		}

	}
	else{ 
		echo "<tr><td>0 result's found</td></tr>";
	}
	include 'employee_modal.php';
	include 'includes/scripts.php';
?>


<script>
	$(function(){
  $('.table-row').click(function(e){
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
    url: 'employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.empid').val(response.empid);
      $('.employee_id').html(response.employee_id);
      $('.del_employee_name').html(response.firstname+' '+response.lastname);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
      $('#schedule_val').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
    }
  });
}
</script>

