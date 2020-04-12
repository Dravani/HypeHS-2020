<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Test Page 2</title>

  <meta name="authors" content="">
  <meta name="description" content="Hype HS homepage">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="stylesheet.css" rel="stylesheet">

  <script>
        var myVar = setInterval(myTimer, 1000);

        function myTimer() {
        var d = new Date();
        //document.getElementById("retard").innerHTML = document.getElementById("retard").innerHTML + "<h1>" + d + "</h1>";
        }
    </script>

</head>

<body>
    <?php
    $var1="WELCOME TO THE SCRIPT TESTING PAGE!";
    echo "<div class='a'><h1>$var1</h1></div>";
    ?>

    <div class="b" id="retard"><h1>Timetable:</h1><div>

    <div id="footer" position="fixed" bottom="0px">
        <a href="index.php">Return to Home Page.</a>
        <br>
        <a href="testpage1.php">Move to Test Page 1.</a>
        <br>
        <a href="testpage2.php">Reload page.</a>
    </div>
</body>

</html>