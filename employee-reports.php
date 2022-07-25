<?php 
include('header.php');
require('db/db.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
	die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ChartJS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.min.js"
        integrity="sha512-zjlf0U0eJmSo1Le4/zcZI51ks5SjuQXkU0yOdsOBubjSmio9iCUp8XPLkEAADZNBdR9crRy3cniZ65LF2w8sRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!---->
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
                <span>Employee Reports</span>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-10">
                    <canvas id="myChart"></canvas>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
    let myChart = document.getElementById('myChart').getContext('2d');
    let linechart = new Chart(myChart, {
        type: "line",
        data: {
            labels: [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday",
            ],
            datasets: [{
                label: "Traffic",
                data: [122, 3445, 4894, 7986, 3548, 8798, 7080],
            }]
        }
    })
    </script>


</body>

</html>