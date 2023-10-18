<!DOCTYPE html>
<html>
    <head>
        <title>SQL test- Results</title>
        <?php
            // Retrieve submitted information
            $topnum = (int)($_GET["anime_top"]); 
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "animelist";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from courses where anime_top_number={$topnum};";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        Your selected anime is: <?= $topnum ?><br/>
        <p><?= mysqli_error($conn) ?></p>
        <?php
            foreach($result as $row)
            {
                echo "{$row['anime_name']} has {$row['total_num_episodes']} episodes and is top {$row['anime_top_number']}.";
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
