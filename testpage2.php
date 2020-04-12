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
        var repetition = setInterval(funss, 1000);
        funss();
        function funss(){
            var d = new Date();
            document.getElementById("tester").innerHTML = "<h3>" + d + "</h3>";
        }
    </script>
    
</head>

<body>

    <?php
    $var1="WELCOME TO THE SCRIPT TESTING PAGE!";
    echo "<div class='a'><h1>$var1</h1></div>";
    ?>

    <div id="footer" position="fixed" bottom="0px">
        <a href="index.php">Return to Home Page.</a>
        <br>
        <a href="testpage1.php">Move to Test Page 1.</a>
        <br>
        <a href="testpage2.php">Reload page.</a>
    </div>

    <div class="b" id="retard">
         <h1>Database Values:</h1>
    
        <?php
        //this code can open and read lines from a .db file, using sqlite

        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open("testphp/test.db");
            }
        }
        $db = new MyDB();

        $ret = $db->query("SELECT * FROM test1");
        //display database
        echo "<div class='a c'>";
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            
            echo "<p> name = <b>". $row["name"] . "</b></p>";
            echo "<p> phonenum = <u><a href='tel:". $row["phonenumber"] ."'>".$row["phonenumber"] ."</a></u></p>";
            echo "<p> randomnum = <i>". $row["randomnum"] ."</i></p>";
            
        }
        $db->close();
        echo "</div>";
        ?>
        <br>
    </div>

    <div class="a" id="tester">
        <h1>Supposed to be script running. Idk why there is a one second delay. There is supposed to be a method call that eliminates it.</h1>
    </div>
</body>

</html>