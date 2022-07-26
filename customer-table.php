<?php 
require('db/db.php');
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user-index.php');
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
                    <i class="fa fa-fw fa-user float-left" style="padding-top: 8px;"></i>
                    <span>List of Customers</span>
                </div>

                <div style="display: inline">
                    <form class="form-inline my-2 my-lg-0 float-right">
                        <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <button class="btn float-right">
                        <a href="customer-add.php">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </button>

                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody id="output">

            </tbody>

        </table>
    </div>
    </div>
    <?php include('footer.php')?>


    <!-- Populate table script -->
    <script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: 'queries/customer-search.php',
            data: {
                name: $("#search").val(),
            },
            success: function(data) {
                $("#output").html(data);
            }
        });
    });
    </script>

    <!-- Search script on keypress -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#search').keyup(function() {
            $.ajax({
                type: 'POST',
                url: 'queries/customer-search.php',
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