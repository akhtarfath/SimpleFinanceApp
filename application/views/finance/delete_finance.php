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

            if($_GET['num_in'])
            {
                $num_in = $_GET['num_in'];
                
                    $data[] = $num_in;

                $query = 'DELETE FROM t_feeIn WHERE num_in = ?';
                $row   = $conn ->  prepare($query);
                $row  -> execute($data);

                echo '<script> window.location = "'.base_url('finance/').'"; </script>';
            }

            else if($_GET['num_out'])
            {
                $num_out = $_GET['num_out'];
                
                    $data[] = $num_out;

                $query = 'DELETE FROM t_feeOut WHERE num_out = ?';
                $row   = $conn ->  prepare($query);
                $row  -> execute($data);

                echo '<script> window.location = "'.base_url('finance/').'"; </script>';
            }

?>