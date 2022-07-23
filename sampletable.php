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
    <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Employee ID</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Hire Date</th>
                    </tr>
                </thead>
                <tbody id="output">
                    <tr class='table-row' data-href='add-user.php'>
                        <td>Data 1</td>
    				    <td>Data 2</td>
    				    <td>Data 3</td>
    				    <td>Data 4</td>
    				    <td>Data 5</td>
    				    <td>Data 6</td>
                    </tr>
                </tbody>
                
    </table>
    

    <script type="text/javascript">

        $(document).ready(function() {
            $(".table-row").click(function() {
            
                thisdata = $(this).attr('data-href');
            
                window.location.href = thisdata;
            });
        });

    </script>
</body>
</html>



