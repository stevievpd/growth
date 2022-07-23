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
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Attendance
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th>Date</th>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th>Tools</th>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</body>

</html>
<?php include('footer.php')?>