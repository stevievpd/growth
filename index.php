<?php 
include('header.php');
require('db/db.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
	die();
}
?>


<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <?php
                                $sql = "SELECT * FROM employee";
                                $query = $con->query($sql);
                                echo "<h3>".$query->num_rows."</h3>";
                                ?>
                            <p>Total Employees</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="employee-table.php" class="small-box-    footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

        </section>


        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <?php
                                $sql = "SELECT * FROM inventory";
                                $query = $con->query($sql);
                                echo "<h3>".$query->num_rows."</h3>";
                                ?>
                            <p>Total Stocks</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="inventory.php" class="small-box-    footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

        </section>
        

        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <?php
                                $sql = "SELECT * FROM customer";
                                $query = $con->query($sql);
                                echo "<h3>".$query->num_rows."</h3>";
                                ?>
                            <p>Total Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="customer-table.php" class="small-box-    footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

        </section>


    </div>

</body>



<?php include('footer.php')?>