<!DOCTYPE html>
<html>
<body>

    <h1>This is your user agent:</h1>
    <p><?= $_SERVER['HTTP_USER_AGENT']?></p> 
    <br><br><br>

    <h1>Little Forms:</h1>
    <form action="form.php" method="get">
        <p>Your name: <input type="text" name="fullname"/></p>
        <p>Your age: <input type="text" name="age"/></p>
        <p>Your Email: <input type="text" name="email"/></p>
        <p><input type="submit"/></p>
    </form>

    <p><?= var_dump($_GET) ?></p>
    <p><?= var_dump($_POST) ?></p>
    
</body>
</html>
