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
            $sql = "select * from top where anime_top_number={$topnum};";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        Your selected anime top number is: <?= $topnum ?><br/>
        <p><?= mysqli_error($conn) ?></p>
        <?php
            foreach($result as $row)
            {
                echo "Its name is: {$row['anime_name']} and it has {$row['total_num_episodes']} episodes.";
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
