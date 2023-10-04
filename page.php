<!DOCTYPE html>
<html>
<body>

    <h1>This is your user agent:</h1>
    <p><?= $_SERVER['HTTP_USER_AGENT']?></p> 
    <br><br><br>
    <h1>Little Forms:</h1>
    <label for="fname">First name:</label><br />
    <input type="text" id="fname" name="fname" /><br />
    <label for="lname">Last name:</label><br />
    <input type="text" id="lname" name="lname" /><br />
    <label for="age">Age:</label><br />
    <input type="text" pattern="\d" id="age" name="age" /><br />

</body>
</html>
