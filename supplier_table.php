<?php 
require('db/db.php');
include('header.php');
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
                <i class="fa fa-fw fa-user float-left" style="padding-top: 8px;"></i>
                <p class="float-left" style="padding-top: 2px">List of Suppliers</p>
                
                <form class="form-inline my-2 my-lg-0 float-right">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <button class="btn float-right">
                    <a href="supplier-add.php">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </button>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Stamp</th>
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
        $("#search").keyup(function() {
            $.ajax({
                type: 'POST',
                url: 'supplier-search.php',
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

        <script type="text/javascript">
            $(document).ready(function() {
                $.ajax({
                    type: 'POST',
                    url: 'supplier-search.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
            </script>



</body>

</html>