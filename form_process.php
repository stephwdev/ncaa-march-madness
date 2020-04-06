<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">
<?php

if(isset($_POST['submit'])) {

    $name = array("toya", "chelsea", "steph");
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!in_array($username,$name)) {

        echo " Sorry you are not allowed";

    } else {

        echo "Welcome. You are now logged in. <br>";
    }

}

?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
