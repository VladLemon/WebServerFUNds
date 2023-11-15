<!DOCTYPE html>

<script>
function AlertBoxFn() {
  alert("Allert! Please click on ok button and forget about Allert Button");
}

function HideFn() {
    var x = document.getElementById("hide");
    if (x.style.display === "none") 
        {
        x.style.display = "block";
        } 
    else 
        {
        x.style.display = "none";
        }
}
function truthFn(){
    document.getElementById("img").src = "https://media.istockphoto.com/id/1358867896/vector/weekend-loading-bar-infographics-design-element-with-status-of-week-completion-hand-drawn.jpg?s=612x612&w=0&k=20&c=f5uD78cgXWbOGSO8pAJNO4KRlU4vq8xWcAKZBMmjBj4=";
    }

function ChangeFn(chg) {
  chg.innerHTML = "Noooooo!!!! Why did you did that to mee";
}
function loadDocFn() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("here").innerHTML = this.responseText;
  }
  xhttp.open("GET", "ajax.txt");
  xhttp.send();
}
</script>

<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <title>My Home Page</title>
</head>

<body>
    <h1>This is Home Page</h1>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJEAAACRCAMAAAD0BqoRAAAAY1BMVEX///8ICAgAAAB+fn75+fm2trYpKSnl5eUuLi7c3Nzz8/NWVlb29vb8/PxiYmKqqqrJyclPT0+Ojo7Dw8NsbGxxcXEfHx83Nzc/Pz+ioqIVFRVHR0eHh4caGhrt7e3W1taYmJgmSjgTAAAEjUlEQVR4nO2b3YKyIBCGcfzJn0hNTWvLuv+r/BDqWzNQY9D1gPdwW+FxgGEYRkKsrKysrKysrKysrKysrKw2oTjKUjepHejk1ImbZlH8hzipm19gqEvupvvuZ7oyTpSGwjBD8b+GabQyT1aeJDB9rFOZkdXs5Pm1zDgfpqp9bwUa9tJFM4nzgmqKFcwUJTN5BFOy9HyiR2c+D2dyjt6SZvrKQC8z5UuZiVLif2mgl5n8hZDI42sDvcx0XIRnf9Dj4UyH/QJAlT4QQyqN73b7HwwQQ/oxaiWKtBBHqkwiUYKYQ/+RDgaJ2CpDAzEkgyvONwHEkIz5pUjLMUqIHEPemyZmgBhSbiY8OZoCMjWV5o3ZdAjH/8vIuM1a+JC7s1woJPjIpJjVURWTuJpjJiiQPNRrprsBSPk/pzOQoMFObn+6FwiEn6GkCGYgYZ1SPQ1U755AhOymLQo1Diib7qFqOU/hdVDx9I4MGYqonOgA4CoMVEIpJshxapihxABFp/Hm4eLz4bo3EEB958/4l4lnThiflE407nQQlGQ3OEQHuInxuE8hpQiicLTtLlRlJ5RuoB6EHwyOHNAbH2sI9IHi8ZZd7n89BiRWNPMUVx4oetfxNIV+zD02aC+M9gcaMTEoiRpodi+4kUf1h81VNwuh2A7uIeS/rxznEIokTTHiyMDVBWLtKxv92XGXyDaOY3/vpEe+pbDZ1Y48nOsOW6RaNNDtrF3/V3CGI5A6cOWeae+qRk4/JlE5bLG0WJ8JnD4dcHaCRByElKdybbetmNhwE1MoayBpJY+1CdSiy0LhYOGsSSSf2C+fm4Hq6ByXACK5FsmDAe2pLY34wRWpYeZy1G96Zp6JT/i99K0g0SSSLeBnTx6btmOTgRmw4rm1bvJ/NhJqEklC/qddorBb/mPaMc8kRvcsacXRJJKlz9vuxbuddcqlxK+dt5Ul4Q0SdcuMrerH1JGCEvoQXkLiQ4wSBX5UwW1erOzfoLr7kvjBJBG/9WDeZt6pi3ks6cnSKJHz1WlCkVTRJlIcrw0Q6a41RUDxTkSp19c8Il1/pMjSDGzUlodfle8bnYpI12crArYB0S7oXUCe3v2mikh3X1Pt/QOi3vKGYB6R7t6viI8MEOnGR4pcFppIP4ZUxNl4Iu04WxWyoYl0JzZVTG08kf55bb8QEeIeSXruxxKxc79+elQ6bGgiTG5Emj9CEsENkT+i0hwblgiTY6NSt40lwuUhZREJjkg7EhlrE0eEzWdLcv4oInTOn0ruReA9LGvfiN5+ij8XBvpehMgiScjdnqpL75dL1f9J8mhC8ZdHkphkULmm/unjQRP3a3R7d5DEU2cUvwUydE+7vbvsDd73G7rONluFZKJuRPfYKJeB2hrTFUj4+iPzJVFbq9FC1rEly5RIT17BqngWqvVj2lw9JPPe+ZZqRrk8rbraZbW12mPSVT98U5+9ThH73Br20F+gdlWlrLzNqvNfU1EajHwLEaz+LQRX973IMOZmiLmb/uVHLFF2dpPwCRMm7vlPv6mxsrKysrKysrKysrKysrLq6x+t6DiRIGBIlwAAAABJRU5ErkJggg=="><br>
    
    <h2>My other Web Pages</h2>
    <p>The Test page with forms is located under</p>
    <a href="Test.html">Test Page</a> <br>
    <a href="#down">Funny links</a> 

    <br><br><br><br><br><br><br><br><br><br>
    
    <button onclick="AlertBoxFn()">Allert Button</button>

    <p id="time">The current time is ...</p>
    <button onclick="document.getElementById('time').innerHTML = Date()">Show time</button>
    <p id="hide">This text is unhidable</p>
    <button onclick="HideFn()">Hide/Show the text</button>
    <br><br><br>
    <p>Under is shown my favorite thing</p>
    <button onclick="truthFn()">Show the reality</button><br>
    <img id="img" src="https://www.thefactsite.com/wp-content/uploads/2017/10/monday-facts.webp">
    <br><br>
    <button onclick="ChangeFn(this)">Click on the button to change it</button>
    <br><br>

    Ajax demo<br>
    <button onclick="loadDocFn()">Click Me to see Ajax Magic</button><br>
    <span id="here"></span>

    SQL+PHP
    



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h2 id="down">Some Funny Links</h2>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Consult it!</a>

</body>
</html>