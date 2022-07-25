<?php include 'includes/session.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Add inventory</title>

</head>

<body>
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Schedules
                </h1>
            </section>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Schedule</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>
                                    <?php
                    $sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN schedules ON schedules.id=employees.schedule_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['employee_id']."</td>
                          <td>".$row['firstname'].' '.$row['lastname']."</td>
                          <td>".date('h:i A', strtotime($row['time_in'])).' - '.date('h:i A', strtotime($row['time_out']))."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['empid']."'><i class='fa fa-edit'></i> Edit</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>

        <?php include 'employee_schedule_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function() {
        $('.edit').click(function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });
    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'schedule_employee_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.employee_name').html(response.firstname + ' ' + response.lastname);
                $('#schedule_val').val(response.schedule_id);
                $('#schedule_val').html(response.time_in + ' ' + response.time_out);
                $('#empid').val(response.empid);
            }
        });
    }
    </script>
</body>

</html>