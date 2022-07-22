<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>
        <div class="d-none d-md-inline-block ml-auto"></div>
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <?php if($_SESSION['ROLE']==1){?>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employee-table.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span>Employees</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inventory.php">
                    <i class="fa fa-archive"></i>
                    <span>Inventory</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customer-table.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span>Customers</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="attendance.php">
                    <i class="fa fa-fw fa-newspaper"></i>
                    <span>Payroll</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="add-user.php">
                    <i class="fa fa-fw fa-newspaper"></i>
                    <span>Add User</span></a>
            </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fa fa-fw fa-newspaper"></i>
                    <span>Point of Sale</span></a>
            </li>
        </ul>
        <div id="content-wrapper">