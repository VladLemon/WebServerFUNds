<!DOCTYPE html>
<html>
<head>
    <title>Button Animation</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function showPage() {
            var page = document.getElementById("hiddenPage");
            page.style.display = "block";
        }
    </script>
</head>
<body>
    <button onclick="showPage()">Click Me</button>
    <div id="hiddenPage" class="hidden">
        <h1>Welcome to the Hidden Page!</h1>
        <p>This is the content of the hidden page.</p>
    </div>
</body>
</html>
