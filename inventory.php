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
    <title>Inventory</title>
</head>

<body>

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body">
                <div style="display: inline; width: 50%;">
                    <i class="fa fa-archive"></i>
                    Inventory
                </div>

                <form class="form-inline my-2 my-lg-0 float-right">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <button class="btn float-right">
                    <a href="inventory-add.php">
                        <i class="fa-solid fa-square-plus fa-lg"></i>
                    </a>
                </button>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Product Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody id="output">

            </tbody>

        </table>
    </div>
    </div>
    <?php include('footer.php')?>

    <script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: 'queries/inventory-search.php',
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
                url: 'queries/inventory-search.php',
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