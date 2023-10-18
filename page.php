<!DOCTYPE html>
<html>
    <head>
        <title>SQL test</title>
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
            $sql = "select * from top;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>

<body>

</body>

<body>
    <h3>Data base: </h3>
    <form action="result.php" method="get">
        <label for="anime">Select anime to see details about:</label><br/>
        <select id="anime_top" name="anime_top">
            <?php
                foreach($result as $row) 
                {
                    echo "<option value='{$row['anime_top_number']}'> Top: {$row['anime_top_number']} | Name: {$row['anime_name']}</option>\n";
                }
                mysqli_close($conn);
            ?>
        </select>
        <br/>
        <input type="submit" value="submit"/>  
    </form>

    </br></br>

    <form action="chtable.php" method="get">
        <label for="anime1">Select anime to change in data base:</label><br/>
        <select id="anime_top1" name="anime_top1">
            <?php
                foreach($result as $row) 
                {
                    echo "<option value='{$row['anime_top_number']}'> Top: {$row['anime_top_number']} | Name: {$row['anime_name']}</option>\n";
                }
                mysqli_close($conn);
            ?>
        </select></br></br>
        <label for="anime2">Enter the number of current episodes:</label><br/>
        <input type="number" required id="epnum" name="epnum" /><br /><br />
        <input type="submit" value="submit"/>  
    </form>

    <h3>This is your user agent:</h3>
    <p><?= $_SERVER['HTTP_USER_AGENT']?></p> 
    <br><br><br>

    <h3>Little Forms:</h3>
    <form action="form.php" method="post">
        <p>Your name: <input type="text" name="fullname"/></p>
        <p>Your age: <input type="text" name="age"/></p>
        <p>Your Email: <input type="text" name="email"/></p>
        <p><input type="submit"/></p>
    </form>

</body>
</html>
