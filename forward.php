<!DOCTYPE html>
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
            $sql = "INSERT INTO searches (ip_addr, research) VALUES ({$ip_addr_val}, {$search_term})";
            $result = mysqli_query($conn, $sql);
            header('Location: https://acme.co');
            //header('Location: {$search_term}');
        ?>
    </head>
    <body>
        <p><?= mysqli_error($conn) ?></p>
        <?php
            $sql = "INSERT INTO searches (ip_addr, research) VALUES ({$ip_addr_val}, {$search_term})";
            mysqli_close($conn);
        ?>
    </body>