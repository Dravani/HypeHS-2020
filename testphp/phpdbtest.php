<?php

//this code can open and read lines from a .db file, using sqlite

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('test.db');
    }
}
$db = new MyDB();

$ret = $db->query("SELECT * FROM test1");
while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    echo "name = ". $row['name'] . "\n";
    echo "phonenum = ". $row['phonenumber'] ."\n";
    echo "randomnum = ". $row['randomnum'] ."\n\n";
 }
 echo "Operation done successfully\n";
 $db->close();

 ?>
