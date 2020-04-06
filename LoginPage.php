<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
		


		<?php  

        echo "<h1> Admin Login Page </h1>";

        if(isset($_POST['submit'])) {

            $name = array("toya", "chelsea", "steph");
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!in_array($username,$name)) {

                echo " Sorry you are not allowed";

            } else {

                echo "Welcome";
            }

        }


		?>

    <form action="form_process.php" method="post">

        <label for="username">Username</label>
        <input type = "text" name = "username"><br>
        <label for="password">Password</label>
        <input type = "password" name = "password"><br>
        <input type = "submit" name="submit">

    </form>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>