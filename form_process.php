<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php include "classes.php"; ?>



<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">
<?php

if(isset($_POST['submit'])) {

//    $name = array("toya", "chelsea", "steph");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new MyDB();

    if($db != SQLITE3_NULL) {
        echo "Connection!";

    } else {
        echo "Not connected.";
    }

    //Need to update this section to read the DB for this info
//    $query = "INSERT INTO Admin(Username,Password) ";
//    $query .= "VALUES ('$username', '$password')";
//
//    $result = $db->query($query);
//    if (!$result) {
//        die("QUERY FAILED");
//    }



//    if(!in_array($username,$name)) {
//
//        echo "Sorry you do not have access to this page.";
//
//    } else {
//
//        echo "Welcome. You are now logged in. <br>";
//    }

}

?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
