<?php

    $dns  = "mysql:host=127.0.0.1; dbname=ab_finance";
    $user = "root";
    $pass = "";
    
    try {

        $conn = new PDO($dns, $user, $pass);
        // echo "success connect!";
    }
    catch(PDOException $e) {
        echo "Connection Failed".$e->getMessage();
    }

    if($_GET['num_report'])
    {
        $num_report = $_GET['num_report'];
        
            $data[] = $num_report;

        $query = 'DELETE FROM t_reports WHERE num_report = ?';
        $row   = $conn ->  prepare($query);
        $row  -> execute($data);

        echo '<script> window.location = "'.base_url('report/').'"; </script>';
    }

?>