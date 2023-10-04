<!DOCTYPE html>
<html>
<body>

<h1>Form Responce</h1>

<p> Your name is: <?= htmlspecialchars($_POST['fullname'])?></p>
<p> Your age is: <?= htmlspecialchars($_POST['age'])?></p>
<p> Your email is: <?= htmlspecialchars($_POST['email'])?></p>

</body>
</html>


