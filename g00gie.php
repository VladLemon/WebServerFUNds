<!DOCTYPE html>
<html>
    <head>
        <title>G00gie.ca</title>
        <?php
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "animelist";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from searches;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>

<body>

<form action="forward.php" method="GET">
    <input id="search" name="search" type="text" placeholder="Search google or type URL">
    <input id="submit" type="submit" value="Search">
</form>

</body>
</html>
