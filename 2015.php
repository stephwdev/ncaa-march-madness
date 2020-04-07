<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->


<article class="main-content col-md-8">
		


		<?php  

        //This function says hello!
        echo "<h2> 2015 NCAA Tournament Bracket </h2>";

		?>

    <div class="bracket">
        <img src="images/bracket.png" width="700" height=500">
        <div class="bottom-left">Bottom Left</div>
        <div class="top-left">Top Left</div>
        <div class="top-right">Top Right</div>
        <div class="bottom-right">Bottom Right</div>
        <div class="centered">Centered</div>
    </div>
    <a href="2016.php"><?php echo "Hello";?></a>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>