<!DOCTYPE header('Location: https://acme.co');>
<html>
    <head>
        <?php
            // Retrieve submitted information
            $ip_addr_val = ($_SERVER['REMOTE_ADDR']); 
            $search_term = ($_GET["search"]);

            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "animelist";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "INSERT INTO searches ip_addr, research) VALUES ({$ip_addr_val}, {$search_term})";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>