<!DOCTYPE html>
<html>
  <head>
    <title>Test page</title>
  </head>
  <body>
    <h1>This is a secondary page</h1>
    <p>
      This is a FUNny experiment trying learning html, this page contains:<br />
      <a href="#picture">1.Beautiful Picture</a> <br />
      <a href="#forms">2.HTML Forms</a> <br />
    </p>

    <h2 id="picture">Beautiful Picture</h2>
    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQtDp1wkbwn1u94BqADFFEfvSLW6gmQmPl8Q&usqp=CAU"
    />

    <h2 id="forms">HTML Forms</h2>

    <form>
      <label for="fname">First name:</label><br />
      <input type="text" onblur="document.getElementById('imp').innerHTML = 'This Field is REQUIRED, answer it'" /><br />
      <span id="imp"></span><br/>
      <label for="lname">Last name:</label><br />
      <input type="text" required id="lname" name="lname" /><br /><br />

      <label for="student_id">Student ID:</label>
      <input
        type="text"
        id="student_id"
        name="student_id"
        pattern="\d{7}"
        title="7 numbers student ID"
      /><br /><br />

        <form action="submit.php" method="POST">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <br>
        </form>
      <br /><br />
      <p>Which programming languages do you know?</p>
      <input type="checkbox" id="language1" name="language1" value="C" />
      <label for="language1"> C</label><br />
      <input type="checkbox" id="language2" name="language2" value="C++" />
      <label for="language2"> C++</label><br />
      <input
        type="checkbox"
        id="language3"
        name="language3"
        value="JavaScript"
      />
      <label for="language3"> JavaScript</label><br />
      <input type="checkbox" id="language4" name="language4" value="html" />
      <label for="language3"> html</label><br />
      <input
        type="checkbox"
        id="language5"
        name="language5"
        value="JavaScript"
      />
      <label for="language3"> Python</label><br />

      <p>Choose your favorite Web language:</p>
      <input type="radio" id="html" name="fav_language" value="HTML" />
      <label for="html">HTML</label><br />
      <input type="radio" id="css" name="fav_language" value="CSS" />
      <label for="css">CSS</label><br />
      <input type="radio" id="C" name="fav_language" value="C" />
      <label for="C">C</label>

      <br /><input type="submit" value="Submit" />
    </form>

    <br><a href="index.html"> Go Back to Home Page</a>
  </body>
</html>
