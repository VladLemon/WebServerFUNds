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
    <?= $_SERVER['REMOTE_ADDR'] ?>

    <label for="student_id">Student ID:</label>
      <input
        type="text"
        id="input"
        name="input"
        title="Search google or type URL"
      />

    <form action="" method="get">
        <label for="pt1"></label><br/>
        <input type="number" required id="epnum" name="epnum" /><br /><br />
    </form>

    <form action="users.php" method="GET">
<input id="search" name="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>

</body>
</html>
