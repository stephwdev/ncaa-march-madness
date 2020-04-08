

<?php


include "classes.php";
$db = new MyDB();

$name = 'steph';

if(!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";

}


?>