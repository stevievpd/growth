<!-- 
<?php
    require('db/db.php');
    $results_per_page = 10;
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);

    $number_of_results = mysqli_num_rows($result);

    $number_of_pages = ceil($number_of_results/$results_per_page);

    if(!isset($_GET['page'])){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
  
    $this_page_first_result = ($page - 1) * $results_per_page;

    $sql = "SELECT * FROM employees LIMIT ".$this_page_first_result.',' .$results_per_page;
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        echo $row['id'] .''.$row['firstname'].'<br>';
    }

    for($page = 1; $page <= $number_of_pages; $page++){
        echo '<a href = "pagination.php?page=' . $page . '">'. $page .'</a>';
    }

?> -->
