

<?php


include "classes.php";
$db = new MyDB();


if(!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";

}


?>