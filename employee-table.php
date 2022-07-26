<?php 
require('db/db.php');
include('header.php');
include('employee_modal.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
	die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">       
                <div style="display: inline; text-align: center">
                    <span class="fa fa-fw fa-user float-left" style="padding-top: 8px;"></span>
                    <span style="line-height: 2; padding-left: 8px">List of Employees</span>
                </div>

                <div style="display: inline">

                    <form class="form-inline my-2 my-lg-0 float-right">
                        <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <button class="btn float-right">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                class="fa fa-plus"></i> New</a>
                    </button>
                    <button class="btn float-right">
                        <a href="employee-reports.php">
                            <i class="fa-solid fa-rocket"></i>
                        </a>
                    </button>

                </div>

            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Schedule</th>
                    <th>Member Since</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody id="output">

            </tbody>

        </table>
    </div>

    <?php include('footer.php')?>

    <script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: 'queries/employee-search.php',
            data: {
                name: $("#search").val(),
            },
            success: function(data) {
                $("#output").html(data);
            }
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#search').keyup(function() {
            $.ajax({
                type: 'POST',
                url: 'queries/employee-search.php',
                data: {
                    name: $("#search").val(),
                },
                success: function(data) {
                    $("#output").html(data);
                }
            });
        });
    });
    </script>



</body>

</html>